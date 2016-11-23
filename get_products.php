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
	if(isset($_REQUEST['colid']) && $_REQUEST['colid']!='' && $_REQUEST['status']=='' && !(isset($_REQUEST['page_id']))){
      //echo "<script>alert(1);</script>";

		$products = $shopify('GET /admin/products.json?collection_id='.$_REQUEST['colid'], array('published_status'=>'published','limit'=>'21','page'=>'1'));
		//$products = $shopify('GET /admin/products.json?collection_id='.$_REQUEST['colid'], array('limit'=>'12','page'=>'2'));

	}
	if($_REQUEST['colid']=='' && $_REQUEST['status']=='' && !isset($_REQUEST['page_id']) && $_REQUEST['max']==''  && !isset($_REQUEST['max']) ) {
  // echo "<script>alert(2);</script>";
		// $products = $shopify('GET /admin/products.json', array('published_status'=>'published'));
		$products = $shopify('GET /admin/products.json', array('limit'=>'21','page'=>'1'));
		//GET /admin/products.json&limit=50=&page=1

	}
	if($_REQUEST['page_id']!='' && isset($_REQUEST['page_id']) && $_REQUEST['limit']!='' && isset($_REQUEST['limit']) && (isset($_REQUEST['colid']))) {
             //echo "limit".$_REQUEST['limit'];
		// $products = $shopify('GET /admin/products.json', array('published_status'=>'published'));
		$products = $shopify('GET /admin/products.json?collection_id='.$_REQUEST['colid'], array('published_status'=>'published','limit'=>'21','page'=>$_REQUEST['page_id']));
		//GET /admin/products.json&limit=50=&page=1

	}
	if($_REQUEST['page_id']!='' && isset($_REQUEST['page_id']) && $_REQUEST['limit']!='' && isset($_REQUEST['limit']) && $_REQUEST['colid']=='' && $_REQUEST['max']==''  && !isset($_REQUEST['max'])) {
           //  echo "<script>alert(4);</script>";
		// $products = $shopify('GET /admin/products.json', array('published_status'=>'published'));
		$products = $shopify('GET /admin/products.json', array('limit'=>'21','page'=>$_REQUEST['page_id']));
		//GET /admin/products.json&limit=50=&page=1

	}
       if($_REQUEST['max']!=''  && isset($_REQUEST['max']) ) {
          //echo "<script>alert(2);</script>";
		// $products = $shopify('GET /admin/products.json', array('published_status'=>'published'));
		$products = $shopify('GET /admin/products.json', array('limit'=>'60','page'=>'1'));
		//GET /admin/products.json&limit=50=&page=1

	}
	$shop = $shopify('GET /admin/shop.json', array('limit'=>$_REQUEST['limit'],'page'=>$_REQUEST['page_id']));

	$count=0;

	// foreach($shop as $shopdetails)
	// {
	//     $domain=$shopdetails['domain'];
	// }

	foreach($products as $singleproduct)
	{
		$title=$singleproduct['title']; // Product Title
		$variants=$singleproduct['variants'];
		$p_id1=$singleproduct['id'];
		$tags=$singleproduct['tags'];
		$OrigonalTag=$singleproduct['tags'];
		$ComparePrice=$singleproduct['compare_at_price'];
		$handle=$singleproduct['handle'];
             
          if(strpos($OrigonalTag,'shared') == true)
		  {
			  $shared='unshared';
		  }
		  else{
			 $shared='shared'; 
		  }
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

		$productUrl = "http://mens.fashiondeals.today/products/$handle";

		?>


		<!-- HTML Content for Product  START      -->

		<div class="product-card-clearfix">

			<div class="product-card-container">
                <?php if($shared=='shared'){
					$display_setting="display:none";
				}
				else {
					$display_setting="display:block";	
				}?>
				<div class="ribbon ribbon-<?php echo $p_id1; ?>" style="<?php echo $display_setting;?>"><span>SHARED</span></div>

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

				<a class='btn green-button share-button hvr-shutter-out-horizontal' id='share-button-<?php echo $p_id1; ?>' data-shared="<?php echo $shared; ?>"><i class='fa fa-bullhorn' aria-hidden='true'></i> <?php if($shared=='shared'){ echo 'Share'; }else{echo 'Unshared'; } ?> </a>

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
                         //alert($(this).attr('data-shared'));
						 if($(this).attr('data-shared') == 'shared'){
						  $('.preview-header .btn').attr('onClick',"shareButton(<?php echo $p_id1; ?>,'<?php echo $OrigonalTag; ?>')");
						  $('.preview-header .btn').attr('data-id','share-<?php echo $p_id1; ?>');
						 }
						 else
						 {
							$('.preview-header .btn').attr('onClick',"unshareButton(<?php echo $p_id1; ?>,'<?php echo $OrigonalTag; ?>')"); 
							 $('.preview-header .btn').attr('data-id','share-<?php echo $p_id1; ?>');
						 } 
						//  Preview

						var $CaptionOneFB = 'Grab the <?php echo str_replace("'","\'",$title); ?> for ONLY $<?php echo $price; ?>! (Retail $<?php echo $ComparePrice; ?>) Get it here: <span style="color: #365899;">http://buff.ly/2fVq7rY</span>';
						var $CaptionTwoFB = 'STEAL ALERT! <?php echo str_replace("'","\'",$title); ?> for only $<?php echo $price; ?>! (Retail $<?php echo $ComparePrice; ?>) Link: <span style="color: #365899;">http://buff.ly/2fVq7rY</span>';
						var $CaptionThreeFB = 'Take 20% OFF the <?php echo str_replace("'","\'",$title); ?>! On sale for only $<?php echo $price; ?>! (Retail $<?php echo $ComparePrice; ?>) --> <span style="color: #365899;">http://buff.ly/2fVq7rY</span>';

						var $CaptionOne = 'Grab the <?php echo str_replace("'","\'",$title); ?> for ONLY $<?php echo $price; ?>! (Retail $<?php echo $ComparePrice; ?>) Get it here: http://buff.ly/2fVq7rY';
						var $CaptionTwo = 'STEAL ALERT! <?php echo str_replace("'","\'",$title);  ?> for only $<?php echo $price; ?>! (Retail $<?php echo $ComparePrice; ?>) Link: http://buff.ly/2fVq7rY';
						var $CaptionThree = 'Take 20% OFF the <?php echo str_replace("'","\'",$title); ?>! On sale for only $<?php echo $price; ?>! (Retail $<?php echo $ComparePrice; ?>) --> http://buff.ly/2fVq7rY';

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

			</div>

		</div>
		<!-- HTML Content for Product END    -->

		<!-- Pagination -->

		<?php
		$count++;
	}

	//echo "welcome".$count;

	$item_per_page=5;
	$pages = ceil($count/$item_per_page);



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

<?php if((isset($_REQUEST['colid']) && $_REQUEST['colid']!='' && ($_REQUEST['page_id']=='')) || (($_REQUEST['page_id']=='') &&
($_REQUEST['colid']=='')) && (!isset($_REQUEST['max']))){?>
	<script>
	jQuery(document).ready(function () {
		var access_token='<?php echo $access_token ?>';
		var shop='<?php echo $_REQUEST['shop'] ?>';
		var col_id='<?php echo $_REQUEST['colid'] ?>';
                var colhandle='<?php echo $_REQUEST['colhandle'] ?>';
		$.ajax({
			url: '/pagination_ajax.php?access_token='+access_token+'&shop='+shop+'&colid='+col_id,
			success: function(data){
				 $('#pagination1').remove();
				 $('#pagination2').remove();
				$('nav.page').append("<ul id='pagination1'></ul>");
					var totolpageno = $($.parseHTML(data)).filter(".totolpageno");
				 var TotalnoOfProduct = $($.parseHTML(data)).filter(".TotalnoOfProduct").html();
					//var totolpageno = $('.totolpageno', data);
					    //console.log(totolpageno.html());
					//alert(totolpageno.html());
					totolpageno =parseInt(totolpageno.html());
					console.info(totolpageno);
				if(parseInt(TotalnoOfProduct) == 0){
				  $('.content-overflow').html('<div class="no-product-clearfix"><span class="cc-text-large no-product-container">No products in '+colhandle+'</span></div>');
			         }
				   if(totolpageno > 1) {
					var obj = $('#pagination1').twbsPagination({
					    totalPages: totolpageno,
					    visiblePages:3,
					    onPageClick: function (event, page) {
						    if(col_id!=''){
						getPaging(page,21,col_id) }
						    else {
						   getPagingALLProduct(page,21);
						    }
						console.info(page);
					    }
					});
				   }
        			/*console.info(obj.data());
				$('#pagination').html(data);
				$('ul li:lt(1)').addClass("paginate-link-active");
				$('ul li:gt(3)').hide();
				$('#showLess').hide();

				size_li =jQuery("#pagination-list li").length;
				if(size_li<=4)
				{
					jQuery('#loadMore').hide();
					jQuery('#showLess').hide();
				}
				x=3;
				jQuery('#pagination-list li:lt('+x+')').show();
				jQuery('#loadMore').click(function () {
                                      // alert(1);
					x= (x+4 <= size_li) ? x+4 : size_li;
					y= (x-4 <= size_li) ? x-4 : size_li;
					jQuery('#pagination-list li:lt('+x+')').show();
					jQuery('#pagination-list li:lt('+y+')').hide();

					jQuery('#showLess').show();
					if(x == size_li){
						jQuery('#loadMore').hide();
					}
				});
				$('#showLess').click(function () {

					x=(x-5<0) ? 3 : x-5;
					y=(x+5<0) ? 3 : x+5;
					jQuery('#pagination-list li').not(':lt('+x+')').hide();
					jQuery('#pagination-list li:lt('+y+')').show();
					z=y-4;

					jQuery('#pagination-list li').not(':lt('+z+')').hide();
					if(z>6){
						a=z-5;

						jQuery('#pagination-list li').not(':gt('+a+')').hide();
					}
					jQuery('#loadMore').show();
					jQuery('#showLess').show();
					if(x == 3){
						$('#showLess').hide();
					}
				}); */
			}
		});

	});
	
 	
     </script>

	
	<?php } ?>
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
						 var btn_text = ['Share Now',' Share Next','Share Later',' Schedule'];
						 var i= 0;
						  var share_id = 'share-'+pid;
					$('.preview-header .btn[data-id='+share_id+']').each(function(){
					$('.preview-header .btn[data-id='+share_id+']').text(btn_text[i]);	
					i=i++;
					});
 			         $('#share-button-'+pid).text('Share');
					 $('#share-button-'+pid).attr('data-shared','shared');
                     $('.ribbon-'+pid).hide();

                     }
                 });
             }




 	var tags;
 	function shareButton(pid,tags){
 		var _id = '#'+ pid;
                 var access_token='<?php echo $access_token ?>';
 	        var shop='<?php echo $_REQUEST['shop'] ?>';
 			var tags_1 = tags+',shared';
 		//var tags_1 = '<?php //echo $tags; ?>';
 		if(tags_1== ''){
 			tags_1= 'shared';
 		}

                 $.ajax({
                     url: '/sharebutton.php?pid='+ pid+'&access_token='+access_token+'&shop='+shop+'&tags='+tags_1,
                     success: function(data){
					 var share_id = 'share-'+pid;
               $('.preview-header .btn[data-id='+share_id+']').text('unshared');
			    $('#share-button-'+pid).text('Unshared');
				$('#share-button-'+pid).attr('data-shared','unshared');
                 $('.ribbon-'+pid).show();
				 }
                 });
             }
			 </script>
