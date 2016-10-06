<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
try
	{
		# Making an API request can throw an exception
		
		
		
			
			//$smart_collection = $shopify('POST /admin/smart_collections.json', {"smart_collection"=>{"title"=>"shared", "collects"=>[{"product_id"=>7901168776}]}});
			//print_r($smart_collection); 
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
		
		
