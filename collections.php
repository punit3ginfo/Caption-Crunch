<div class="collections-animation-container">
	<div class="chat_container" style="overflow: hidden;">
		<div class="sidebar-content-header">
			<div class="content-header-title-container">
				<div class="content-header-title">
					<span class="cc-text-large">
						COLLECTIONS
					</span>
				</div>
			</div>

			<div class="menu-overflow-container">
				<div class="menu-overflow">

					<!-- Collection Card -->

					<a href="javascript:void(0)" onclick="getnewproducts()">
						<div class="menu-container" id="new-products">
							<div class="menu-clearfix">
								<div class="menu-font-container">
									<span class="menu-font">NEWEST PRODUCTS</span>
								</div>
								<div class="menu-icon-clearfix">
									<div class="menu-icon-bg"></div>
									<div class="menu-icon-container">
										<span class="menu-icon">NEW</span>
									</div>
								</div>
							</div>
						</div>
					</a>

					<a href="javascript:void(0)" onclick="getproducts()">
						<div class="menu-container"  id="all-products">
							<div class="menu-clearfix">
								<div class="menu-font-container">
									<span class="menu-font">ALL PRODUCTS</span>
								</div>
								<div class="menu-icon-clearfix">
									<div class="menu-icon-container">
										<span class="menu-icon">ALL</span>
									</div>
								</div>
							</div>
						</div>
					</a>

					<?php

					// echo "Product's go here"
					require __DIR__.'/get_collectionlist.php'; //GET PRODUCTS
					?>

					<!-- Collection Card -->

				</div>
			</div>
		</div>

		<div class="content-header">

			<div class="content-header-3col-container">
				<div class="content-header-container" id="share-back">
					<a href="javascript:void(0)" onclick="getsharehistory()" class="sidebar-span share-history-button">
						<i class="fa fa-history" aria-hidden="true"></i>
						 Share History
					</a>
				</div>
			</div>

			<div class="content-header-3col-container">
				<div class="content-header-container">
					<input class="search-text-box" onKeyDown="if(event.keyCode==13) search(document.getElementById('formValueId').value);" id="formValueId" type="text" name="q_name" placeholder="Search" />
					<i class="fa fa-search search-button" onclick="search(document.getElementById('formValueId').value);"></i>
				</div>
			</div>

			<div class="content-header-3col-container">
				<div class="content-header-container">
					<nav aria-label="Page navigation" class="page">
						<ul class="pagination text-center" id="pagination1"></ul>
						<ul class="pagination text-center" id="pagination2"></ul>
					</nav>
					<!--div class="text-center" id="pagination"></div-->
				</div>
			</div>

			<!-- <div class="collection_title_header_container">
						<div class="collection_title_container-active">

						<input class="search-text-box" onKeyDown="if(event.keyCode==13) search(document.getElementById('formValueId').value);" id="formValueId" type="text" name="q_name" placeholder="Search" />

						<i style="position: absolute; right: 10px;  color: #666;" class="fa fa-search" onclick="search(document.getElementById('formValueId').value);"></i>

					</div>
				</div> -->
		</div>
		<div class="content-overflow-container">
			<div id="product-feed" class="content-overflow">

				<?php

				//  Products List Here
				if($_REQUEST['status']=="search"){
					require __DIR__.'/history.php';
				}
				if(($_REQUEST['status']!="search")|| ($_REQUEST['status']=="")){
					require __DIR__.'/get_products.php';
				}

				?>

			</div>
		</div>
	</div>
</div>

<div id="top-slide-down">
	<?php include 'preview.php';?>
</div>

<script>
	$(document).ready(function(){
		$('.loader').css('top','-100vh');
		$(".main-content-container").css('top','0px');
		$(".sidebar_nav").css('left','0px');
		$('.main-nav-container').css('right','0px');
		$('.navbar-brand').addClass('navbar-load');

		$("#dashboard").load('dashboard.php');
		$("#autopilot").load('autopilot.php');
		$("#captions").load('captions.php');
	});
</script>
