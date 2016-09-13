<?php
echo "<h1>welcome to my app</h1>";
require __DIR__.'/connection.php'; 
      echo $shop = $_REQUEST['shop'];
      echo "saad";
	$shop="testapp-36.myshopify.com";

$url = "https://{$shop}/admin/webhooks.json";
	$topics = array(
			'customers/create' => "https://shopifyturn2.herokuapp.com/get_datashopify.php
?action=customer_signup::{$shop}",
			'orders/create' => "https://shopifyturn2.herokuapp.com/get_datashopify.php?action=order_created::{$shop}",
			'orders/updated' => "https://shopifyturn2.herokuapp.com/get_datashopify.php?action=order_updated::{$shop}",
			'app/uninstalled' => "https://shopifyturn2.herokuapp.com/get_datashopify.php?action=app_uninstalled::{$shop}",
		);
	foreach($topics as $topic => $address){
		$data = array(
				'access_token' => $access_token,
				'webhook' => array(
					'address' => $address,
					'format' => 'json',
					'topic' => $topic,
				)
			);
		$data = json_encode($data);	
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');                                                                     
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);                                                                  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
			'Content-Type: application/json',                                                                                
			'Content-Length: ' . strlen($data))                                                                       
		);
		curl_exec($ch);
	}
	?>
