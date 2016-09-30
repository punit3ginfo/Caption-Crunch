<style>
	.product-card-container {
	  float: left;
	  margin: 30px;
	}
</style>
<?php 
	session_start();

	require __DIR__.'/vendor/autoload.php';
	use phpish\shopify;
	require __DIR__.'/conf.php';
	$_SESSION['shop']=$_REQUEST['shop'];
	$access_token = shopify\access_token($_SESSION['shop'], SHOPIFY_APP_API_KEY, SHOPIFY_APP_SHARED_SECRET, $_REQUEST['code']);
	$shopify = shopify\client($_SESSION['shop'], SHOPIFY_APP_API_KEY, $access_token);
	try
	{
		# Making an API request can throw an exception
		$products = $shopify('GET /admin/products.json', array('published_status'=>'published'));
		
		//$update = $shopify('PUT', "/admin/products/7885327240.json", $product); 
	?>	
		
		<script>
//var str=;
  
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
    

</script>

<?php
		
	
	
		

      $product =
array('id' => '7885330952',
'title' => 'My New Product',
'body_html' => 'My New Product Description',
'vendor'=> 'My Product Vendor',
'product_type'=> 'My Product Type',
'variants' => array(
array('id' => '321',
'option1' => 'Default',
'price' => '100.00',
'sku' => 'ABC123',
'inventory_quantity' => '999',
'inventory_management' => 'shopify',
'taxable' => true,
'requires_shipping' => true
)
)
);	
		
		
		//echo $baseUrl=$shopify('https://share-tag.myshopify.com/admin/products/7885330952.json');
	//$ch = curl_init($shopify);  //note product ID in url
//echo $data_string = json_encode(array('product'=>$product)); //json encode the product array
		
//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");  //specify the PUT verb for update
//curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);  //add the data string for the request
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //set return as string true
//curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//'Content-Type: application/json',
//'Content-Length: ' . strlen($data_string))
//); //set the header as JSON
//echo $server_output = curl_exec ($ch); //execute and store server output
//curl_close ($ch); //close the connection

                  //echo $singleproductsl;
		//print_r($singleproductsl);
		// /admin/products/#{id}.json
		
		
		foreach($products as $singleproduct)
		{
			
		
			
		
			$title=$singleproduct['title'];
			$variants=$singleproduct['variants'];
			foreach($variants as $variants){
				$price=$variants['price'];
			}
		        $images=$singleproduct['images'];
			
			foreach($images as $images){
				$src=$images['src'];
			}
			
			?>


	<div class="product-card-container">
      		<div class="product-card-image-container">
			<img src="<?php echo $src; ?>" alt="<?php echo $title; ?>" height="292" width="192">
		</div>
		       
		<div class="product-detail-container">
			<?php echo $title; ?>
			<?php echo $price; ?>
		</div>
		<div class="product-share-container">
			<a id="share-button" class="share-button" onclick="shareButton();return false;" href="https://buffer.com/add">
			<button type="button">SHARE</button>
			</a>
		</div>
		
					
        
		</div>

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
