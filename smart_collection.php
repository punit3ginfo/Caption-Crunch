<?php
try
	{
		# Making an API request can throw an exception
		
		
		
			echo "<script>alert(78);</script>";
			$smart_collection = $shopify('POST /admin/smart_collections.json', array(), array
		(
			"smart_collection" => array
			(	
			"title"=>'Shared'	
			)
		));
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
		
		
