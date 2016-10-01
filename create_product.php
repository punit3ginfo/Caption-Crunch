<?php
	

	
$_SESSION['shop']=$_REQUEST['shop'];
$access_token = shopify\access_token($_SESSION['shop'], SHOPIFY_APP_API_KEY, SHOPIFY_APP_SHARED_SECRET, $_REQUEST['code']);
	$shopify = shopify\client($_SESSION['shop'], SHOPIFY_APP_API_KEY,$access_token );
           echo "<script>alert(1);</script>";
	try
	{
		echo "<script>alert(2);</script>";
		# Making an API request can throw an exception
		$product = $shopify('POST /admin/products.json', array(), array
		(
			'product' => array
			(
				"title" => "Burton Custom Freestlye 151",
				"body_html" => "<strong>Good snowboard!</strong>",
				"vendor" => "Burton",
				"product_type" => "Snowboard",
				"variants" => array
				(
					array
					(
						"option1" => "First",
						"price" => "10.00",
						"sku" => 123,
					),
					array (
						"option1" => "Second",
						"price" => "20.00",
						"sku" => "123"
					)
				)
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
