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
//echo $inserted =  pg_query($dbconn4,"INSERT INTO CUSTOMERS (ID,order_id,first_name,last_name,address,order_amount) VALUES ('3','1003','nisha','test','teste','40')");
$webhookContent = "";
$webhook = fopen('php://input' , 'rb');
$file = fopen("test.txt","w");
echo fwrite($file,$webhook);
fclose($file);
while (!feof($webhook)) {
    $webhookContent .= fread($webhook, 4096);
}
$data = json_decode($webhook, true);
$p1 = $data['order']; 
foreach($p1 as $val)
{
	$order_id = $val['id'];
    $first_name = $val['name'];
    $last_name = $val['name'];
    $address = $val['address']['streetaddress'];
    $order_amount = $val['total_price'];
	if (!$dbconn4) {
	 exit;
	}
	echo $inserted =  pg_query($dbconn4,"INSERT INTO CUSTOMERS (ID,order_id,first_name,last_name,address,order_amount) VALUES ('4','1004','nisha4','test','teste','$40')");
    pg_query($dbconn4,"INSERT INTO CUSTOMERS (ID,order_id,first_name,last_name,address,order_amount) VALUES ('4',".$order_id.",".$first_name.",".$last_name.",".$address.",".$order_amount.")");
   
}
echo $inserted =  pg_query($dbconn4,"INSERT INTO CUSTOMERS (ID,order_id,first_name,last_name,address,order_amount) VALUES ('6','1005','".$webhook."','test','teste','40')");
fclose($webhook);
error_log($webhookContent);
?>
