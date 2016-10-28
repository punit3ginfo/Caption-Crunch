<?php

     require __DIR__.'/vendor/autoload.php';
     use phpish\shopify;
     $access_token=$_REQUEST['access_token'];
     $shopify = shopify\client($_REQUEST['shop'], SHOPIFY_APP_API_KEY, $access_token );
	 $query_title=$_REQUEST['title'];

?>

<?php
try
	{
		# Making an API request can throw an exception

				 $query_title =str_replace('"','',$query_title);
				 if($_REQUEST['page_id']=='')
				 {
				 $search_products = $shopify('GET /admin/products.json', array('title'=>$query_title ,'limit'=>'50','page'=>'1'));
				 }else{
					 $search_products = $shopify('GET /admin/products.json', array('title'=>$query_title ,'limit'=>'50','page'=>$_REQUEST['page_id']));
				 }

			foreach($search_products as $singleproduct)
		{
			$title=$singleproduct['title']; // Product Title
			$variants=$singleproduct['variants'];
		        $p_id1=$singleproduct['id'];
		        $tags=$singleproduct['tags'];
			   $OrigonalTag=$singleproduct['tags'];


		        $tags = str_replace('shared', '', $tags);
				$tags = str_replace(' ', '', $tags);
			    $tags = str_replace(',', 'AA', $tags);
		        //$tags = str_replace(',shared', '', $tags);
		        //$tags = str_replace('shared', '', $tags);
			//$tags = str_replace(',', 'AA', $tags);
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

 <?php

	       ?>
	<script>
	function shareButton(pid,tags){

               var access_token='<?php echo $access_token ?>';
	       var shop='<?php echo $_REQUEST['shop'] ?>';
               var tags_unshare = tags.replace('shared', "");

	       var tags_unshare = tags_unshare.replace('shared', "");
		var tags_unshare = tags_unshare.replace(' ', "");

	       var _id = '#'+ pid;
               $.ajax({
                    url: '/sharebutton.php?pid='+ pid+'&access_token='+access_token+'&shop='+shop+'&tags='+tags,
                    success: function(data){
			$(_id).html('<button type=button class=share-button onclick=unshareButton('+pid+',"'+tags_unshare+'");>UnShare</button>');
                    }
                });
            }
	</script>

    <script>

	var tags;
	function unshareButton(pid,tags){
		alert(1);
		var _id = '#'+ pid;
                var access_token='<?php echo $access_token ?>';
	        var shop='<?php echo $_REQUEST['shop'] ?>';
			var tags_1 = tags+',shared';
		//var tags_1 = '<?php //echo $tags; ?>';
		if(tags_1== ''){
			tags_1= 'shared';
		}

                $.ajax({
                    url: '/sharebutton.php?pid='+ pid+'&access_token='+access_token+'&shop='+shop+'&tags='+tags,
                    success: function(data){

			  $(_id).html('<button type="button" class=share-button def onclick=shareButton('+pid+',"'+tags_1+'");>Share</button>');
                    }
                });
            }
    </script>

<?php if($_REQUEST['page_id']==''){ ?>
<script>
	jQuery(document).ready(function () {
	      var access_token='<?php echo $access_token ?>';
	      var shop='<?php echo $_REQUEST['shop'] ?>';
	      var col_id='<?php echo $_REQUEST['colid'] ?>';
	      var title='<?php echo $_REQUEST['title'] ?>';

		 $.ajax({
                    url: '/pagination_search_ajax.php?access_token='+access_token+'&shop='+shop+'&colid='+col_id+'&title='+title,
                    success: function(data){
			$('#pagination').html(data);
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
    });
                    }
                });
	});
</script>
<?php } ?>
