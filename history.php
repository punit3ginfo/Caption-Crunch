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
				 $search_products = $shopify('GET /admin/products.json', array('title'=>$query_title ,'limit'=>'50','page'=>'1'));
				 
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

      		<div class="product-card-image-container" style='background-image: url(<?php echo $src; ?>)'>
      		</div>

      		<div class="product-card-details-section">
      			<div class="product-card-details-container">
                  	<span class="product-title-text"><?php echo $title; ?></span>
                  	<div class="product-card-price-container">
                  		<span class="product-card-price-text" style="margin-right: 3px;">$<?php echo $price; ?></span>
                      <span class="product-card-price-text" style="font-size: 14px; color: #888;">$<?php echo $price; ?></span>
                  	</div>
      			</div>
      		</div>

          <div id="<?php echo $p_id1; ?>"  class="share-button-container">

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
		$(_id).html("<button type='button' class='share-button' onclick='unshareButton("+pid_1+","+tags_1+");'>UnShare</button>");

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
	$(_id).html("<button type='button' class='share-button' onclick='shareButton("+pid_1+","+tags_1+");'>Share</button>");
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
		var _id = '#'+ pid;
                var access_token='<?php echo $access_token ?>';
	        var shop='<?php echo $_REQUEST['shop'] ?>';
			var tags_1 = tags+',shared';
		//var tags_1 = '<?php //echo $tags; ?>';
		if(tags_1== ''){
			tags_1= 'shared';
		}

                $.ajax({
                    url: '/collections.php?pid='+ pid+'&access_token='+access_token+'&shop='+shop+'&tags='+tags,
                    success: function(data){

			  $(_id).html('<button type="button" class=share-button def onclick=shareButton('+pid+',"'+tags_1+'");>Share</button>');
                    }
                });
            }
    </script>


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
