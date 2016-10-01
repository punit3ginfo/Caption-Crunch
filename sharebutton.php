<?php 
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
echo "<script>alert(12345);</script>";
	require __DIR__.'/vendor/autoload.php';
	use phpish\shopify;
	require __DIR__.'/conf.php'; //Configuration
	$_SESSION['shop']=$_REQUEST['shop'];
	$access_token = shopify\access_token($_SESSION['shop'], SHOPIFY_APP_API_KEY, SHOPIFY_APP_SHARED_SECRET, $_REQUEST['code']);
	$shopify = shopify\client($_SESSION['shop'], SHOPIFY_APP_API_KEY, $access_token); 

      $pid=$_REQUEST['pid'];
try
	{
		echo "<script>alert(2);</script>";
		# Making an API request can throw an exception
		$product = $shopify('PUT /admin/products/7885330952.json', array(), array
		(
			'product' => array
			(
				"title" => "test123",
				"body_html" => "<strong>Good snowboard!</strong>",
				"vendor" => "Burton",
				"product_type" => "Snowboard",
				"tags"=>"shared1"
				
			)
		));

		print_r($product);
	}
	catch (shopify\ApiException $e)
	{
		echo "<script>alert(3);</script>";
		# HTTP status code was >= 400 or response contained the key 'errors'
		echo $e;
		print_r($e->getRequest());
		print_r($e->getResponse());
	}
	catch (shopify\CurlException $e)
	{
		echo "<script>alert(4);</script>";
		# cURL error
		echo $e;
		print_r($e->getRequest());
		print_r($e->getResponse());
	}
  ?>
