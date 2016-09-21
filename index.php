<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
echo "<h1>welcome to my app</h1>";
require __DIR__.'/connection.php'; 
require __DIR__.'/conf.php'; 
require __DIR__.'/vendor/autoload.php';
 $config = pg_query($dbconn4, "SELECT last_name FROM customers WHERE id = 48");
$config = pg_fetch_assoc($config);
echo "<pre>";
print_r($config);
echo "</pre>";
echo "1235";
use phpish\shopify;
	 $shop = $_REQUEST['shop'];
	 "code=".$_REQUEST['code'];
	$access_token = shopify\access_token($_REQUEST['shop'], SHOPIFY_APP_API_KEY, SHOPIFY_APP_SHARED_SECRET, $_REQUEST['code']);
//	echo "access_token".$access_token."<br>";
$url = "https://{$shop}/admin/webhooks.json";
	$topics = array(
			//'customers/create' => "https://shopifyturn2.herokuapp.com/get_datashopify.php?action=customer_signup::{$shop}::{$access_token}",
			'orders/create' => "https://shopifyturn2.herokuapp.com/get_datashopify.php?action=order_created::{$shop}::{$access_token}",
		//'orders/updated' => "https://shopifyturn2.herokuapp.com/get_datashopify.php?action=order_updated::{$shop}::{$access_token}",
		//	'app/uninstalled' => "https://shopifyturn2.herokuapp.com/get_datashopify.php?action=app_uninstalled::{$shop}::{$access_token}",
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
	//	echo "<pre>";
		//print_r($data);
		//exit();
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
	
	
	
// The data to send to the API





$oid=1234561245;


$postData='{
    "orderId":"'.$oid.'",
    "deliveryDate": "2015-05-20",
    "locale": "en_US",
    "postalCode": "10667",
    "emailOptOut": false,
    "user":          {
        "firstName": "Andy",
        "lastName": "Adamson",
        "nickName": "",
        "emailAddress": "andrew@sample.com",
        "externalId": null
    },
    "items":     [
    {
       "lineItemId": "1",
       "title": "Sneakers",
       "url": "www.treadzzzzz.com/sneakers",
       "sku": "12",
       "price": "29.99",
       "itemImageUrl": "www.treadzzzzz.com/img/sneakers.jpg"
    }
    
    ]
}'; 
$postDataJson=json_decode($postData);



// $apple=json_encode($postData);

// Setup cURL
$ch = curl_init('https://api.turnto.com/v1/orders/create');
curl_setopt_array($ch, array(
    CURLOPT_POST => TRUE,
    CURLOPT_RETURNTRANSFER => TRUE,
    CURLOPT_HTTPHEADER => array(
        'Authorization: Bearer eAW1zjgK4oZ4HrfCUnJHbWqVfyl6ZUShLkq',
        'Content-Type: application/json;charset=UTF-8'
    ),
    CURLOPT_POSTFIELDS => json_encode($postDataJson)
));
// Send the request
$response = curl_exec($ch);
// Check for errors
if($response === FALSE){
    die(curl_error($ch));
}else{
	echo "sdfdfsdf";
}

// Decode the response
$responseData = json_decode($response, TRUE);
// Print the date from the response
//echo $responseData;
echo "<pre>";
print_r($responseData);
echo "</pre>";
echo "json test";
$data='{  
   "id":4392280266,
   "email":"boskim12.3ginfo@gmail.com",
   "closed_at":null,
   "created_at":"2016-09-21T01:21:02-04:00",
   "updated_at":"2016-09-21T01:21:02-04:00",
   "number":30,
   "note":"",
   "token":"ebffec9d3d854378c4f3c98b17156b71",
   "gateway":"Cash on Delivery (COD)",
   "test":false,
   "total_price":"21.25",
   "subtotal_price":"10.00",
   "total_weight":0,
   "total_tax":"1.25",
   "taxes_included":false,
   "currency":"USD",
   "financial_status":"pending",
   "confirmed":true,
   "total_discounts":"0.00",
   "total_line_items_price":"10.00",
   "cart_token":"a25db8306c15a6c16b2cd7fbabb147ed",
   "buyer_accepts_marketing":false,
   "name":"#1030",
   "referring_site":"",
   "landing_site":"\/admin\/",
   "cancelled_at":null,
   "cancel_reason":null,
   "total_price_usd":"21.25",
   "checkout_token":"5adbb25904944e8bf65ccd3d0098963e",
   "reference":null,
   "user_id":null,
   "location_id":null,
   "source_identifier":null,
   "source_url":null,
   "processed_at":"2016-09-21T01:21:02-04:00",
   "device_id":null,
   "browser_ip":null,
   "landing_site_ref":null,
   "order_number":1030,
   "discount_codes":[  

   ],
   "note_attributes":[  

   ],
   "payment_gateway_names":[  
      "Cash on Delivery (COD)"
   ],
   "processing_method":"manual",
   "checkout_id":12185683274,
   "source_name":"web",
   "fulfillment_status":null,
   "tax_lines":[  
      {  
         "title":"VAT",
         "price":"1.25",
         "rate":0.125
      }
   ],
   "tags":"",
   "contact_email":"boskim12.3ginfo@gmail.com",
   "order_status_url":"https:\/\/checkout.shopify.com\/13981079\/checkouts\/5adbb25904944e8bf65ccd3d0098963e\/thank_you_token?key=0066248db3f3a3f9e57ed7f1b959574d",
   "line_items":[  
      {  
         "id":8277075274,
         "variant_id":25519415303,
         "title":"test",
         "quantity":1,
         "price":"0.00",
         "grams":0,
         "sku":"",
         "variant_title":"",
         "vendor":"testapp",
         "fulfillment_service":"manual",
         "product_id":8045107079,
         "requires_shipping":true,
         "taxable":true,
         "gift_card":false,
         "name":"test",
         "variant_inventory_management":null,
         "properties":[  

         ],
         "product_exists":true,
         "fulfillable_quantity":1,
         "total_discount":"0.00",
         "fulfillment_status":null,
         "tax_lines":[  
            {  
               "title":"VAT",
               "price":"0.00",
               "rate":0.125
            }
         ],
         "origin_location":{  
            "id":2133678087,
            "country_code":"IN",
            "province_code":"CH",
            "name":"testapp",
            "address1":"3b2",
            "address2":"",
            "city":"mohali",
            "zip":"162001"
         },
         "destination_location":{  
            "id":2195107082,
            "country_code":"IN",
            "province_code":"PB",
            "name":"boski mehta",
            "address1":"3b2",
            "address2":"",
            "city":"mohali",
            "zip":"165001"
         }
      },
      {  
         "id":8277075338,
         "variant_id":30778218826,
         "title":"Copy of test",
         "quantity":1,
         "price":"10.00",
         "grams":0,
         "sku":"",
         "variant_title":"",
         "vendor":"testapp",
         "fulfillment_service":"manual",
         "product_id":9102334410,
         "requires_shipping":true,
         "taxable":true,
         "gift_card":false,
         "name":"Copy of test",
         "variant_inventory_management":null,
         "properties":[  

         ],
         "product_exists":true,
         "fulfillable_quantity":1,
         "total_discount":"0.00",
         "fulfillment_status":null,
         "tax_lines":[  
            {  
               "title":"VAT",
               "price":"1.25",
               "rate":0.125
            }
         ],
         "origin_location":{  
            "id":2133678087,
            "country_code":"IN",
            "province_code":"CH",
            "name":"testapp",
            "address1":"3b2",
            "address2":"",
            "city":"mohali",
            "zip":"162001"
         },
         "destination_location":{  
            "id":2195107082,
            "country_code":"IN",
            "province_code":"PB",
            "name":"boski mehta",
            "address1":"3b2",
            "address2":"",
            "city":"mohali",
            "zip":"165001"
         }
      }
   ],
   "shipping_lines":[  
      {  
         "id":3638148362,
         "title":"Standard Shipping",
         "price":"10.00",
         "code":"Standard Shipping",
         "source":"shopify",
         "phone":null,
         "requested_fulfillment_service_id":null,
         "delivery_category":null,
         "carrier_identifier":null,
         "tax_lines":[  

         ]
      }
   ],
   "billing_address":{  
      "first_name":"boski",
      "address1":"3b2",
      "phone":null,
      "city":"mohali",
      "zip":"165001",
      "province":"Punjab",
      "country":"India",
      "last_name":"mehta",
      "address2":"",
      "company":null,
      "latitude":null,
      "longitude":null,
      "name":"boski mehta",
      "country_code":"IN",
      "province_code":"PB"
   },
   "shipping_address":{  
      "first_name":"boski",
      "address1":"3b2",
      "phone":null,
      "city":"mohali",
      "zip":"165001",
      "province":"Punjab",
      "country":"India",
      "last_name":"mehta",
      "address2":"",
      "company":null,
      "latitude":null,
      "longitude":null,
      "name":"boski mehta",
      "country_code":"IN",
      "province_code":"PB"
   },
   "fulfillments":[  

   ],
   "client_details":{  
      "browser_ip":"27.251.180.12",
      "accept_language":"en-US,en;q=0.5",
      "user_agent":"Mozilla\/5.0 (Windows NT 6.1; WOW64; rv:43.0) Gecko\/20100101 Firefox\/43.0",
      "session_hash":"b8ded943ab0ccdea55a94cb5aca8e090",
      "browser_width":1349,
      "browser_height":651
   },
   "refunds":[  

   ],
   "customer":{  
      "id":4800899338,
      "email":"boskim12.3ginfo@gmail.com",
      "accepts_marketing":false,
      "created_at":"2016-09-21T01:20:50-04:00",
      "updated_at":"2016-09-21T01:21:02-04:00",
      "first_name":"boski",
      "last_name":"mehta",
      "orders_count":1,
      "state":"disabled",
      "total_spent":"0.00",
      "last_order_id":4392280266,
      "note":null,
      "verified_email":true,
      "multipass_identifier":null,
      "tax_exempt":false,
      "tags":"",
      "last_order_name":"#1030",
      "default_address":{  
         "id":5115007626,
         "first_name":"boski",
         "last_name":"mehta",
         "company":null,
         "address1":"3b2",
         "address2":"",
         "city":"mohali",
         "province":"Punjab",
         "country":"India",
         "zip":"165001",
         "phone":null,
         "name":"boski mehta",
         "province_code":"PB",
         "country_code":"IN",
         "country_name":"India",
         "default":true
      }
   }
}';
$data1 = json_decode($data, true);
//print_r($data1['line_items']);
$item_detail=array();
$i=1;
foreach($data1['line_items']as $item )
{
	 $item_detail[$i]['vid']=$item['variant_id'] ;
	 $item_detail[$i]['pid']=$item['product_id'] ;
	$item_detail[$i]['title']=$item['title'];
	$productData = json_decode(file_get_contents("https://testapp-36.myshopify.com/admin/products.json?ids={$item_detail[$i]['pid']}&access_token={$access_token}"));
	
	$item_detail[$i]['url']="https://testapp-36.myshopify.com/products/".urlencode($item['title']);
	$item_detail[$i]['sku']=$item['sku'];
	$item_detail[$i]['price']=$item['price'];
	$item_detail[$i]['imgsrc']=$productData['products'][0]->image['src'];
	$item_detail[$i]['imgsrc2']=$productData->products->image['src'];
	$item_detail[$i]['imgsrc1']=$productData;
	$i++;
}
echo '<pre>';
print_r($item_detail);
echo '</pre>';
?>

