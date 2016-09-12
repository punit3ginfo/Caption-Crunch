<?php
require __DIR__.'/vendor/autoload.php';
	use phpish\shopify;
require __DIR__.'/conf.php'; 
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
    $sql = "INSERT INTO CUSTOMERS (ID,order_id,first_name,last_name,address,order_amount) VALUES ('1',".$order_id.",".$first_name.",".$last_name.",".$address.",".$order_amount.")";
    $result = $mysqli->query($sql);
}
fclose($webhook);

error_log($webhookContent);
?>
