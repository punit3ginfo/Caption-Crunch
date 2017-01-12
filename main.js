// Help Slide

function goToDashboard(){
	$('.main-content-container').css('left','0px');
	$('#products-link').removeClass('sidebar-link-active');
	$('#captions-link').removeClass('sidebar-link-active');
	$('#dashboard-link').addClass('sidebar-link-active');
	$('#autopilot-link').removeClass('sidebar-link-active');
	$('.sidebar-link-active').removeClass('hover-active-menu');
	$('.sidebar-link').removeClass('hover-active-menu');
	$('#products-preview-back').css('display','none');
	$('#products-link').css('display','block');
	$(".preview-container").removeClass("main-container-slide-left");
	$(".main-content-container").css('top','0px');
}

function goToBufferHelp() {
	 $("#buffer-help-link").css('display','none');
	 $("#buffer-help-back-link").css('display','block');
	 $('.sidebar-link').removeClass('hover-active-menu');
	$('#help-slide').addClass("help-slide-animate");
	$(".main-content-container").css('top','100vh');
	$('#post-preview-container').css('display','none');
	//  hide menu
	$('#captions-link').css('display','none');
	$('#dashboard-link').css('display','none');
	$('#autopilot-link').css('display','none');
	$('#products-link').css('display','none');
};

function goToBufferHelpBack(){
		$("#buffer-help-back-link").css('display','none');
		$("#buffer-help-link").css('display','block');
		$('#help-slide').removeClass("help-slide-animate");
		$(".main-content-container").css('top','0px');
		//  show menu
		$('#products-link').css('display','block');
		$('#captions-link').css('display','block');
		$('#dashboard-link').css('display','block');
		$('#autopilot-link').css('display','block');
};

function goToAutopilot(){
	$('.main-content-container').css('left','-100vw');
	$('#products-link').removeClass('sidebar-link-active');
	$('#captions-link').removeClass('sidebar-link-active');
	$('#dashboard-link').removeClass('sidebar-link-active');
	$('#autopilot-link').addClass('sidebar-link-active');
	$('.sidebar-link-active').removeClass('hover-active-menu');
	$('.sidebar-link').removeClass('hover-active-menu');
	$('#products-preview-back').css('display','none');
	$('#products-link').css('display','block');
	$(".preview-container").removeClass("main-container-slide-left");
	$(".main-content-container").css('top','0px');
}

function goToAutopilotHelp() {
	$("#autopilot-help-link").css('display','none');
	$("#autopilot-help-back-link").css('display','block');
	$('.sidebar-link').removeClass('hover-active-menu');
	$('#help-slide').addClass("help-slide-animate");
	$(".main-content-container").css('top','100vh');
	$('#post-preview-container').css('display','none');
	//  hide menu
	$('#captions-link').css('display','none');
	$('#dashboard-link').css('display','none');
	$('#autopilot-link').css('display','none');
	$('#products-link').css('display','none');
};

function goToAutopilotHelpBack(){
		 $("#autopilot-help-back-link").css('display','none');
		 $("#autopilot-help-link").css('display','block');
		$('#help-slide').removeClass("help-slide-animate");
		$(".main-content-container").css('top','0px');
		//  show menu
		$('#products-link').css('display','block');
		$('#captions-link').css('display','block');
		$('#dashboard-link').css('display','block');
		$('#autopilot-link').css('display','block');
};

function goToCaptions(){
	$('.main-content-container').css('left','-200vw');
	$('#products-link').removeClass('sidebar-link-active');
	$('#captions-link').addClass('sidebar-link-active');
	$('#dashboard-link').removeClass('sidebar-link-active');
	$('#autopilot-link').removeClass('sidebar-link-active');
	$('.sidebar-link-active').removeClass('hover-active-menu');
	$('.sidebar-link').removeClass('hover-active-menu');
	$('#products-preview-back').css('display','none');
	$('#products-link').css('display','block');
	$(".preview-container").removeClass("main-container-slide-left");
	$(".main-content-container").css('top','0px');
}

function goToCaptionsHelp() {
	 $("#captions-help-link").css('display','none');
	 $("#captions-help-back-link").css('display','block');
	 $('.sidebar-link').removeClass('hover-active-menu');
	$('#help-slide').addClass("help-slide-animate");
	$(".main-content-container").css('top','100vh');
	$('#post-preview-container').css('display','none');
	//  hide menu
	$('#captions-link').css('display','none');
	$('#dashboard-link').css('display','none');
	$('#autopilot-link').css('display','none');
	$('#products-link').css('display','none');

};

function goToCaptionsHelpBack(){
		 $("#captions-help-back-link").css('display','none');
		 $("#captions-help-link").css('display','block');
		$('#help-slide').removeClass("help-slide-animate");
		$(".main-content-container").css('top','0px');
		//  show menu
		$('#products-link').css('display','block');
		$('#captions-link').css('display','block');
		$('#dashboard-link').css('display','block');
		$('#autopilot-link').css('display','block');
};

function goToProducts(){
	$('.main-content-container').css('left','-300vw');
	$('#products-link').addClass('sidebar-link-active');
	$('#captions-link').removeClass('sidebar-link-active');
	$('#dashboard-link').removeClass('sidebar-link-active');
	$('#autopilot-link').removeClass('sidebar-link-active');
	$('.sidebar-link-active').removeClass('hover-active-menu');
	$('.sidebar-link').removeClass('hover-active-menu');
	$('#products-preview-back').css('display','none');
	$('#products-link').css('display','block');
	$(".preview-container").removeClass("main-container-slide-left");
	$(".main-content-container").css('top','0px');
}

function goToProductsHelp() {
	$("#products-help-link").css('display','none');
	$("#products-help-back-link").css('display','block');
	$('.sidebar-link').removeClass('hover-active-menu');
	$('#help-slide').addClass("help-slide-animate");
	$(".main-content-container").css('top','100vh');
	$('#post-preview-container').css('display','none');
	//  hide menu
	$('#captions-link').css('display','none');
	$('#dashboard-link').css('display','none');
	$('#autopilot-link').css('display','none');
	$('#products-link').css('display','none');
	//  help menu active
	$('#products-help-menu-container').addClass('menu-container-active');
	$('#pruducts-help-sub-menu > .sub-menu:nth-child(1)').addClass('sub-menu-active');
     //  help menu scroll
     var $container = $('#help-menu-overflow'),
	    $scrollTo = $('#products-help-menu-container');
     $container.animate({
	 scrollTop: $scrollTo.offset().top - $container.offset().top + $container.scrollTop()
     });

};

function goToProductsHelpBack(){
		 $("#products-help-back-link").css('display','none');
		 $("#products-help-link").css('display','block');
		$('#help-slide').removeClass("help-slide-animate");
		$(".main-content-container").css('top','0px');
		//  show menu
		$('#products-link').css('display','block');
		$('#captions-link').css('display','block');
		$('#dashboard-link').css('display','block');
		$('#autopilot-link').css('display','block');
};

function loading() {
	$(".main-content-container").css('top','0px');
	$(".sidebar_nav").css('left','0px');
};

// Side bar

$('.sidebar-link').mouseleave( function() {
	$('.sidebar-link-active').removeClass('hover-active-menu');
});

$('.sidebar-link-active').mouseenter( function() {
	$('.sidebar-link-active').removeClass('hover-active-menu');
});

$('.sidebar-link').mouseenter( function() {
	$('.sidebar-link-active').addClass('hover-active-menu');
});

//  Menu (finish)

// $('.menu-link').mouseenter( function() {
// 	$('.menu-container-active').addClass('hover-active-menu');
// });

// $('.menu-container').mouseleave( function() {
// 	$('.menu-container-active').removeClass('hover-active-menu');
// });

// $('.menu-container-active').mouseenter( function() {
// 	console.log("titties");
// 	$('.menu-container-active').removeClass('hover-active-menu');
// });
