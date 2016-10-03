<?php 
     require __DIR__.'/vendor/autoload.php';
     use phpish\shopify;
     $access_token=$_REQUEST['access_token'];
     $shopify = shopify\client($_REQUEST['shop'], SHOPIFY_APP_API_KEY, $access_token ); 
     echo $_REQUEST['colid'];
?>

<?php
	try
	{
		# Making an API request can throw an exception
		/*if(isset($_REQUEST['colid']) && $_REQUEST['colid']!=''){
			//alert(1);
		$products = $shopify('GET /admin/products.json?collection_id='.$_REQUEST['colid'], array('published_status'=>'published'));
		}
		else {
			alert(2);
	       $products = $shopify('GET /admin/products.json', array('published_status'=>'published'));
		}*/
		//print_r($products);
		 $products = $shopify('GET  /admin/products.json?collection_id='.$_REQUEST['colid'], array('published_status'=>'published'));
		print_r($products);
		exit();
		foreach($products as $singleproduct)
		{
			$title=$singleproduct['title']; // Product Title
			$variants=$singleproduct['variants'];
		        $p_id1=$singleproduct['id'];
			
			foreach($variants as $variants){
				$price=$variants['price']; // Product PRice
			}
		        $images=$singleproduct['images'];
			
			foreach($images as $images){
				$src=$images['src']; //Image Source
			}
			
			?>

<!-- HTML Content for Product  START      -->
 <div class="product-card-clearfix">
	<div class="product-card-container">
		<div class="product-card-image-container">
			<img src="<?php echo $src; ?>" alt="<?php echo $title; ?>" height="292" width="192">
		</div>
		       
		<div class="product-detail-container">
			<?php echo $title; ?>
			<?php echo $price; ?>
			
		</div>
		<div class="product-share-container">
			
			<button type="button"  onclick="shareButton(<?php $p_id1; ?>);">SHARE</button>
			
		</div>
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
	?>
	<script>
	function shareButton(pid){
		
               var access_token='<?php echo $access_token ?>';
	       var shop='<?php echo $_REQUEST['shop'] ?>';
	       
		
                $.ajax({
                    url: '/sharebutton.php?pid='+ pid+'&access_token='+access_token+'&shop='+shop,
                    success: function(data){
                      
                    }
                });
            }
	</script>
