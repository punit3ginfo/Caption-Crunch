<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
echo "<h1>welcome to my app</h1>";
require __DIR__.'/connection.php'; 
require __DIR__.'/conf.php'; 
require __DIR__.'/vendor/autoload.php';
 $config = pg_query($dbconn4, "SELECT last_name FROM customers WHERE id = 21");
$config = pg_fetch_assoc($config);
echo "<pre>";
print_r($config);
echo "</pre>";
use phpish\shopify;
	 $shop = $_REQUEST['shop'];
	 "code=".$_REQUEST['code'];
	$access_token = shopify\access_token($_REQUEST['shop'], SHOPIFY_APP_API_KEY, SHOPIFY_APP_SHARED_SECRET, $_REQUEST['code']);
//	echo "access_token".$access_token."<br>";
$url = "https://{$shop}/admin/webhooks.json";
	$topics = array(
			//'customers/create' => "https://shopifyturn2.herokuapp.com/get_datashopify.php?action=customer_signup::{$shop}::{$access_token}",
			'orders/create' => "https://shopifyturn2.herokuapp.com/get_datashopify.php?action=order_created::{$shop}::{$access_token}",
		//'orders/updated' => "https://shopifyturn2.herokuapp.com/get_datashopify.php?action=order_updated::{$shop}::{$access_token}",
		//	'app/uninstalled' => "https://shopifyturn2.herokuapp.com/get_datashopify.php?action=app_uninstalled::{$shop}::{$access_token}",
		);
	foreach($topics as $topic => $address){
		$data = array(
				'access_token' => $access_token,
				'webhook' => array(
					'address' => $address,
					'format' => 'json',
					'topic' => $topic,
				)
			);
		$data = json_encode($data);
	//	echo "<pre>";
		//print_r($data);
		//exit();
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');                                                                     
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);                                                                  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
			'Content-Type: application/json',                                                                                
			'Content-Length: ' . strlen($data))                                                                       
		);
		curl_exec($ch);
	}
	
	
	
// The data to send to the API





$oid=123456;


$postData='{
    "orderId":"26265121",
    "deliveryDate": "2015-05-20",
    "locale": "en_US",
    "postalCode": "10667",
    "emailOptOut": false,
    "user":          {
        "firstName": "Andy",
        "lastName": "Adamson",
        "nickName": "",
        "emailAddress": "andrew@sample.com",
        "externalId": null
    },
    "items":     [
    {
       "lineItemId": "1",
       "title": "Sneakers",
       "url": "www.treadzzzzz.com/sneakers",
       "sku": "12",
       "price": "29.99",
       "itemImageUrl": "www.treadzzzzz.com/img/sneakers.jpg"
    }
    
    ]
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
	?>
