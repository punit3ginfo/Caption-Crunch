<?php 
session_start();
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
	require __DIR__.'/vendor/autoload.php';
	use phpish\shopify;
	require __DIR__.'/conf.php'; //Configuration
	$_SESSION['shop']="share-tag.myshopify.com";
        $pid=$_REQUEST['pid'];
	$tags=$_REQUEST['tags'];
        $tags = str_replace('AA', ',', $tags);
 	$access_token=$_REQUEST['access_token'];
	$shop=$_REQUEST['shop'];
	//$access_token = shopify\access_token($shop, SHOPIFY_APP_API_KEY, SHOPIFY_APP_SHARED_SECRET, $code);
	$shopify = shopify\client($shop, SHOPIFY_APP_API_KEY, $access_token); 
                
     
try
	{
		
		# Making an API request can throw an exception
		
	       $pidii = $pid.'.json';
		
		
		$product = $shopify('PUT /admin/products/'.$pidii, array(), array
		(
			'product' => array
			(
				"tags"=>$tags	
			)
		));

		//print_r($product);
	}
	catch (shopify\ApiException $e)
	{
		
		# HTTP status code was >= 400 or response contained the key 'errors'
		echo $e;
		print_r($e->getRequest());
		print_r($e->getResponse());
	}
	catch (shopify\CurlException $e)
	{
		
		# cURL error
		echo $e;
		print_r($e->getRequest());
		print_r($e->getResponse());
	}
  ?>
