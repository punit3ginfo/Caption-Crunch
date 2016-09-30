<?php 
	session_start();

	require __DIR__.'/vendor/autoload.php';
	use phpish\shopify;
	require __DIR__.'/conf.php'; //Configuration
	$_SESSION['shop']=$_REQUEST['shop'];
	$access_token = shopify\access_token($_SESSION['shop'], SHOPIFY_APP_API_KEY, SHOPIFY_APP_SHARED_SECRET, $_REQUEST['code']);
	$shopify = shopify\client($_SESSION['shop'], SHOPIFY_APP_API_KEY, $access_token);	
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
