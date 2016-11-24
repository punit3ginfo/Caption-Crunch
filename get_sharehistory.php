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


	$products = $shopify('GET /admin/products.json', array('published_status'=>'published'));
	$MultipleProduct_id = array();
	foreach($products as $singleproduct)
	{
		$eachProductTag=$singleproduct['tags'];
		if (strpos($eachProductTag, 'shared') !== false) {
			$MultipleProduct_id[]=$singleproduct['id'];
		}
	}


	if($MultipleProduct_id){
	$MultipleProduct_id_comma_seprated = implode(',', $MultipleProduct_id);

	$shared_products = $shopify('GET /admin/products.json', array('ids'=>$MultipleProduct_id_comma_seprated));

	foreach($shared_products as $singleproduct)
	{
		$title=$singleproduct['title']; // Product Title
		$variants=$singleproduct['variants'];
		$p_id1=$singleproduct['id'];
		$tags=$singleproduct['tags'];
		$OrigonalTag=$singleproduct['tags'];
		$ComparePrice=$singleproduct['compare_at_price'];
		$handle=$singleproduct['handle'];


		$tags = str_replace('shared', '', $tags);
		$tags = str_replace(' ', '', $tags);
		$tags = str_replace(',', 'AA', $tags);
		//$tags = str_replace(',shared', '', $tags);
		//$tags = str_replace('shared', '', $tags);
		//$tags = str_replace(',', 'AA', $tags);
		foreach($variants as $variants){
			$price=$variants['price']; // Product PRice
			$ComparePrice=$variants['compare_at_price'];
		}
		$images=$singleproduct['images'];

		foreach($images as $images){
			$src=$images['src']; //Image Source
		}

		?>


		<!-- HTML Content for Product  START      -->

		<div class="product-card-clearfix main-<?php echo $p_id1; ?>">

			<div class="product-card-container">

				<div class="ribbon ribbon-<?php echo $p_id1; ?>" style="display: block;"><span>SHARED</span></div>

				<div class="product-card-image-container product-image-<?php echo $p_id1; ?>" style='background-image: url(<?php echo $src; ?>)'>
					<!-- Opacity Layer -->
					<div class="product-card-image-container-background-hover product-opacity-<?php echo $p_id1; ?>"></div>
					<!-- Product Details Layer -->
					<div class="product-card-image-container-content-hover product-details-<?php echo $p_id1; ?>">
						<div class="product-details-container">
							<a href="<?php echo $productUrl; ?>" id="product-preview-button-<?php echo $p_id1; ?>" class="product-icon-container" target="_blank">
								<!-- <a href="javascript:void(0)" id="product-preview-button-<?php echo $p_id1; ?>" class="product-icon-container" target="_blank"> -->
								<span class="product-icon-clearfix">
									<i class="fa fa-link" aria-hidden="true"></i>
								</span>
							</a>

							<div class="product-title-container">
								<span class="cc-text-medium"><?php echo $title; ?></span>
							</div>

							<div class="product-title-container">
								<span class="product-card-price-text" style="margin-right: 3px;">$<?php echo $price; ?></span>
								<span class="product-card-price-text" style="font-size: 12px; color: #888;">$<?php echo $ComparePrice; ?></span>
							</div>
						</div>
					</div>
				</div>

				<a class='btn grey-button share-button hvr-shutter-out-horizontal' id='share-button-<?php echo $p_id1; ?>' data-shared="unshared"><i class='fa fa-times' aria-hidden='true'></i> Reset</a>

			</div>

		</div>
		<!-- HTML Content for Product END    -->

		<script>

		// Show / Hide Product Details
		$(document).ready(function() {
			$('.product-image-<?php echo $p_id1; ?>').hover(function() {
				// Show / Hide Product Details Opacity Container
				$('.product-opacity-<?php echo $p_id1; ?>').toggle();
				// Show / Hide Product Details Container
				$('.product-details-<?php echo $p_id1; ?>').toggle();
			});
		});
		</script>

		<?php

	}
	 }
	else {
		// echo "<script>$('.content-overflow').html('<span class=\'cc-text-large\'>No Share History.</span>');</script>";
		 echo "<script>$('.content-overflow').html('<div class=\'no-product-clearfix\'><span class=\'cc-text-large no-product-container\'>No Share History.</span></div>');</script>";
		//$('.content-overflow').html('<div class="no-product-clearfix"><span class="cc-text-large no-product-container">No Share History.</span></div>');
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

<?php

?>
<script>
	function unshareButton(pid,tags){

                var access_token='<?php echo $access_token ?>';
 	       var shop='<?php echo $_REQUEST['shop'] ?>';
                var tags_unshare = tags.replace('shared', "");

 	       var tags_unshare = tags_unshare.replace('shared', "");
 		var tags_unshare = tags_unshare.replace(' ', "");

 	       var _id = '#'+ pid;
                $.ajax({
                     url: '/sharebutton.php?pid='+ pid+'&access_token='+access_token+'&shop='+shop+'&tags='+tags_unshare,
                     success: function(data){

                     $('.main-'+pid).remove();

                     }
                 });
	 };
 </script>
