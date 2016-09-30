<style>
	.product-card-container {
	  float: left;
	  margin: 30px;
	}
</style>
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
		echo $products_1 = $shopify('PUT /admin/products/#7885330952.json', array('published_status'=>'published'));
		
		//$update = $shopify('PUT', "/admin/products/7885327240.json", $product); 	
		
		// Start curl
		$query={
  "product": {
    "id": 7885330952,
    "tags": "Barnes & Noble, John's Fav"
  }
};
$ch = curl_init();
// URL for curl
$url = "https://share-tag.myshopify.com/admin/products/#7885330952.json";

// Clean up string
$putString = stripslashes($query);
// Put string into a temporary file
$putData = tmpfile();
// Write the string to the temporary file
fwrite($putData, $putString);
// Move back to the beginning of the file
fseek($putData, 0);

// Headers
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
// Binary transfer i.e. --data-BINARY
curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, $url);
// Using a PUT method i.e. -XPUT
curl_setopt($ch, CURLOPT_PUT, true);
// Instead of POST fields use these settings
curl_setopt($ch, CURLOPT_INFILE, $putData);
curl_setopt($ch, CURLOPT_INFILESIZE, strlen($putString));

$output = curl_exec($ch);
echo $output;

// Close the file
fclose($putData);
// Stop curl
curl_close($ch); 
		
		
		
		
		
		
		foreach($products as $singleproduct)
		{
			
		
			
		
			$title=$singleproduct['title'];
			$variants=$singleproduct['variants'];
			foreach($variants as $variants){
				$price=$variants['price'];
			}
		        $images=$singleproduct['images'];
			
			foreach($images as $images){
				$src=$images['src'];
			}
			
			?>


	<div class="product-card-container">
      		<div class="product-card-image-container">
			<img src="<?php echo $src; ?>" alt="<?php echo $title; ?>" height="292" width="192">
		</div>
		       
		<div class="product-detail-container">
			<?php echo $title; ?>
			<?php echo $price; ?>
		</div>
		<div class="product-share-container">
			<a id="share-button" class="share-button" onclick="shareButton();return false;" href="https://buffer.com/add">
			<button type="button">SHARE</button>
			</a>
		</div>
		
					
        
		</div>

	<?php
			
			
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
