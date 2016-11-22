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

		<div class="product-card-clearfix">

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

				<a class='btn grey-button share-button hvr-shutter-out-horizontal' id='share-button-<?php echo $p_id1; ?>'><i class='fa fa-times' aria-hidden='true'></i> Reset</a>

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

		// Preview Drop Down
		$(document).ready(function() {

			$('#share-button-<?php echo $p_id1; ?>').click(function() {
				//  Load
				$("#post-preview-container").css("display","block");
				// Back Button
				$("#share-link").css("display", "none");
				$(".back-link").css("display", "block");
				// Help
				$(".help-clearfix").empty();
				$(".help-clearfix").load("help/preview.php");
				//  Animate
				$('.collections-animation-container').addClass("collections-animation");
				$('#preview-container').addClass("preview-container-animate");

				//  Preview

				var $CaptionOneFB = "Grab the <?php echo $title; ?> for ONLY $<?php echo $price; ?>! (Retail $<?php echo $ComparePrice; ?>) Get it here: <span style='color: #365899;''>http://buff.ly/2fVq7rY</span>";
				var $CaptionTwoFB = "STEAL ALERT! <?php echo $title; ?> for only $<?php echo $price; ?>! (Retail $<?php echo $ComparePrice; ?>) Link: <span style='color: #365899;''>http://buff.ly/2fVq7rY</span>";
				var $CaptionThreeFB = "Take 20% OFF the <?php echo $title; ?>! On sale for only $<?php echo $price; ?>! (Retail $<?php echo $ComparePrice; ?>) --> <span style='color: #365899;''>http://buff.ly/2fVq7rY</span>";

				var $CaptionOne = "Grab the <?php echo $title; ?> for ONLY $<?php echo $price; ?>! (Retail $<?php echo $ComparePrice; ?>) Get it here: http://buff.ly/2fVq7rY";
				var $CaptionTwo = "STEAL ALERT! <?php echo $title; ?> for only $<?php echo $price; ?>! (Retail $<?php echo $ComparePrice; ?>) Link: http://buff.ly/2fVq7rY";
				var $CaptionThree = "Take 20% OFF the <?php echo $title; ?>! On sale for only $<?php echo $price; ?>! (Retail $<?php echo $ComparePrice; ?>) --> http://buff.ly/2fVq7rY";

				$("#preview-textarea-large").ready(function() {
					$("#preview-textarea-large").html();
					$("#preview-textarea-large").html($CaptionOne);
					$(".facebook-mobile-caption-text").html();
					$(".facebook-mobile-caption-text").html($CaptionOneFB);
					$("#caption-one").addClass('green-button');
					$("#caption-two").removeClass('green-button');
					$("#caption-three").removeClass('green-button');
				});

				$("#caption-one").click(function() {
					$("#preview-textarea-large").html();
					$("#preview-textarea-large").html($CaptionOne);
					$(".facebook-mobile-caption-text").html();
					$(".facebook-mobile-caption-text").html($CaptionOneFB);
					$("#caption-one").addClass('green-button');
					$("#caption-two").removeClass('green-button');
					$("#caption-three").removeClass('green-button');
				});

				$("#caption-two").click(function() {
					$("#preview-textarea-large").html();
					$("#preview-textarea-large").html($CaptionTwo);
					$(".facebook-mobile-caption-text").html();
					$(".facebook-mobile-caption-text").html($CaptionTwoFB);
					$("#caption-one").removeClass('green-button');
					$("#caption-three").removeClass('green-button');
					$("#caption-two").addClass('green-button');
				});

				$("#caption-three").click(function() {
					$("#preview-textarea-large").html();
					$("#preview-textarea-large").html($CaptionThree);
					$(".facebook-mobile-caption-text").html();
					$(".facebook-mobile-caption-text").html($CaptionThreeFB);
					$("#caption-two").removeClass('green-button');
					$("#caption-one").removeClass('green-button');
					$("#caption-three").addClass('green-button');
				});

				$("#addimage-image-one").ready(function() {
					$("#addimage-image-one").css('background-image', 'url(<?php echo $src; ?>)')
				});

				var $facebookImageSource = "<?php echo $src; ?>";

				$(".facebook-mobile-image").ready(function() {
					$(".facebook-mobile-image").attr("src", $facebookImageSource);
				});

			});

			// $('#product-preview-button-<?php echo $p_id1; ?>').click(function() {
			//          //  Load
			//         $("#product-preview-container").css("display","block");
			//         // Back Button
			//         $("#share-link").css("display", "none");
			//         $(".back-link").css("display", "block");
			//         // Help
			//         $(".help-clearfix").empty();
			//         $(".help-clearfix").load("help/product-preview.php");
			//         //  Animate
			//        $('.collections-animation-container').addClass("collections-animation");
			//        $('#preview-container').addClass("preview-container-animate");
			// });

			$('.back-link').click(function() {
				$('.collections-animation-container').removeClass("collections-animation");
				$('#preview-container').removeClass("preview-container-animate");
				// Back Button
				$("#share-link").css("display", "block");
				$(".back-link").css("display", "none");
				// Help
				$(".help-clearfix").empty();
				$(".help-clearfix").load("help/share.php");

				setTimeout(function(){
					$("#product-preview-container").css("display","none");
					$("#post-preview-container").css("display","none");
					//  Clear
					$("#caption-textarea-large").empty();
					$("#caption-textarea-small").empty();
					$("#addimage-image-one").empty();
					$(".facebook-mobile-caption-text").empty();
					$(".facebook-mobile-image").attr("src", "");
				}, 800);
			});


			$('.sidebar-link').click(function() {
				$('#preview-container').removeClass("preview-container-animate");
				$('.collections-animation-container').removeClass("collections-animation");
				// Back Button
				$("#share-link").css("display", "block");
				$(".back-link").css("display", "none");

				setTimeout(function(){
					$("#product-preview-container").css("display","none");
					$("#post-preview-container").css("display","none");
					//  Clear
					$("#caption-textarea-large").empty();
					$("#caption-textarea-small").empty();
					$("#addimage-image-one").empty();
					$(".facebook-mobile-caption-text").empty();
					$(".facebook-mobile-image").attr("src", "");
				}, 800);
			});
		});

		</script>

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

<?php

?>
