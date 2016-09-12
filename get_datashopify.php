<?php
require __DIR__.'/vendor/autoload.php';
	use phpish\shopify;
require __DIR__.'/conf.php'; 
require __DIR__.'/connection.php'; 

/*function verify_webhook($data, $hmac_header)
{
	$calculated_hmac = base64_encode(hash_hmac('sha256', $data, SHOPIFY_APP_SECRET, true));
	return ($hmac_header == $calculated_hmac);
}
$hmac_header = $_SERVER['HTTP_X_SHOPIFY_HMAC_SHA256'];
$data = file_get_contents('php://input');
$verified = verify_webhook($data, $hmac_header);
error_log('Webhook verified: '.var_export($verified, true)); */
//check error.log to see the result
 $webhookContent = "";

$webhook = fopen('php://input' , 'rb');
while (!feof($webhook)) {
    $webhookContent .= fread($webhook, 4096);
}
$data = json_decode($webhook, true);
$p1 = $data['order']; 
foreach($p1 as $val)
{
	$order_id = $data['order']['id'];
    $first_name = $data['order']['name'];
    $last_name = $data['order']['name'];
    $address = $data['order']['address']['streetaddress'];
    $order_amount = $data['order']['total_price'];
    pg_query($db,"INSERT INTO CUSTOMERS (ID,order_id,first_name,last_name,address,order_amount) VALUES ('1',".$order_id.",".$first_name.",".$last_name.",".$address.",".$order_amount.")");
    $result = $mysqli->query($sql);
}
fclose($webhook);

error_log($webhookContent);
?>
