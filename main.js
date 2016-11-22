// Load Pages

// Initial Page Load
(function($) {
	$(document).ready(function() {
		getproducts(); // start the loop
	});
})(jQuery);

// Get Collections / Share Page
function getproducts(){

	var access_token='<?php echo $access_token ?>';
	var shop='<?php echo $_REQUEST['shop'] ?>';

	$.ajax({
		url: '/collections.php?access_token='+access_token+'&shop='+shop,
		success: function(data){
			//console.log(data);
			// var data1= data.find('.chat_container').html()
			$('.content-container').html(data);
			$('#share-link').addClass('sidebar-link-active');
			$('#captions-link').removeClass('sidebar-link-active');
			$('#settings-link').removeClass('sidebar-link-active');
			// Help
			$(".help-clearfix").empty();
			$(".help-clearfix").load("help/share.php");
		}
	});
}

// Get Dashboard Page
function getdashboard(){

	var access_token='<?php echo $access_token ?>';
	var shop='<?php echo $_REQUEST['shop'] ?>';

	$.ajax({
		url: '/dashboard.php?access_token='+access_token+'&shop='+shop,
		success: function(data){
			//console.log(data);
			// var data1= data.find('.chat_container').html()
			$('.content-container').html(data);
		}
	});
}

// Get Captions Page
function getcaptions(){

	var access_token='<?php echo $access_token ?>';
	var shop='<?php echo $_REQUEST['shop'] ?>';

	$.ajax({
		url: '/captions.php?access_token='+access_token+'&shop='+shop,
		success: function(data){
			//console.log(data);
			// var data1= data.find('.chat_container').html()
			$('.content-container').html(data);
			$('#captions-link').addClass('sidebar-link-active');
			$('#share-link').removeClass('sidebar-link-active');
			$('#settings-link').removeClass('sidebar-link-active');
			// Help
			$(".help-clearfix").empty();
			$(".help-clearfix").load("help/captions.php");
		}
	});
}
// Get Settings Page
function getsettings(){

	var access_token='<?php echo $access_token ?>';
	var shop='<?php echo $_REQUEST['shop'] ?>';

	$.ajax({
		url: '/settings.php?access_token='+access_token+'&shop='+shop,
		success: function(data){
			//console.log(data);
			// var data1= data.find('.chat_container').html()
			$('.content-container').html(data);
			$('#settings-link').addClass('sidebar-link-active');
			$('#share-link').removeClass('sidebar-link-active');
			$('#captions-link').removeClass('sidebar-link-active');
			// Help
			$(".help-clearfix").empty();
			$(".help-clearfix").load("help/settings.php");
		}
	});
}
// Get Share History
function gethistory(){

	var access_token='<?php echo $access_token ?>';
	var shop='<?php echo $_REQUEST['shop'] ?>';

	$.ajax({
		url: '/collections.php?access_token='+access_token+'&shop='+shop+'&status=history',
		success: function(data){
			//console.log(data);
			// var data1= data.find('.chat_container').html()
			$('.content-container').html(data);
		}
	});
}

// Help Slide
$(document).ready(function(){
  $('#help-button').click(function() {
      if ($("#help-menu-container").hasClass('help-menu-animate')) {
          $('#help-menu-container').removeClass("help-menu-animate");
	  $(".preview-container").removeClass("preview-container-help");
	  $(".main_container_clearfix").removeClass("main_container_clearfix-help");
          $('.sidebar-nav-container-header').removeClass("sidebar-nav-container-header-active");
          $('.help-header-link').css("color", "#666");
      } else {
          $('#help-menu-container').addClass("help-menu-animate");
	  $(".preview-container").addClass("preview-container-help");
	  $(".main_container_clearfix").addClass("main_container_clearfix-help");
          $('.sidebar-nav-container-header').addClass("sidebar-nav-container-header-active");
          $('.help-header-link').css("color", "white");
      };
  });
});

// Help Containers
