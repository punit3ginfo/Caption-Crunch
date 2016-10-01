<?php 
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
	require __DIR__.'/vendor/autoload.php';
	use phpish\shopify;
	require __DIR__.'/conf.php'; //Configuration
	$_SESSION['shop']=$_REQUEST['shop'];
	$access_token = shopify\access_token($_SESSION['shop'], SHOPIFY_APP_API_KEY, SHOPIFY_APP_SHARED_SECRET, $_REQUEST['code']);
	$shopify = shopify\client($_SESSION['shop'], SHOPIFY_APP_API_KEY, $access_token); 


echo "test";
$baseUrl = 'https://23c709fbea4a1fc65b1e6a54a10d430c:4f36a56e3e52c00978d6dda49d23a318@share-tag.myshopify.com/admin/';
$product =
array(
 "tags"=> "share"
);
$ch = curl_init($baseUrl.'products/7885327240.json');  //note product ID in url
$data_string = json_encode(array('product'=>$product)); //json encode the product array
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");  //specify the PUT verb for update
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);  //add the data string for the request
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //set return as string true
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Content-Type: application/json',
'Content-Length: ' . strlen($data_string))
); //set the header as JSON 
 $server_output = curl_exec ($ch); */   //execute and store server output
  ?>
