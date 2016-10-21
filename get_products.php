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


		$products = $shopify('GET /admin/products.json?collection_id='.$_REQUEST['colid'], array('published_status'=>'published','page'=>'1'));
		//$products = $shopify('GET /admin/products.json?collection_id='.$_REQUEST['colid'], array('limit'=>'12','page'=>'2'));

			}
		if($_REQUEST['colid']=='' && $_REQUEST['status']=='' && !isset($_REQUEST['page_id']) ) {

	     // $products = $shopify('GET /admin/products.json', array('published_status'=>'published'));
		$products = $shopify('GET /admin/products.json', array('limit'=>'21','page'=>'1'));
			//GET /admin/products.json&limit=50=&page=1

		}
		if($_REQUEST['page_id']!='' && isset($_REQUEST['page_id']) && $_REQUEST['limit']!='' && isset($_REQUEST['limit']) && (isset($_REQUEST['colid']))) {

	     // $products = $shopify('GET /admin/products.json', array('published_status'=>'published'));
		$products = $shopify('GET /admin/products.json?collection_id='.$_REQUEST['colid'], array('limit'=>$_REQUEST['limit'],'page'=>$_REQUEST['page_id']));
			//GET /admin/products.json&limit=50=&page=1

		}
		if($_REQUEST['page_id']!='' && isset($_REQUEST['page_id']) && $_REQUEST['limit']!='' && isset($_REQUEST['limit']) && $_REQUEST['colid']=='' ) {

	     // $products = $shopify('GET /admin/products.json', array('published_status'=>'published'));
		$products = $shopify('GET /admin/products.json', array('limit'=>$_REQUEST['limit'],'page'=>$_REQUEST['page_id']));
			//GET /admin/products.json&limit=50=&page=1

		}







                $count=0;
		foreach($products as $singleproduct)
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

                      <div style="margin-top: 15px;">
                        <span class="product-title-text"><?php echo $title; ?></span>
                      </div>

                      <div style="margin-top: 15px;">
                        <span class="product-card-price-text" style="margin-right: 3px;">$<?php echo $price; ?></span>
                        <span class="product-card-price-text" style="font-size: 12px; color: #888;">$<?php echo $price; ?></span>
                      </div>
                  </div>
                  <!-- <div class="preview-button-container">
                    <a id="preview-button-<?php echo $p_id1; ?>" class="preview-button" style="height: 19px; width: calc(100% - 42px);"><i class="fa fa-eye" aria-hidden="true"></i> Preview</a>
                  </div> -->
              </div>
          </div>

          <button type='button' class='share-button' id='share-button-<?php echo $p_id1; ?>'><i class='fa fa-bullhorn' aria-hidden='true'></i> Share</button>


          <!-- Preview -->
          <script>

          $("#share-button-<?php echo $p_id1; ?>").click(function(){
              $("#preview-container").html('

              <div class="preview-container">
                        <div  class="preview-overflow-container">
                                  <div class="preview-clearfix">
                                              <div class="preview-restrictor" style="z-index: 86;">
                                                        <div class="preview-left-clearfix">
                                                        <form class="preview-form-container">
                                                        <!--  Step 1  -->
                                                                <div class="preview-form-conatiner">
                                                                  <div id="step1" class="preview-anchor-3"></div>
                                                                  <div class="builder-main-clearfix" style="border-bottom: 0px;">
                                                                      <div class="builder-conditions-container" style="height: 30px;">

                                                                            <span class="preview-steps-text account-show-hide-button" style="line-height: 30px; cursor: pointer;">
                                                                              Step 1 | Choose Account
                                                                              <i id="account-arrow-icon" class="fa fa-chevron-up" aria-hidden="true" style="float: right; line-height: 30px;"></i>
                                                                            </span>

                                                                      </div>
                                                                  </div>
                                                                        <div class="account-show-hide">
                                                                                <div class="builder-main-clearfix" style="border-top: 1px solid #eee;">
                                                                                        <div class="builder-conditions-container" style="height: auto; width: 100%; display: inline-block;">
                                                                                                              <!-- Account Bubbles -->
                                                                                                                    <div class="account-bubble-clearfix">
                                                                                                                            <a href="/#">
                                                                                                                                      <div class="account-bubble">
                                                                                                                                                <i class="fa fa-facebook account-icon" aria-hidden="true"></i>
                                                                                                                                      </div>
                                                                                                                            </a>
                                                                                                                    </div>

                                                                                                                    <div class="account-bubble-clearfix">
                                                                                                                            <a href="/#">
                                                                                                                                      <div class="account-bubble">
                                                                                                                                                <i class="fa fa-twitter account-icon" aria-hidden="true"></i>
                                                                                                                                      </div>
                                                                                                                            </a>
                                                                                                                    </div>

                                                                                                                    <div class="account-bubble-clearfix">
                                                                                                                            <a href="/#">
                                                                                                                                      <div class="account-bubble">
                                                                                                                                                <i class="fa fa-google-plus account-icon" aria-hidden="true"></i>
                                                                                                                                      </div>
                                                                                                                            </a>
                                                                                                                    </div>

                                                                                                                    <div class="account-bubble-clearfix">
                                                                                                                            <a href="/#">
                                                                                                                                      <div class="account-bubble">
                                                                                                                                                <i class="fa fa-pinterest-p account-icon" aria-hidden="true"></i>
                                                                                                                                      </div>
                                                                                                                            </a>
                                                                                                                    </div>

                                                                                                                    <div class="account-bubble-clearfix">
                                                                                                                            <a href="/#">
                                                                                                                                      <div class="account-bubble">
                                                                                                                                                <i class="fa fa-facebook account-icon" aria-hidden="true"></i>
                                                                                                                                      </div>
                                                                                                                            </a>
                                                                                                                    </div>

                                                                                                                    <div class="account-bubble-clearfix">
                                                                                                                            <a href="/#">
                                                                                                                                      <div class="account-bubble">
                                                                                                                                                <i class="fa fa-instagram account-icon" aria-hidden="true"></i>
                                                                                                                                      </div>
                                                                                                                            </a>
                                                                                                                    </div>

                                                                                                                    <div class="account-bubble-clearfix">
                                                                                                                            <a href="/#">
                                                                                                                                      <div class="account-bubble">
                                                                                                                                                <i class="fa fa-google-plus account-icon" aria-hidden="true"></i>
                                                                                                                                      </div>
                                                                                                                            </a>
                                                                                                                    </div>

                                                                                                                    <div class="account-bubble-clearfix">
                                                                                                                            <a href="/#">
                                                                                                                                      <div class="account-bubble">
                                                                                                                                                <i class="fa fa-pinterest-p account-icon" aria-hidden="true"></i>
                                                                                                                                      </div>
                                                                                                                            </a>
                                                                                                                    </div>
                                                                                                              <!-- Account Bubbles -->
                                                                                        </div>
                                                                                </div>

                                                                                <div class="builder-main-clearfix" style="border-bottom: 0px; padding-bottom: 5px;">
                                                                                        <div class="builder-conditions-container" style="text-align: center;">
                                                                                              <a href="#step2" class="step1-next-step-button" id="step2button">Continue to Step 2 <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                              </div>
                                                              <!--  Step 2  -->
                                                                      <div class="preview-form-conatiner">
                                                                        <div id="step2" class="preview-anchor"></div>
                                                                        <div class="builder-main-clearfix" style="border-bottom: 0px;">
                                                                            <div class="builder-conditions-container" style="height: 30px;">

                                                                                  <span class="preview-steps-text caption-show-hide-button" style="line-height: 30px; cursor: pointer;">
                                                                                    Step 2 | Choose Caption
                                                                                    <i id="caption-arrow-icon" class="fa fa-chevron-down" aria-hidden="true" style="float: right; line-height: 30px;"></i>
                                                                                  </span>

                                                                            </div>
                                                                        </div>
                                                                              <div class="caption-show-hide"  style="display: none;">
                                                                                      <!-- <div class="builder-main-clearfix" style="border-top: 1px solid #eee; border-bottom: 0px;">
                                                                                              <div class="builder-conditions-container" style="height: auto; width: 100%;">
                                                                                                      <span class="cc-text-medium">Caption: Jackets 40% OFF Fall Sale</span>
                                                                                              </div>
                                                                                      </div> -->

                                                                                      <div class="builder-main-clearfix" style="border-top: 1px solid #eee;">
                                                                                              <div class="builder-conditions-container" style="height: auto; width: 100%; display: block;">
                                                                                                        <span class="cc-text-small">Caption for: Facebook, Google+, Pinterest</span>
                                                                                                        <div class="caption-textarea-container"style="margin-bottom: 30px;">
                                                                                                              <textarea class="caption-textarea" style="height: 54px;"><?php echo $title; ?> | <?php echo $price; ?></textarea>
                                                                                                        </div>
                                                                                                        <span class="cc-text-small">Caption for: Twitter (Character Limit: 140)</span>
                                                                                                        <div class="caption-textarea-container">
                                                                                                              <textarea class="caption-textarea">Twitter caption is autofilled here.</textarea>
                                                                                                        </div>
                                                                                              </div>
                                                                                      </div>

                                                                                      <div class="builder-main-clearfix" style="border-bottom: 0px; padding-bottom: 5px;">
                                                                                              <div class="builder-conditions-container" style="text-align: center;">
                                                                                                    <a href="#step1" class="prev-step-button" id="step2prevbutton"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Back to Step 1</a>
                                                                                                    <a href="#step3" class="next-step-button" id="step3button">Continue to Step 3 <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                                                                              </div>
                                                                                      </div>
                                                                              </div>
                                                                    </div>
                                                                    <!--  Step 3  -->
                                                                            <div class="preview-form-conatiner">
                                                                              <div id="step3" class="preview-anchor-2"></div>
                                                                              <div class="builder-main-clearfix" style="border-bottom: 0px;">
                                                                                  <div class="builder-conditions-container" style="height: 30px;">

                                                                                        <span class="preview-steps-text image-show-hide-button" style="line-height: 30px; cursor: pointer;">
                                                                                          Step 3 | Add Image
                                                                                          <i id="image-arrow-icon" class="fa fa-chevron-down" aria-hidden="true" style="float: right; line-height: 30px;"></i>
                                                                                        </span>

                                                                                  </div>
                                                                              </div>
                                                                                    <div class="image-show-hide" style="display: none;">
                                                                                            <div class="builder-main-clearfix" style="border-top: 1px solid #eee;">
                                                                                                        <div class="addimage-clearfix">
                                                                                                                <div class="addimage-container" style='background-image: url(<?php echo $src; ?>)'>

                                                                                                                </div>
                                                                                                        </div>

                                                                                                        <!-- <div class="addimage-clearfix">
                                                                                                                <div class="addimage-container addimage-active">
                                                                                                                            <i class="fa fa-plus addimage-plus-icon" aria-hidden="true"></i>
                                                                                                                </div>
                                                                                                        </div> -->
                                                                                            </div>


                                                                                            <div class="builder-main-clearfix" style="border-bottom: 0px; padding-bottom: 5px;">
                                                                                                    <div class="builder-conditions-container" style="text-align: center;">
                                                                                                          <a href="#step2" class="prev-step-button" id="step3prevbutton"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Back to Step 2</a>
                                                                                                          <a href="#step1" class="next-step-button" id="step4button">Continue to Step 4 <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                                                                                    </div>
                                                                                            </div>
                                                                                    </div>
                                                                          </div>
                                                                          <!--  Step 4  -->
                                                                                  <div class="preview-form-conatiner">

                                                                                    <div class="builder-main-clearfix" style="border-bottom: 0px;">
                                                                                        <div class="builder-conditions-container" style="height: 30px;">

                                                                                              <span  class="preview-steps-text share-show-hide-button" style="line-height: 30px; cursor: pointer;">
                                                                                                Step 4 | Share
                                                                                                <i id="share-arrow-icon" class="fa fa-chevron-down" aria-hidden="true" style="float: right; line-height: 30px;"></i>
                                                                                              </span>

                                                                                        </div>
                                                                                    </div>
                                                                                          <div class="share-show-hide" style="display: none;">
                                                                                                  <div class="builder-main-clearfix" style="border-top: 1px solid #eee; border-bottom: 0px; padding-bottom: 5px;">
                                                                                                          <div class="builder-conditions-container">
                                                                                                                <a href="#" class="button-three-col preview-share-button"><i class="fa fa-bullhorn" aria-hidden="true"></i> Share Now</a>
                                                                                                                <a href="#" class="button-three-col preview-sharelater-button"><i class="fa fa-clock-o" aria-hidden="true"></i> Share Later</a>
                                                                                                                <a href="#" class="button-three-col preview-schedule-button"><i class="fa fa-calendar" aria-hidden="true"></i> Schedule</a>
                                                                                                          </div>
                                                                                                  </div>
                                                                                          </div>
                                                                                </div>
                                                        </form>


                                                        <!-- Scripts -->
                                                        <?php include 'preview-js.php';?>

                                                        </div>
                                              </div>
                                              <div class="preview-restrictor" style="position: fixed; z-index: 85;">
                                                        <div class="preview-right-clearfix">
                                                        <div class="marvel-device iphone6 silver">
                                                                <div class="top-bar"></div>
                                                                <div class="sleep"></div>
                                                                <div class="volume"></div>
                                                                <div class="camera"></div>
                                                                <div class="sensor"></div>
                                                                <div class="speaker"></div>
                                                                <div class="screen">
                                                                <!-- Content goes here -->

                                                                <div class="facebook-mobile-ios-header">

                                                                </div>

                                                                <div class="facebook-mobile-main-container">
                                                                            <div class="facebook-mobile-header">

                                                                            </div>

                                                                            <div class="facebook-mobile-post-clearfix">
                                                                                        <div class="facebook-mobile-post-container">

                                                                                        </div>
                                                                            </div>
                                                                </div>

                                                                <div class="facebook-mobile-nav">

                                                                </div>

                                                                <!-- Content goes here -->
                                                                </div>
                                                                <div class="home"></div>
                                                                <div class="bottom-bar"></div>
                                                        </div>

                                                        </div>
                                              </div>
                                  </div>
                         </div>
               </div>

              ');
          });

          $('#close-preview-button').click(function() {
                  $("#preview-container").empty();
          });

          </script>

          <!-- <div id="<?php echo $p_id1; ?>"  class="share-button-container?>" >

                <script>
                	$(document).ready(function(){
                		var OrigonalTag = '<?php echo $OrigonalTag; ?>';

                		var pid_1 = '<?php echo $p_id1; ?>';
                		//alert(pid_1);
                		var pattern = /shared/;
                		var pattern1 = / shared/;

                		var exists = pattern.test(OrigonalTag);
                		var exists1 = pattern1.test(OrigonalTag);
                		if(exists || exists1 ){
                			var tags_1 = '"<?php echo $tags; ?>"';
                			//alert(tags_1);

                		        var _id = '#'+ pid_1;


                		//$(_id).html('<button type=button class=share-button onclick=unshareButton('+pid_1+',"'+tags_1+'");>UnShare</button>');
                		$(_id).html("<button type='button' class='reset-button'  id='reset-button-<?php echo $p_id1; ?>' onclick='unshareButton("+pid_1+","+tags_1+");'><i class='fa fa-times' aria-hidden='true'></i> Reset</button>");

                		}else{
                			var _id = '#'+ pid_1;
                			<?php
                			if($OrigonalTag == '')
                			{
                			  $OrigonalTag="shared";
                			}
                			else{
                			   $OrigonalTag=$OrigonalTag.",shared";
                			}
                			?>
                			var tags_1 = '"<?php echo $OrigonalTag; ?>"';

                			  //$(_id).html('<button type="button" class=share-button onclick=shareButton('+pid_1+',"'+tags_1+'");>Share</button>');
                	$(_id).html("<button type='button' class='share-button' id='share-button-<?php echo $p_id1; ?>' onclick='shareButton("+pid_1+","+tags_1+");'><i class='fa fa-bullhorn' aria-hidden='true'></i> Share</button>");
                		}
                	});
                </script>

	         </div> -->

        </div>

    </div>

<!-- Show / Hide Product Details -->
<script>
$(document).ready(function() {
      $('.product-image-<?php echo $p_id1; ?>').hover(function() {
        // Show / Hide Product Details Opacity Container
          $('.product-opacity-<?php echo $p_id1; ?>').toggle();
        // Show / Hide Product Details Container
          $('.product-details-<?php echo $p_id1; ?>').toggle();
      });
  });
</script>

<!-- Preview Drop Down -->
<script>
$(document).ready(function() {

      $('#preview-button-<?php echo $p_id1; ?>').click(function() {
              $('#preview-container').addClass("preview-container-animate");
              $('.close-preview-container').css('display', 'flex');
      });

      $('#close-preview-button').click(function() {
              $('#preview-container').removeClass("preview-container-animate");
              $('.close-preview-container').css('display', 'none');
      });

  });

  $(document).ready(function() {

        $('#share-button-<?php echo $p_id1; ?>').click(function() {
                $('#preview-container').addClass("preview-container-animate");
                $('.close-preview-container').css('display', 'flex');
        });

        $('#close-preview-button').click(function() {
                $('#preview-container').removeClass("preview-container-animate");
                $('.close-preview-container').css('display', 'none');
        });

    });
</script>

<!-- Shared Banner -->
<script>
// $(document).ready(function(){
//     $( "#reset-button-<?php echo $p_id1; ?>" ).click( function()  {
//       $('.ribbon-<?php echo $p_id1; ?>').css( "display", "none" );
//     });
// });

// $(document).ready(function(){
//     $( "#share-button-<?php echo $p_id1; ?>" ).click( function()  {
//       $('.ribbon-<?php echo $p_id1; ?>').css( "display", "block" );
//     });
// });

$(document).ready(function(){
    if ( $( "#reset-button-<?php echo $p_id1; ?>" ).length != 0) {
      $('.ribbon-<?php echo $p_id1; ?>').css( "display", "block" );
    } else {
      $('.ribbon-<?php echo $p_id1; ?>').css( "display", "none" );
    }
});
</script>

<!-- HTML Content for Product END    -->

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
<!-- <script>
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
			$(_id).html('<button type=button class=reset-button id=reset-button-<?php echo $p_id1; ?>  onclick=unshareButton('+pid+',"'+tags_unshare+'");><i class="fa fa-times" aria-hidden=true></i> Reset</button>');

                    }
                });
            }
</script> -->

<!-- <script>

	var tags;
	function unshareButton(pid,tags){
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

			  $(_id).html('<button type="button" class=share-button id=share-button-<?php echo $p_id1; ?>  def onclick=shareButton('+pid+',"'+tags_1+'");><i class="fa fa-bullhorn" aria-hidden=true></i> Share</button>');

                    }
                });
            }
    </script> -->

<?php if((isset($_REQUEST['colid']) && $_REQUEST['colid']!='' && ($_REQUEST['page_id']=='')) || (($_REQUEST['page_id']=='') &&
												($_REQUEST['colid']==''))){?>
<script>
	jQuery(document).ready(function () {
	      var access_token='<?php echo $access_token ?>';
	      var shop='<?php echo $_REQUEST['shop'] ?>';
	      var col_id='<?php echo $_REQUEST['colid'] ?>';

		 $.ajax({
                    url: '/pagination_ajax.php?access_token='+access_token+'&shop='+shop+'&colid='+col_id,
                    success: function(data){
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
