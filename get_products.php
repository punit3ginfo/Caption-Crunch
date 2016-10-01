<?php 
	session_start();

	require __DIR__.'/vendor/autoload.php';
	use phpish\shopify;
	require __DIR__.'/conf.php'; //Configuration
	$_SESSION['shop']=$_REQUEST['shop'];
	$access_token = shopify\access_token($_SESSION['shop'], SHOPIFY_APP_API_KEY, SHOPIFY_APP_SHARED_SECRET, $_REQUEST['code']);
	$shopify = shopify\client($_SESSION['shop'], SHOPIFY_APP_API_KEY, $access_token);

/* Share Tag Code Satrt ------------------------------------------------------------------------*/

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
$server_output = curl_exec ($ch); //execute and store server output
print_r($server_output);

/* Share Tag Code END -----------------------------------------------------------------------------*/


	try
	{
		# Making an API request can throw an exception
		$products = $shopify('GET /admin/products.json', array('published_status'=>'published'));
		foreach($products as $singleproduct)
		{
			$title=$singleproduct['title']; // Product Title
			$variants=$singleproduct['variants'];
			foreach($variants as $variants){
				$price=$variants['price']; // Product PRice
			}
		        $images=$singleproduct['images'];
			
			foreach($images as $images){
				$src=$images['src']; //Image Source
			}
			
			?>

<!-- HTML Content for Product  START      -->
	<div class="product-card-container">
      		<div class="product-card-image-container">
			<img src="<?php echo $src; ?>" alt="<?php echo $title; ?>" height="292" width="192">
		</div>
		       
		<div class="product-detail-container">
			<?php echo $title; ?>
			<?php echo $price; ?>
		</div>
		<div class="product-share-container">
			<a id="share-button" class="share-button" onclick="shareButton();return false;" href="#">
			<button type="button">SHARE</button>
			</a>
		</div>
	</div>
<!-- HTML Content for Product END    -->

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
