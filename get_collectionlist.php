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
		//print_r($collections);
		foreach($collections as $singlecollection)
		{
			$title=$singlecollection['title']; // collection Title
			$id=$singlecollection['id']; // collection id
			$handle=$singlecollection['handle']; // collection id ?>
			
			<a href="javascript:void(0)" onclick="getcolproduct(<?php echo $id;?>,'<?php echo $handle;?>')">                 
                                    <div class="chat_select_container">
                                        <div class="chat_personal_info_container">
                                            <div class="chat_user_info">
                                                <span class="collection_list_text"><?php echo $title;  ?></span>
                                            </div>
                                            <div class="notification-container">
                                                <div class="chat_notification_container">
                                                    <span class="notif_number">354</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
								
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
		
               var access_token='<?php echo $access_token ?>';
		var shop='<?php echo $_REQUEST['shop'] ?>';
		
                $.ajax({
                    url: '/get_products.php.php?access_token='+access_token+'&shop='+shop+'&colid='+id,
                    success: function(data){
                     //console.log(data);
			   // var data1= data.find('.chat_container').html()
			    $('.product-grid-container').html(data);
                    }
                });
            }
	</script>
