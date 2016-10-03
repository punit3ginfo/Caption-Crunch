<?php

// Required File Start.........
require __DIR__.'/connection.php'; //DB connectivity
// Required File END...........
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
// require __DIR__.'/get_products.php'; //GET PRODUCTS
?>

<head>
  <title>Caption Crunch</title>
  <link rel="stylesheet" href="/style.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
</head>

<body>
	<div class="back">

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
            <a class="sidebar-link" href="index.php/?page=collections">
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

            <?php
                $page = $_GET['page']; // To get the page

                if($page == null) {
                    $page = 'index'; // Set page to index, if not set
                }
                switch ($page) {

                case 'index':
                include('test.php');
                break;

                case 'collections':
                include('collections.php');
                break;
                }

          ?>

        </div>
    	</div>
    </div>
    </div>

    <!-- /.Page Container -->

</div>

</body>
