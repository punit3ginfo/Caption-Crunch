<?php
session_start();
// Required File Start.........
require __DIR__.'/conf.php'; //Configuration
require __DIR__.'/connection.php'; //DB connectivity
require __DIR__.'/vendor/autoload.php';
use phpish\shopify;
// Required File END...........
error_reporting(E_ALL);
ini_set('display_errors', 1);
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

  <link rel="apple-touch-icon" sizes="57x57" href="./Favicon.ico/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="./Favicon.ico/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="./Favicon.ico/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="./Favicon.ico/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="./Favicon.ico/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="./Favicon.ico/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="./Favicon.ico/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="./Favicon.ico/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="./Favicon.ico/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="./Favicon.ico/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./Favicon.ico/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="./Favicon.ico/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./Favicon.ico/favicon-16x16.png">
  <link rel="manifest" href="./Favicon.ico/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="./Favicon.ico/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
</head>

<body>
	<div class="back">

    <div id="preview-container">
             <div class="preview-container">
               <div  class="product-grid-overflow-container" style="">
                 <!-- Feed Up Next -->
                   <div class="feed-upnext-container">
                     <div class="feed-upnext-clearfix">
                       <span class="conditions-title" style="line-height: 30px">
                         Up Next
                       </span>
                     </div>
                   </div>

                 <!-- Feed Product Card -->
                   <div class="feed-product-main-conatiner">
                       <div class="feed-product-main-clearfix">
                               <div class="feed-product-titledate-container">
                                   <div class="feed-product-title-container">
                                       <span class="feed-product-title">Product Title Goes Here</span>
                                   </div>
                                   <div class="feed-product-date-container">
                                       <span class="feed-product-date">Today @ 2:22PM</span>
                                   </div>
                               </div>
                       </div>
                   </div>
                 <!-- END -->

               </div>
         </div>
    </div>

    <div id="help-menu-container">

    </div>

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

            <!-- <div  style="position: absolute; bottom: 0px;">
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
            </div> -->
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
        <div class="close-preview-container">
            <a id="close-preview-button" class='close-button'><i class="fa fa-times" aria-hidden="true"></i> Close Preview</a>
        </div>
				<a id="help-button" class="sidebar-link" style="text-decoration: none; float: right; cursor:pointer;">
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
      <div id="main-padded-container" class="">
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



<script>
(function($) {
    $(document).ready(function() {
        getdashboard(); // start the loop
    });
})(jQuery);
</script>

<!-- Help Slide -->
<script>
$(document).ready(function(){
  $('#help-button').click(function() {
      if ($("#help-menu-container").hasClass('help-menu-animate')) {
          $('#help-menu-container').removeClass("help-menu-animate");
      } else {
          $('#help-menu-container').addClass("help-menu-animate");
      };
  });
});
</script>



</body>
