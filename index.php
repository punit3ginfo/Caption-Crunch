<?php
session_start();
// Required File Start.........
require __DIR__.'/conf.php'; //Configuration
require __DIR__.'/connection.php'; //DB connectivity
require __DIR__.'/vendor/autoload.php';
use phpish\shopify;
// Required File END...........
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
// require __DIR__.'/get_products.php'; //GET PRODUCTS
//echo $_REQUEST['code'];
 if((isset($_REQUEST['shop'])) && (isset($_REQUEST['code'])) && $_REQUEST['shop']!='' && $_REQUEST['code']!='' )
    {
       $_SESSION['shop']=$_REQUEST['shop'];
       $_SESSION['code']=$_REQUEST['code'];
    }
$access_token = shopify\access_token($_REQUEST['shop'], SHOPIFY_APP_API_KEY, SHOPIFY_APP_SHARED_SECRET, $_REQUEST['code']);

       require __DIR__.'/smart_collection.php'; //create smart collection
       
?>

<head>
  <title>Caption Crunch</title>
  <link rel="stylesheet" href="/style.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
</head>

<body>
	<div class="back">

    <!-- Sidebar Nav -->
		<aside class="sidebar_nav">
          	<a  class="sidebar-link" href="javascript:void(0)" onclick="getdashboard()">
            	<div class="sidebar-nav-container">
                  	<span class="sidebar-span">
                    <i style="font-size: 20px;" class="fa fa-tachometer" aria-hidden="true"></i><br>
                  	Dashboard
                  	</span>
              	</div>
            </a>
			<a  class="sidebar-link" href="javascript:void(0)" onclick="getbuilder()">

            	<div class="sidebar-nav-container">
                  	<span class="sidebar-span">
                    <i style="font-size: 20px;" class="fa fa-pencil-square-o" aria-hidden="true"></i><br>
                  	Builder
                  	</span>
              	</div>
            </a>
            <a class="sidebar-link" href="javascript:void(0)" onclick="getproducts()" >
            	<div class="sidebar-nav-container">
                  	<span class="sidebar-span">
                      <i style="font-size: 20px;" class="fa fa-sitemap" aria-hidden="true"></i><br>
                      Collections
                    </span>
                </div>
            </a>
            <!-- <a class="sidebar-link" href="/?page=autopilot">
            	<div class="sidebar-nav-container">
					<span class="sidebar-span">
                      <i style="font-size: 20px;" class="fa fa-paper-plane-o" aria-hidden="true"></i><br>
                      Autopilot
                    </span>
                </div>
            </a> -->

            <div  style="position: absolute; bottom: 0px;">
              <a class="sidebar-link" href="javascript:void(0)" onclick="getsettings()" >
            	<div class="sidebar-nav-container">
					<span class="sidebar-span">
                      <i style="font-size: 20px;" class="fa fa-cogs" aria-hidden="true"></i><br>
                      Settings
                    </span>
                </div>
              </a>
			  <a class="sidebar-link" href="javascript:void(0)" onclick="getaccount()" >

                  <div class="sidebar-nav-container">
                      <span class="sidebar-span">
                      <i style="font-size: 20px;" class="fa fa-user" aria-hidden="true"></i><br>
                      Account
                      </span>
                  </div>
              </a>
            </div>
        </aside>
    <!-- /.Sidebar Nav -->

    <!-- Navigation -->
    <header class="navbar navbar-inverse navbar-fixed-top" role="navigation">

            <!-- Brand and toggle get grouped for better mobile display -->

                <a class="navbar-brand" href="/">
                  	<img class="header-cc-hammer-img" src="./images/Caption-Crunch-Hammer.jpg"/>
                	<span class="header-help">Caption</span>
                    <span class="header-central">Crunch</span>
                </a>

            <!-- Collect the nav links, forms, and other content for toggling -->
     		<nav class="main-nav-container">
				<a class="sidebar-link" style="text-decoration: none;" href="/#">
                  <div class="sidebar-nav-container-header">
                      <span class="sidebar-span">
                      <i style="font-size: 20px;" class="fa fa-info" aria-hidden="true"></i><br>
                      Help
                      </span>
                  </div>
            	</a>
            </nav>
            <!-- /.navbar-collapse -->

        <!-- /.container -->
    </header>

    <!-- /.Page Container -->
    <div class="main_container_clearfix">
      <div style="width: 100%; height: 100%;">
    	<div class="main_container">
			  <div class="content-container">



        </div>
    	</div>
    </div>
    </div>

    <!-- /.Page Container -->

</div>
<script>
	function getproducts(){

               var access_token='<?php echo $access_token ?>';
		var shop='<?php echo $_REQUEST['shop'] ?>';

                $.ajax({
                    url: '/collections.php?access_token='+access_token+'&shop='+shop,
                    success: function(data){
                     //console.log(data);
			   // var data1= data.find('.chat_container').html()
			    $('.main_container').html(data);
                    }
                });
            }
			function getdashboard(){

               var access_token='<?php echo $access_token ?>';
		var shop='<?php echo $_REQUEST['shop'] ?>';

                $.ajax({
                    url: '/dashboard.php?access_token='+access_token+'&shop='+shop,
                    success: function(data){
                     //console.log(data);
			   // var data1= data.find('.chat_container').html()
			    $('.main_container').html(data);
                    }
                });
            }
			function getbuilder(){

               var access_token='<?php echo $access_token ?>';
		var shop='<?php echo $_REQUEST['shop'] ?>';

                $.ajax({
                    url: '/builder.php?access_token='+access_token+'&shop='+shop,
                    success: function(data){
                     //console.log(data);
			   // var data1= data.find('.chat_container').html()
			    $('.main_container').html(data);
                    }
                });
            }
			function getsettings(){

               var access_token='<?php echo $access_token ?>';
		var shop='<?php echo $_REQUEST['shop'] ?>';

                $.ajax({
                    url: '/settings.php?access_token='+access_token+'&shop='+shop,
                    success: function(data){
                     //console.log(data);
			   // var data1= data.find('.chat_container').html()
			    $('.main_container').html(data);
                    }
                });
            }
			function getaccount(){

               var access_token='<?php echo $access_token ?>';
		var shop='<?php echo $_REQUEST['shop'] ?>';

                $.ajax({
                    url: '/account.php?access_token='+access_token+'&shop='+shop,
                    success: function(data){
                     //console.log(data);
			   // var data1= data.find('.chat_container').html()
			    $('.main_container').html(data);
                    }
                });
            }
	
	
function gethistory(){
                alert(45);
               var access_token='<?php echo $access_token ?>';
		var shop='<?php echo $_REQUEST['shop'] ?>';

                $.ajax({
                    url: '/collections.php?access_token='+access_token+'&shop='+shop+'&status=history',
                    success: function(data){
                     //console.log(data);
			   // var data1= data.find('.chat_container').html()
			    $('.main_container').html(data);
                    }
                });
            }
	
	
	function search(){
                alert(451222);
               var access_token='<?php echo $access_token ?>';
		var shop='<?php echo $_REQUEST['shop'] ?>';

                $.ajax({
                    url: '/collections.php?access_token='+access_token+'&shop='+shop+'&status=history',
                    success: function(data){
                     //console.log(data);
			   // var data1= data.find('.chat_container').html()
			    $('.main_container').html(data);
                    }
                });
            }
</script>

	

</body>
