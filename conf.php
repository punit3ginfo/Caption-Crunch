<?php
        
	define('SHOPIFY_APP_API_KEY', '917505b6882e263ca3563170982a8a0f');
	define('SHOPIFY_APP_SHARED_SECRET', 'bd392344caf56ce075f44a18fbc099c8');
       echo "a=".$_SESSION['shop']=$_REQUEST['shop'];
		$_SESSION['code']=$_REQUEST['code'];
		echo '<pre>';
		print_r($_SESSION);
		echo '</pre>';
           echo $_SESSION['shop'];
         echo "fifth part";
	echo "b=".$access_token = shopify\access_token($_SESSION['shop'], SHOPIFY_APP_API_KEY, SHOPIFY_APP_SHARED_SECRET, $_SESSION['code']);
echo "dfsgfdgsfdg";	
echo "c=".$shopify = shopify\client($_SESSION['shop'], SHOPIFY_APP_API_KEY, $access_token); 
?>

