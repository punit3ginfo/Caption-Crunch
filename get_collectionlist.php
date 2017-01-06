<?php
require __DIR__.'/vendor/autoload.php';
use phpish\shopify;
$access_token=$_REQUEST['access_token'];
$shopify = shopify\client($_REQUEST['shop'], SHOPIFY_APP_API_KEY, $access_token );
try
{
	# Making an API request can throw an exception
	$collections = $shopify('GET /admin/custom_collections.json', array('published_status'=>'published'));
	$collections1 = $shopify('GET /admin/smart_collections.json', array('published_status'=>'published'));
	$collections=array_merge($collections, $collections1);

	foreach($collections as $singlecollection)
	{
		$title=$singlecollection['title']; // collection Title
		$id=$singlecollection['id']; // collection id
		$handle=$singlecollection['handle']; // collection id
		$products1 = $shopify('GET /admin/products.json?collection_id='.$id, array('published_status'=>'any'));
		$noOfProduct = $shopify('GET /admin/products/count.json?collection_id='.$id);

		//  $noOfProduct=sizeof($products1);

		?>

		<div onclick="getcolproduct(<?php echo $id;?>,'<?php echo $handle;?>')" class="menu-link">
			<div class="menu-container <?php echo $handle;?>">
				<div class="menu-clearfix">
					<div class="menu-font-container">
						<span class="menu-font"><?php echo $title;  ?></span>
					</div>
					<div class="menu-icon-clearfix">
						<div class="menu-icon-con">
							<div class="menu-icon-bg"></div>
							<div class="menu-icon-container">
								<span class="menu-icon"><?php echo $noOfProduct; ?></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>



		<?php }
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
	function getcolproduct(id,handle){
		$('product-card-clearfix').addClass("product-card-animate-left");
		$('.sidebar-content-header .menu-container').each(function(){
			$(this).removeClass('menu-container-active');
		});
		$('.sidebar-content-header .menu-container.'+handle).addClass('menu-container-active');
		var access_token='<?php echo $access_token ?>';
		var shop='<?php echo $_REQUEST['shop'] ?>';


		var data="<div class='loading-clearfix'><div class='loading-container'><div><img class='loading-img' src='images/loading13.gif' /><span class='cc-text-small loader-text'>Loading...</span></div></div></div>";
		$('#product-feed').html(data);

		$.ajax({
			url: '/get_products.php?access_token='+access_token+'&shop='+shop+'&colid='+id+'&colhandle='+handle,
			success: function(data){
				//console.log(data);
				// var data1= data.find('.chat_container').html()
				$('#product-feed').html(data);

			}
		});
	}

	function getsharehistory(){
		var access_token='<?php echo $access_token ?>';
		var shop='<?php echo $_REQUEST['shop'] ?>';


		var data="<div class='loading-clearfix'><div class='loading-container'><div><img class='loading-img' src='images/loading13.gif' /><span class='cc-text-small loader-text'>Loading...</span></div></div></div>";
		$('#product-feed').html(data);

		$.ajax({
			url: '/get_sharehistory.php?access_token='+access_token+'&shop='+shop,
			success: function(data){
				//console.log(data);
				// var data1= data.find('.chat_container').html()
				$('#product-feed').html(data);

				$('#pagination').html('');
				$('#pagination1').empty();
				$('#pagination2').remove();
				$("#share-back").html('<a href="javascript:void(0)" onclick="getproducts()" class="sidebar-span share-history-button"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</a>');
			}
		});
	}

	function search(p_title){

		var data="<div class='loading-clearfix'><div class='loading-container'><div><img class='loading-img' src='images/loading13.gif' /><span class='cc-text-small loader-text'>Loading...</span></div></div></div>";
		$('#product-feed').html(data);


		var access_token='<?php echo $access_token ?>';
		var shop='<?php echo $_REQUEST['shop'] ?>';
		var p_title= '"'+p_title+'"';

		$.ajax({
			url: '/history.php?access_token='+access_token+'&shop='+shop+'&title='+p_title+'&status=search',
			success: function(data){
				//console.log(data);
				// var data1= data.find('.chat_container').html()
				$('#product-feed').html(data);
			}
		});
	}

	function getPaging(id,limit,colid){

		var access_token='<?php echo $access_token ?>';
		var shop='<?php echo $_REQUEST['shop'] ?>';

		$.ajax({
			url: '/get_products.php?access_token='+access_token+'&shop='+shop+'&page_id='+id+'&limit='+limit+'&colid='+colid,
			success: function(data){
				//console.log(data);
				// var data1= data.find('.chat_container').html()
				$('#product-feed').html(data);

				CurrentPageid= "#pagination-list li#"+id;
				// alert(CurrentPageid);

				// $("ul li#"+CurrentPageid).addClass("paginate-link-active");
				$("#pagination-list>li.paginate-link-active").removeClass("paginate-link-active");
				$(CurrentPageid).addClass("paginate-link-active");


			}
		});
	}

	function getPagingALLProduct(id,limit){
		var access_token='<?php echo $access_token ?>';
		var shop='<?php echo $_REQUEST['shop'] ?>';

		$.ajax({
			url: '/get_products.php?access_token='+access_token+'&shop='+shop+'&page_id='+id+'&limit='+limit,
			success: function(data){
				//console.log(data);
				// var data1= data.find('.chat_container').html()
				$('#product-feed').html(data);



				CurrentPageid= "#pagination-list li#"+id;
				// alert(CurrentPageid);

				// $("ul li#"+CurrentPageid).addClass("paginate-link-active");
				$("#pagination-list>li.paginate-link-active").removeClass("paginate-link-active");
				$(CurrentPageid).addClass("paginate-link-active");

			}
		});
	}

	function getPagingSearch(id,limit,title){

		var access_token='<?php echo $access_token ?>';
		var shop='<?php echo $_REQUEST['shop'] ?>';

		$.ajax({
			url: '/history.php?access_token='+access_token+'&shop='+shop+'&page_id='+id+'&limit='+limit+'&title='+title,
			success: function(data){
				//console.log(data);
				// var data1= data.find('.chat_container').html()

				$('#product-feed').html(data);
				CurrentPageid= "#pagination-list li#"+id;
				// alert(CurrentPageid);

				// $("ul li#"+CurrentPageid).addClass("paginate-link-active");
				$("#pagination-list>li.paginate-link-active").removeClass("paginate-link-active");
				$(CurrentPageid).addClass("paginate-link-active");


			}
		});
	}
	</script>
