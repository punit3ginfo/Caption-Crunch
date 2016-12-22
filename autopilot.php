
<div class="chat_container" style="overflow: hidden;">
	<div class="sidebar-content-header">
		<div class="content-header-title-container">
			<div class="content-header-title">
				<span class="cc-text-large">
					Campaigns
				</span>
			</div>
		</div>

		<div class="menu-overflow-container">
			<div class="menu-overflow">

				<!-- Caption Menu Item  -->
				<a href="javascript:void(0)">
					<div class="menu-container" >
						<div class="menu-clearfix">
							<div class="menu-font-container">
								<span class="menu-font">Campaign titles go here</span>
							</div>
						</div>
					</div>
				</a>
				<!-- Caption Menu Item  -->

			</div>
		</div>
	</div>


	<div class="content-header">

		<div class="content-header-3col-container">
			<div class="content-header-container">
				<a href="javascript:void(0)" class="sidebar-span share-history-button">
					<i class="fa fa-plus" aria-hidden="true"></i>
					New Campaign
				</a>
			</div>
		</div>

		<div class="content-header-3col-container">
			<div class="content-header-container">
					<span class="cc-text-small">Campaign Status :</span>
			</div>
		</div>

		<div class="content-header-3col-container">

			<div class="content-header-container">
				<div class="toggle-container">
					<a href="javascript:void(0)" class="btn grey-button-solid campaign-toggle-button toggle-left">
						<i class="fa fa-times" aria-hidden="true"></i>
						 OFF
					</a>
				</div>
			</div>

			<!-- <div class="content-header-container">
				<a href="javascript:void(0)" class="btn green-button save-button">
					<i class="fa fa-unlock-alt" aria-hidden="true"></i>
					SAVE
				</a>
			</div> -->
		</div>

	</div>

	<div class="content-overflow-container">

		<div  class="content-overflow">
			<?php include 'autopilot-form.php';?>
		</div>

	</div>
</div>

<!-- Show / Hide Script -->
<script type="text/javascript">

//  Campaign Toggle

$('.toggle-left').click(function() {
	// $('.campaign-toggle-button').css('left','20px');
	$('.campaign-toggle-button').removeClass('toggle-left');
	$('.campaign-toggle-button').addClass('toggle-right');
	$('.campaign-toggle-button').removeClass('grey-button-solid');
	$('.campaign-toggle-button').addClass('green-button-solid');
	$('.campaign-toggle-button').html('<i class="fa fa-check" aria-hidden="true"></i> ON');
});

$('.toggle-right').click(function() {
	// $('.campaign-toggle-button').css('left','20px');
	$('.campaign-toggle-button').removeClass('toggle-right');
	$('.campaign-toggle-button').addClass('toggle-left');
	$('.campaign-toggle-button').removeClass('green-button-solid');
	$('.campaign-toggle-button').addClass('grey-button-solid');
	$('.campaign-toggle-button').html('<i class="fa fa-times" aria-hidden="true"></i> OFF');
});


// Condition - Show / Hide
// $('.conditions-show-hide-button').click(function() {
// 	// Show / Hide Conditions Container
// 	$('.conditions-show-hide').slideToggle("slow");
// 	// Rotate Arrow 180 Degree / Click
// 	$('#condition-arrow-icon').toggleClass('fa-chevron-up fa-chevron-down');
// });
//
// // Templates - Show / Hide
// $('.templates-show-hide-button').click(function() {
// 	// Show / Hide Conditions Container
// 	$('.template-show-hide').slideToggle("slow");
// 	// Rotate Arrow 180 Degree / Click
// 	$('#template-arrow-icon').toggleClass('fa-chevron-up fa-chevron-down');
// });
//
// // Products - Show / Hide
// $('.products-show-hide-button').click(function() {
// 	// Show / Hide Conditions Container
// 	$('.products-show-hide').slideToggle("slow");
// 	// Rotate Arrow 180 Degree / Click
// 	$('#products-arrow-icon').toggleClass('fa-chevron-up fa-chevron-down');
// });

</script>
