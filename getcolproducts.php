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
		exit;
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

                <div class="ribbon ribbon-<?php echo $p_id1; ?>"><span>SHARED</span></div>

            		<div class="product-card-image-container product-image-<?php echo $p_id1; ?>" style='background-image: url(<?php echo $src; ?>)'>
                  <!-- Opacity Layer -->
                    <div class="product-card-image-container-background-hover product-opacity-<?php echo $p_id1; ?>"></div>
                  <!-- Product Details Layer -->
                    <div class="product-card-image-container-content-hover product-details-<?php echo $p_id1; ?>">
                        <div class="product-details-container">
                            <div class="product-icon-container" style="margin-bottom: 15px;">
                               <span class="product-icon-clearfix">

                               </span>
                            </div>

                            <div class="product-title-container">
                              <span class="product-title-text"><?php echo $title; ?></span>
                            </div>

                            <div class="product-title-container">
                              <span class="product-card-price-text" style="margin-right: 3px;">$<?php echo $price; ?></span>
                              <span class="product-card-price-text" style="font-size: 12px; color: #888;">$<?php echo $price; ?></span>
                            </div>
                        </div>
                    </div>
                </div>

                <button type='button' class='share-button' id='share-button-<?php echo $p_id1; ?>'><i class='fa fa-bullhorn' aria-hidden='true'></i> Share</button>

                <script>

                // Preview
                $("#share-button-<?php echo $p_id1; ?>").click(function(){

                    var CaptionLong = "<?php echo $title; ?> | $<?php echo $price; ?> | Long Caption";
                    var CaptionShort = "<?php echo $title; ?> | $<?php echo $price; ?> | Short Caption";

                    $("#caption-textarea-large").ready(function() {
                          $("#caption-textarea-large").html(CaptionLong);
                          $("#caption-textarea-small").html(CaptionShort);
                    });

                    $(".facebook-mobile-caption-text").ready(function() {
                          $(".facebook-mobile-caption-text").html(CaptionLong);
                    });

                    $("#addimage-image-one").ready(function() {
                          $("#addimage-image-one").css('background-image', 'url(<?php echo $src; ?>)')
                    });

                    var $facebookImageSource = "<?php echo $src; ?>";

                    $(".facebook-mobile-image").ready(function() {
                          $(".facebook-mobile-image").attr("src", $facebookImageSource);
                    });

                });

                $('#close-preview-button').click(function() {
                        // $("#preview-container").empty();
                        $("#caption-textarea-large").empty();
                        $("#caption-textarea-small").empty();
                        $("#addimage-image-one").empty();
                        $(".facebook-mobile-caption-text").empty();
                        $(".facebook-mobile-image").attr("src", "");
                });

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

                        $('.sidebar-link').click(function() {
                               $('#preview-container').removeClass("preview-container-animate");
                               $('.collections-animation-container').removeClass("collections-animation");
                               $('.close-preview-container').css('display', 'none');
                        });

                        $('#share-button-<?php echo $p_id1; ?>').click(function() {
                                $('.collections-animation-container').addClass("collections-animation");
                                $('#preview-container').addClass("preview-container-animate");
                                $('.close-preview-container').css('display', 'flex');
                        });

                        $('#close-preview-button').click(function() {
                                $('.collections-animation-container').removeClass("collections-animation");
                                $('#preview-container').removeClass("preview-container-animate");
                                $('.close-preview-container').css('display', 'none');
                        });

                    });

                </script>

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
