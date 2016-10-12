<?php
     require __DIR__.'/vendor/autoload.php';
     use phpish\shopify;
     $access_token=$_REQUEST['access_token'];
     $shopify = shopify\client($_REQUEST['shop'], SHOPIFY_APP_API_KEY, $access_token );
?>
<?php
try
	{
		if(isset($_REQUEST['colid']) && $_REQUEST['colid']!='' && $_REQUEST['status']==''){
			
			           
						   $TotalnoOfProduct = $shopify('GET /admin/products/count.json', array('collection_id'=>$_REQUEST['colid']));
							//echo "total products=".$TotalnoOfProduct=sizeof($products);
							$limit=50; // Number of product per page
							$noofPages=$TotalnoOfProduct/$limit;
							$noofPages=abs(round($noofPages));
			?>
			<button type="button" id="showLess"><i class="fa fa-long-arrow-left"></i></button> <ul id="pagination-list">
												 
						  <?php
						     for($i=1;$i<=$noofPages;$i++)
							 {?>
								<li class="page-link" onclick="getPaging(this.id,<?php echo $limit; ?>,<?php echo $_REQUEST['colid']; ?>)" 
								    id="<?php echo $i; ?>"><?php echo $i; ?></li>
								
						  <?php } ?>
												  
								
						  </ul>
						   <button type="button" id="loadMore"><i class="fa fa-long-arrow-right"></i></button>
			
		<?php	
		}else{
			
							$TotalnoOfProduct = $shopify('GET /admin/products/count.json');
							//echo "total products=".$TotalnoOfProduct=sizeof($products);
							$limit=50; // Number of product per page
							$noofPages=$TotalnoOfProduct/$limit;
							$noofPages=abs(round($noofPages));
		
		?>				
						 
						<button type="button" id="showLess"><i class="fa fa-long-arrow-left"></i></button> <ul id="pagination-list">
												 
						  <?php
						     for($i=1;$i<=$noofPages;$i++)
							 {?>
								<li class="page-link" onclick="getPaging(this.id,<?php echo $limit; ?>,<?php echo $_REQUEST['colid']; ?>)" id="<?php echo $i; ?>"><?php echo $i; ?></li>
								
						  <?php } ?>
												  
								
						  </ul>
						   <button type="button" id="loadMore"><i class="fa fa-long-arrow-right"></i></button>
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
