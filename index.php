<?php

// Required File Start.........
require __DIR__.'/connection.php'; //DB connectivity
// Required File END...........
error_reporting(E_ALL);
ini_set('display_errors', 1);
echo "<h1>welcome to my app</h1>";
require __DIR__.'/get_products.php'; //GET PRODUCTS
?>

