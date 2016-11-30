<!-- <div class="help-clearfix"></div> -->

<div class="help-container">
	<div class="chat_container" style="overflow: hidden;">
		<div class="sidebar-content-header">
			<div class="content-header-title-container">
				<div class="content-header-title">
					<span class="cc-text-large">
						HELP
					</span>
				</div>
			</div>

			<div class="menu-overflow-container">
				<div class="menu-overflow">

					<!-- Collection Card -->
					<a href="javascript:void(0)">
						<div id="getting-started-trigger" class="menu-container">
							<div class="menu-clearfix">
								<div class="menu-font-container">
									<span class="menu-font">Getting Started</span>
								</div>
								<div class="menu-icon-clearfix">
									<div class="menu-icon-container">
										<span class="help-menu-icon"><i id="getting-started-icon" class="fa fa-star" style="line-height: 40px;" aria-hidden="true"></i></span>
									</div>
								</div>
							</div>
						</div>
					</a>

					<div id="getting-started-dropdown">
						<div class="sub-menu">
							<div class="sub-menu-clearfix">
								<span class="cc-text-medium">Help Topic</span>
							</div>
						</div>
						<div class="sub-menu">
							<div class="sub-menu-clearfix">
								<span class="cc-text-medium">Help Topic</span>
							</div>
						</div>
						<div class="sub-menu">
							<div class="sub-menu-clearfix">
								<span class="cc-text-medium">Help Topic</span>
							</div>
						</div>
						<div class="sub-menu">
							<div class="sub-menu-clearfix">
								<span class="cc-text-medium">Help Topic</span>
							</div>
						</div>
					</div>

					<a href="javascript:void(0)">
						<div id="share-trigger" class="menu-container">
							<div class="menu-clearfix">
								<div class="menu-font-container">
									<span class="menu-font">Share</span>
								</div>
								<div class="menu-icon-clearfix">
									<div class="menu-icon-container">
										<spa class="help-menu-icon"><i id="share-icon" class="fa fa-bullhorn" style="line-height: 40px;" aria-hidden="true"></i></span>
									</div>
								</div>
							</div>
						</div>
					</a>

					<div id="share-dropdown">
						<div class="sub-menu">
							<div class="sub-menu-clearfix">
								<span class="cc-text-medium">Help Topic</span>
							</div>
						</div>
						<div class="sub-menu">
							<div class="sub-menu-clearfix">
								<span class="cc-text-medium">Help Topic</span>
							</div>
						</div>
						<div class="sub-menu">
							<div class="sub-menu-clearfix">
								<span class="cc-text-medium">Help Topic</span>
							</div>
						</div>
					</div>

					<!-- Collection Card -->

				</div>
			</div>
		</div>

		<div class="content-header">

			<div class="content-header-3col-container">
				<div class="content-header-container">
					<a href="javascript:void(0)" onclick="" class="sidebar-span share-history-button">
						<i class="fa fa-ticket" aria-hidden="true"></i>
						Support
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

				</div>
			</div>
		</div>
		<div class="content-overflow-container">
			<div  class="help-content-overflow">
				<?php include 'help-content.php' ?>
			</div>
		</div>
	</div>
</div>
