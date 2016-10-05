<?php

     require __DIR__.'/vendor/autoload.php';
     use phpish\shopify;
     $access_token=$_REQUEST['access_token'];
     $shopify = shopify\client($_REQUEST['shop'], SHOPIFY_APP_API_KEY, $access_token );

?>

<?php
try
	{
		# Making an API request can throw an exception
		if(isset($_REQUEST['colid']) && $_REQUEST['colid']!=''){
		$products = $shopify('GET /admin/products.json?collection_id='.$_REQUEST['colid'], array('published_status'=>'published'));
		}
		if($_REQUEST['colid']=='') {
	       $products = $shopify('GET /admin/products.json', array('published_status'=>'published'));
		}
		//print_r($products);
		//$products = $shopify('GET /admin/products.json', array('published_status'=>'published'));
		foreach($products as $singleproduct)
		{
			$title=$singleproduct['title']; // Product Title
			$variants=$singleproduct['variants'];
		        $p_id1=$singleproduct['id'];
		        $tags=$singleproduct['tags'];
			$OrigonalTag=$singleproduct['tags'];
			
		        $tags = str_replace('Shared,', '', $tags);
		        $tags = str_replace(',Shared', '', $tags);
		        $tags = str_replace('Shared', '', $tags);
			$tags = str_replace(',', 'AA', $tags);
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

      		<div class="product-card-image-container" style='background-image: url(<?php echo $src; ?>)'>

      		</div>
      		<div class="product-card-details-section">
      			<div class="product-card-details-container">
                  	<span class="product-title-text"><?php echo $title; ?></span>
                  	<div class="product-card-price-container">
                  		<span class="product-card-price-text" style="margin-right: 3px;">$<?php echo $price; ?></span><span class="product-card-price-text" style="font-size: 14px; color: #888;">$<?php echo $price; ?></span>
                  	</div>
      			</div>
      		</div>
            <div class="share-button-container">
		    <?php if (strpos($OrigonalTag, "Shared") !== false) { ?>
		    <button type="button" id="<?php echo $p_id1; ?>" class="unshare-button" onclick="unshareButton(<?php echo $p_id1; ?>,'<?php echo $tags; ?>');">
			    UNSHARE</button>
			<?php } else { ?>
		     <button type="button" id="<?php echo $p_id1; ?>" class="share-button" onclick="shareButton(<?php echo $p_id1; ?>,'Shared');">SHARE</button>
           <?php }?>
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
	function shareButton(pid,tags){

               var access_token='<?php echo $access_token ?>';
	       var shop='<?php echo $_REQUEST['shop'] ?>';


                $.ajax({
                    url: '/sharebutton.php?pid='+ pid+'&access_token='+access_token+'&shop='+shop+'&tags='+tags,
                    success: function(data){
			    console.log($(this));
			  console.log(data);
			   $('button#' + data).html('UnSave');
                    }
                });
            }
	</script>

<script>
	var tags;
	function unshareButton(pid,tags){

               var access_token='<?php echo $access_token ?>';
	       var shop='<?php echo $_REQUEST['shop'] ?>';


                $.ajax({
                    url: '/sharebutton.php?pid='+ pid+'&access_token='+access_token+'&shop='+shop+'&tags='+tags,
                    success: function(data){
			   console.log($(this));
			   console.log(data);
			   $('button#' + data).html('Save');
                    }
                });
            }
	</script>
