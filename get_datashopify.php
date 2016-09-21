<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
require __DIR__.'/conf.php'; 
require __DIR__.'/connection.php'; 
require __DIR__.'/vendor/autoload.php';
use phpish\shopify;
$actionTemp = explode('::', $_REQUEST['action']);
$action = $actionTemp[0];
$store = $actionTemp[1];
$access_token =$actionTemp[2];
 echo "access_token=".$access_token;

$storeData = json_decode(file_get_contents("https://{$store}/admin/shop.json?access_token={$access_token}"));
if(!empty($action) &&($action == 'order_created') ){
	$data = '';
	$webhook = fopen('php://input' , 'rb'); 
	while(!feof($webhook)){
		$data .= fread($webhook, 4096); 
	}
	fclose($webhook);
	$data1 = json_decode($data, true);
     //$email=$data->email;
	$order_id = $data1['id'];
    $first_name = $data1['billing_address']['first_name'];
    $last_name = $data1['billing_address']['last_name'];
    $address = $data1['billing_address']['address1'];
    $order_amount = $data1['total_price'];
    $created_at =$data1['created_at'];
	$created_at=explode('T',$created_at);
	$created_at=$created_at[0];
    $email=$data1['email'];
	$zipcode = $data1['billing_address']['zip'];
	//pg_query($dbconn4,"INSERT INTO customers (order_id,first_name,last_name,address,order_amount) VALUES ('{$order_id}','{$first_name}','{$data}','{$address}','{$order_amount}')");
	//exit('Query executed!');
	foreach($data1['line_items']as $item )
	{
	 $item_detail[$i]['lineItemId']=$item['variant_id'];
	 $item_detail[$i]['title']=$item['title'];
	$item_detail[$i]['url']="https://{$store}/products/".urlencode(str_replace(' ','-',$item['title']));
	$item_detail[$i]['sku']=$item['sku'];
	$item_detail[$i]['price']=$item['price'];
	$productData =json_decode(file_get_contents("https://{$store}/admin/products.json?ids={$item['product_id']}&access_token={$access_token}"), true);
	$products=$productData['products'];
	$p_array=$products[0];
	$image_array=$p_array['image'];
	$item_detail[$i]['itemImageUrl']=$image_array['src'];
	
	$i++;
}
	$items=array();
	foreach($item_detail as $single_item){
		echo "single";
		echo '<pre>';
		$items[]=$single_item;
		
		echo '</pre>';
	}
	$items=stripslashes(json_encode($items));
// The data to send to the API
$postData='{
    "orderId":"'.$order_id .'",
    "deliveryDate":"'.$created_at.'",
    "locale": "en_US",
    "postalCode": "'.$zipcode.'",
    "emailOptOut": false,
    "user":          {
        "firstName":  "'.$first_name.'",
        "lastName":  "'.$last_name.'",
        "nickName": "",
        "emailAddress": "'.$email.'",
        "externalId": null
    },
    "items": '.$items.'
}';

$postDataJson=json_decode($postData);
// $apple=json_encode($postData);
// Setup cURL
$ch = curl_init('https://api.turnto.com/v1/orders/create');
curl_setopt_array($ch, array(
    CURLOPT_POST => TRUE,
    CURLOPT_RETURNTRANSFER => TRUE,
    CURLOPT_HTTPHEADER => array(
        'Authorization: Bearer eAW1zjgK4oZ4HrfCUnJHbWqVfyl6ZUShLkq',
        'Content-Type: application/json;charset=UTF-8'
    ),
    CURLOPT_POSTFIELDS => json_encode($postDataJson)
));
// Send the request
$response = curl_exec($ch);
// Check for errors
if($response === FALSE){
    die(curl_error($ch));
}else{
	echo "sdfdfsdf";
}
// Decode the response
$responseData = json_decode($response, TRUE);
// Print the date from the response
//echo $responseData;
echo "<pre>";
print_r($responseData);
echo "</pre>";
$responseDataid=$responseData['id'];
pg_query($dbconn4,"INSERT INTO customers (order_id,first_name,last_name,address,order_amount) VALUES ('{$order_id}','{$first_name}','{$responseDataid}','{$address}','{$order_amount}')");
}

?>
