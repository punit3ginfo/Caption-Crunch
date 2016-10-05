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
		
		
		
		
		
            <div id="<?php echo $p_id1; ?>"  class="share-button-container?>" >
		    
		    
			<script>
	$(document).ready(function(){
		var OrigonalTag = '<?php echo $OrigonalTag; ?>';
		
		var pid_1 = '<?php echo $p_id1; ?>';
		//alert(pid_1);
		var pattern = /Shared/;
		var pattern1 = / Shared/;
		
		var exists = pattern.test(OrigonalTag);
		var exists1 = pattern1.test(OrigonalTag);
		if(exists || exists1 ){
			var tags_1 = '<?php echo $tags; ?>';
		        var _id = '#'+ pid_1;

			  console.log(_id);   
			  $(_id).html('<button type=button class=share-button onclick=unshareButton('+pid_1+',"'+tags_1+'");>UnShare</button>');

		}else{
			var _id = '#'+ pid_1;
			<?php 
			if($OrigonalTag == '')
			{
			  $OrigonalTag="Shared";	
			}
			?>
			var tags_1 = '<?php echo $OrigonalTag; ?>';
			  console.log(_id);   
			  $(_id).html('<button type="button" class=share-button onclick=shareButton('+pid_1+',"'+tags_1+'");>Share</button>');
	}
	});   
</script>
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
               var pid_1 = '<?php echo $p_id1; ?>';
		var tags_1 = '<?php echo $tags; ?>';
		var _id = '#'+ pid_1;
		alert(_id);

                $.ajax({
                    url: '/sharebutton.php?pid='+ pid+'&access_token='+access_token+'&shop='+shop+'&tags='+tags,
                    success: function(data){
			$(_id).html('<button type=button class=share-button onclick=unshareButton('+pid_1+',"'+tags_1+'");>UnShare</button>');
                    }
                });
            }
	</script>

<script>
	
	
	
	
	var tags;
	function unshareButton(pid,tags){
               var pid_1 = '<?php echo $p_id1; ?>';
		var _id = '#'+ pid_1;
               var access_token='<?php echo $access_token ?>';
	       var shop='<?php echo $_REQUEST['shop'] ?>';
		var tags_1 = '<?php echo $tags; ?>';
             

                $.ajax({
                    url: '/sharebutton.php?pid='+ pid+'&access_token='+access_token+'&shop='+shop+'&tags='+tags,
                    success: function(data){		     	
			    
			  $(_id).html('<button type="button" class=share-button onclick=shareButton('+pid_1+',"'+tags_1+'");>Share</button>');
                    }
                });
            }
</script>




