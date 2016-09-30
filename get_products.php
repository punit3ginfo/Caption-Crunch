<?php 
	session_start();

	require __DIR__.'/vendor/autoload.php';
	use phpish\shopify;
	require __DIR__.'/conf.php';
	$_SESSION['shop']=$_REQUEST['shop'];
	$access_token = shopify\access_token($_SESSION['shop'], SHOPIFY_APP_API_KEY, SHOPIFY_APP_SHARED_SECRET, $_REQUEST['code']);
	$shopify = shopify\client($_SESSION['shop'], SHOPIFY_APP_API_KEY, $access_token);
	try
	{
		# Making an API request can throw an exception
		$products = $shopify('GET /admin/products.json', array('published_status'=>'published'));
		echo "<pre>";
		//print_r($products);
		echo "</pre>";
		
		foreach($products as $singleproduct)
		{
			echo "<pre>";
		print_r($singleproduct);
			
		
			echo "apple".$singleproduct['title'];
			echo $singleproduct->variants;
			echo "welcome";
			print_r($singleproduct->variants);
		}
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
