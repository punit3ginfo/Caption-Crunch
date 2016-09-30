<?php

// Required File Start.........
require __DIR__.'/connection.php'; //DB connectivity
// Required File END...........
error_reporting(E_ALL);
ini_set('display_errors', 1);
// echo "<h1>SUHHHHHHHH</h1>";
// require __DIR__.'/get_products.php'; //GET PRODUCTS
?>

<head>
  <title>Caption Crunch</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
</head>

<body>
	<div class="back">
    <!-- Navigation -->
    <header class="navbar navbar-inverse navbar-fixed-top" role="navigation">

            <!-- Brand and toggle get grouped for better mobile display -->

                <a class="navbar-brand" href="#">
                  	<img style="height: 15px; display: inline-block; margin-bottom: 5px;" src="{{ 'Caption-Crunch-Hammer.png' | asset_img_url: 'medium' }}"/>
                	<span class="header-help">Caption</span>
                    <span style="margin-left: -4px;" class="header-central">Crunch</span>
                </a>

            <!-- Collect the nav links, forms, and other content for toggling -->
     		<nav class="main-nav-container">
				<a class="sidebar-link" style="text-decoration: none;" href="/pages/help">
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

    <!-- Sidebar Nav -->
		<aside class="sidebar_nav">
          	<a class="sidebar-link" href="/">
            	<div class="sidebar-nav-container">
                  	<span class="sidebar-span">
                    <i style="font-size: 20px;" class="fa fa-tachometer" aria-hidden="true"></i><br>
                  	Dashboard
                  	</span>
              	</div>
            </a>
            <a class="sidebar-link" href="/pages/builder">
            	<div class="sidebar-nav-container">
                  	<span class="sidebar-span">
                    <i style="font-size: 20px;" class="fa fa-pencil-square-o" aria-hidden="true"></i><br>
                  	Builder
                  	</span>
              	</div>
            </a>
            <a class="sidebar-link" href="/collections/all">
            	<div class="sidebar-nav-container">
                  	<span class="sidebar-span">
                      <i style="font-size: 20px;" class="fa fa-sitemap" aria-hidden="true"></i><br>
                      Collections
                    </span>
                </div>
            </a>
            <a class="sidebar-link" href="/">
            	<div class="sidebar-nav-container">
					<span class="sidebar-span">
                      <i style="font-size: 20px;" class="fa fa-paper-plane-o" aria-hidden="true"></i><br>
                      Autopilot
                    </span>
                </div>
            </a>

            <div  style="position: absolute; bottom: 0px;">
              <a class="sidebar-link" href="/">
            	<div class="sidebar-nav-container">
					<span class="sidebar-span">
                      <i style="font-size: 20px;" class="fa fa-cogs" aria-hidden="true"></i><br>
                      Settings
                    </span>
                </div>
              </a>
              <a class="sidebar-link" href="/">
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

    <!-- /.Page Container -->
    <div class="main_container_clearfix">
    	<div class="main_container">
			<div class="content-container">
              {{ content_for_layout }}
            </div>
    	</div>
    </div>

    <!-- /.Page Container -->

</div>

</body>
