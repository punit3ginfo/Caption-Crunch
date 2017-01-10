// Help Slide

function goToDashboard(){
	$('.main-content-container').css('left','0px');
	$('#products-link').removeClass('sidebar-link-active');
	$('#captions-link').removeClass('sidebar-link-active');
	$('#dashboard-link').addClass('sidebar-link-active');
	$('#autopilot-link').removeClass('sidebar-link-active');
	$('.sidebar-link-active').removeClass('hover-active-menu');
	$('.sidebar-link').removeClass('hover-active-menu');

	$("#buffer-help-link").css('display','block');
	$("#autopilot-help-link").css('display','none');
	$("#captions-help-link").css('display','none');
	$("#products-help-link").css('display','none');
	$("#help-back-link").css('display','none');

	$('#help-slide').removeClass("help-slide-animate");

	$(".preview-container").removeClass("main-container-slide-left");
	$(".main-content-container").css('top','0px');
	$(".main_container_clearfix").removeClass("slide-left");

	$("#buffer-help-back-link").css('display','none');
	$("#autopilot-help-back-link").css('display','none');
	$("#captions-help-back-link").css('display','none');
	$("#products-help-back-link").css('display','none');
}

function goToAutopilot(){
	$('.main-content-container').css('left','-100vw');
	$('#products-link').removeClass('sidebar-link-active');
	$('#captions-link').removeClass('sidebar-link-active');
	$('#dashboard-link').removeClass('sidebar-link-active');
	$('#autopilot-link').addClass('sidebar-link-active');
	$('.sidebar-link-active').removeClass('hover-active-menu');
	$('.sidebar-link').removeClass('hover-active-menu');

	$("#buffer-help-link").css('display','none');
	$("#autopilot-help-link").css('display','block');
	$("#captions-help-link").css('display','none');
	$("#products-help-link").css('display','none');
	$("#help-back-link").css('display','none');

	$('#help-slide').removeClass("help-slide-animate");

	$(".preview-container").removeClass("main-container-slide-left");
	$(".main-content-container").css('top','0px');
	$(".main_container_clearfix").removeClass("slide-left");

	$("#buffer-help-back-link").css('display','none');
	$("#autopilot-help-back-link").css('display','none');
	$("#captions-help-back-link").css('display','none');
	$("#products-help-back-link").css('display','none');
}

function goToCaptions(){
	$('.main-content-container').css('left','-200vw');
	$('#products-link').removeClass('sidebar-link-active');
	$('#captions-link').addClass('sidebar-link-active');
	$('#dashboard-link').removeClass('sidebar-link-active');
	$('#autopilot-link').removeClass('sidebar-link-active');
	$('.sidebar-link-active').removeClass('hover-active-menu');
	$('.sidebar-link').removeClass('hover-active-menu');

	$("#buffer-help-link").css('display','none');
	$("#autopilot-help-link").css('display','none');
	$("#captions-help-link").css('display','block');
	$("#products-help-link").css('display','none');
	$("#help-back-link").css('display','none');

	$('#help-slide').removeClass("help-slide-animate");

	$(".preview-container").removeClass("main-container-slide-left");
	$(".main-content-container").css('top','0px');
	$(".main_container_clearfix").removeClass("slide-left");

	$("#buffer-help-back-link").css('display','none');
	$("#autopilot-help-back-link").css('display','none');
	$("#captions-help-back-link").css('display','none');
	$("#products-help-back-link").css('display','none');
}

function goToProducts(){
	$('.main-content-container').css('left','-300vw');
	$('#products-link').addClass('sidebar-link-active');
	$('#captions-link').removeClass('sidebar-link-active');
	$('#dashboard-link').removeClass('sidebar-link-active');
	$('#autopilot-link').removeClass('sidebar-link-active');
	$('.sidebar-link-active').removeClass('hover-active-menu');
	$('.sidebar-link').removeClass('hover-active-menu');

	$("#buffer-help-link").css('display','none');
	$("#autopilot-help-link").css('display','none');
	$("#captions-help-link").css('display','none');
	$("#products-help-link").css('display','block');
	$("#help-back-link").css('display','none');

	$('#help-slide').removeClass("help-slide-animate");

	$(".preview-container").removeClass("main-container-slide-left");
	$(".main-content-container").css('top','0px');
	$(".main_container_clearfix").removeClass("slide-left");

	$("#buffer-help-back-link").css('display','none');
	$("#autopilot-help-back-link").css('display','none');
	$("#captions-help-back-link").css('display','none');
	$("#products-help-back-link").css('display','none');
}

function goToBufferHelp() {
	 $("#buffer-help-link").css('display','none');
	 $("#buffer-help-back-link").css('display','block');
	 $('#products-link').removeClass('sidebar-link-active');
	 $('#captions-link').removeClass('sidebar-link-active');
	 $('#dashboard-link').removeClass('sidebar-link-active');
	 $('#autopilot-link').removeClass('sidebar-link-active');
	 $('.sidebar-link').removeClass('hover-active-menu');
	$('#help-slide').addClass("help-slide-animate");
	$(".preview-container").addClass("main-container-slide-left");
	$(".main_container_clearfix").addClass("slide-left");
	$(".main-content-container").css('top','100vh');

};

function goToBufferHelpBack(){
		 $("#buffer-help-back-link").css('display','none');
		 $("#buffer-help-link").css('display','block');
		 $('#dashboard-link').addClass('sidebar-link-active');
		$('#help-slide').removeClass("help-slide-animate");

		$(".preview-container").removeClass("main-container-slide-left");
		$(".main-content-container").css('top','0px');
		$(".main_container_clearfix").removeClass("slide-left");
};

function goToAutopilotHelp() {
	 $("#autopilot-help-link").css('display','none');
	 $("#autopilot-help-back-link").css('display','block');
	 $('#products-link').removeClass('sidebar-link-active');
	 $('#captions-link').removeClass('sidebar-link-active');
	 $('#dashboard-link').removeClass('sidebar-link-active');
	 $('#autopilot-link').removeClass('sidebar-link-active');
	 $('.sidebar-link').removeClass('hover-active-menu');
	$('#help-slide').addClass("help-slide-animate");
	$(".preview-container").addClass("main-container-slide-left");
	$(".main_container_clearfix").addClass("slide-left");
	$(".main-content-container").css('top','100vh');

};

function goToAutopilotHelpBack(){
		 $("#autopilot-help-back-link").css('display','none');
		 $("#autopilot-help-link").css('display','block');
		 $('#autopilot-link').addClass('sidebar-link-active');
		$('#help-slide').removeClass("help-slide-animate");

		$(".preview-container").removeClass("main-container-slide-left");
		$(".main-content-container").css('top','0px');
		$(".main_container_clearfix").removeClass("slide-left");
};

function goToCaptionsHelp() {
	 $("#captions-help-link").css('display','none');
	 $("#captions-help-back-link").css('display','block');
	 $('#products-link').removeClass('sidebar-link-active');
	 $('#captions-link').removeClass('sidebar-link-active');
	 $('#dashboard-link').removeClass('sidebar-link-active');
	 $('#autopilot-link').removeClass('sidebar-link-active');
	 $('.sidebar-link').removeClass('hover-active-menu');
	$('#help-slide').addClass("help-slide-animate");
	$(".preview-container").addClass("main-container-slide-left");
	$(".main_container_clearfix").addClass("slide-left");
	$(".main-content-container").css('top','100vh');

};

function goToCaptionsHelpBack(){
		 $("#captions-help-back-link").css('display','none');
		 $("#captions-help-link").css('display','block');
		 $('#captions-link').addClass('sidebar-link-active');
		$('#help-slide').removeClass("help-slide-animate");

		$(".preview-container").removeClass("main-container-slide-left");
		$(".main-content-container").css('top','0px');
		$(".main_container_clearfix").removeClass("slide-left");
};

function goToProductsHelp() {
	 $("#products-help-link").css('display','none');
	 $("#products-help-back-link").css('display','block');
	//  $('#products-link').removeClass('sidebar-link-active');
	//  $('#captions-link').removeClass('sidebar-link-active');
	//  $('#dashboard-link').removeClass('sidebar-link-active');
	//  $('#autopilot-link').removeClass('sidebar-link-active');
	 $('.sidebar-link').removeClass('hover-active-menu');
	$('#help-slide').addClass("help-slide-animate");
	$(".preview-container").addClass("main-container-slide-left");
	$(".main_container_clearfix").addClass("slide-left");
	$(".main-content-container").css('top','100vh');

	//  hide menu
	$('#captions-link').css('display','none');
	$('#dashboard-link').css('display','none');
	$('#autopilot-link').css('display','none');
	$('#products-link').css('display','none');

};

function goToProductsHelpBack(){
		 $("#products-help-back-link").css('display','none');
		 $("#products-help-link").css('display','block');
		//  $('#products-link').addClass('sidebar-link-active');
		$('#help-slide').removeClass("help-slide-animate");

		$(".preview-container").removeClass("main-container-slide-left");
		$(".main-content-container").css('top','0px');
		$(".main_container_clearfix").removeClass("slide-left");

		//  show menu
		$('#products-link').css('display','block');
		$('#captions-link').css('display','block');
		$('#dashboard-link').css('display','block');
		$('#autopilot-link').css('display','block');
};

// function goToPreviewBack(){
// 		 $("#products-help-back-link").css('display','none');
// 		 $("#products-help-link").css('display','block');
// 		 $('#products-link').addClass('sidebar-link-active');
// 		$('#help-slide').removeClass("help-slide-animate");
//
// 		$(".preview-container").removeClass("main-container-slide-left");
// 		$(".main-content-container").css('top','0px');
// 		$(".main_container_clearfix").removeClass("slide-left");
// };


$(document).ready(function(){

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

	//  Menu

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

	function menuReset() {
		// Getting Started Reset
			// $('#gs-dropdown').slideUp("slow");
			$('#gs-trigger').removeClass('menu-container-active');
			$('#gs-help-arrow-icon').removeClass('arrow-rotate');
		// Share Reset
			$('#share-trigger').removeClass('menu-container-active');
			$('#share-help-arrow-icon').removeClass('arrow-rotate');
		//  Captions Reset
			$('#captions-trigger').removeClass('menu-container-active');
			$('#captions-help-arrow-icon').removeClass('arrow-rotate');
	}

	function formFocusReset() {
			$('.form-help').removeClass('form-focus');
	}

	function formFocus() {
			$('.form-help').addClass('form-focus');
	}

	function SubMenuReset() {
		$('.sub-menu').removeClass('sub-menu-active');
	}

	function helpSectionReset() {
		$('.form-help').removeClass('form-active');
	}

//  Getting Started Section

	 $('#gs-trigger').click( function() {
		 menuReset();
		// Show / Hide Getting Started Dropdown
		 $('#gs-dropdown').slideDown("slow");
		 // Show / Hide Getting Started Container
		$('#gs-help-container').slideDown("slow");
		$('#gs-trigger').addClass('menu-container-active');
		$('#gs-help-arrow-icon').addClass('arrow-rotate');
		//  Dropdown Reset
		$('#share-dropdown').slideUp("slow");
		$('#share-help-container').slideUp("slow");
		$('#captions-dropdown').slideUp("slow");
  	      	$('#captions-help-container').slideUp("slow");
		formFocusReset();
	});

	//  Share Section Menu Trigger

          $('#share-trigger').click( function() {
		  menuReset();
 		// Show / Hide Getting Started Dropdown
 		 $('#share-dropdown').slideDown("slow");
 		 // Show / Hide Getting Started Container
 		$('#share-help-container').slideDown("slow");
 		$('#share-trigger').addClass('menu-container-active');
		$('#share-help-arrow-icon').addClass('arrow-rotate');
		//  Dropdown Reset
		$('#gs-dropdown').slideUp("slow");
		$('#gs-help-container').slideUp("slow");
		$('#captions-dropdown').slideUp("slow");
  	      $('#captions-help-container').slideUp("slow");
		formFocusReset();
          });

	  $('#captions-trigger').click( function() {
		menuReset();
	      // Show / Hide Getting Started Dropdown
	       $('#captions-dropdown').slideDown("slow");
	       // Show / Hide Getting Started Container
	      $('#captions-help-container').slideDown("slow");
	      $('#captions-trigger').addClass('menu-container-active');
	      $('#captions-help-arrow-icon').addClass('arrow-rotate');
	      //  Dropdown Reset
	      $('#gs-dropdown').slideUp("slow");
	      $('#gs-help-container').slideUp("slow");
	      $('#share-dropdown').slideUp("slow");
	      $('#share-help-container').slideUp("slow");
	      formFocusReset();
	  });

	//  Getting Started Sub Menu

	$('#gs-trigger').click( function() {
			SubMenuReset();
			helpSectionReset();
	});

	// Loop Start

	// var i = 0;
	// while (i<=8) {
	// 	var $trigger = '#gs-dropdown > .sub-menu:nth-child(' + i + ')';
	// 	var $trigger2 = '#gs-help-container > .form-help:nth-child(' + i + ')';
	// 	$($trigger).click( function() {
	// 			SubMenuReset();
	// 			$($trigger).addClass('sub-menu-active');
	// 			helpSectionReset();
	// 			$($trigger2).addClass('form-active');
	// 			formFocus();
	// 			$($trigger2).removeClass('form-focus');
	// 			var $container = $('.help-content-overflow'),
	// 			    $scrollTo = $($trigger2 + ' > .anchor');
	// 			$container.animate({
	// 			    scrollTop: $scrollTo.offset().top - $container.offset().top + $container.scrollTop()
	// 			});
	// 	});
	//
	// 	$($trigger2).click( function() {
	// 			SubMenuReset();
	// 			$($trigger).toggleClass('sub-menu-active');
	// 			helpSectionReset();
	// 			$($trigger2).toggleClass('form-active');
	// 			formFocus();
	// 			$($trigger2).removeClass('form-focus');
	// 	});
	// 	i++;
	// }

	$('#gs-dropdown > .sub-menu:nth-child(1)').click( function() {
			SubMenuReset();
			$('#gs-dropdown > .sub-menu:nth-child(1)').addClass('sub-menu-active');
			helpSectionReset();
			$('#gs-help-container > .form-help:nth-child(1)').addClass('form-active');
			formFocus();
			$('#gs-help-container > .form-help:nth-child(1)').removeClass('form-focus');
			var $container = $('.help-content-overflow'),
			    $scrollTo = $('#gs-help-container > .form-help:nth-child(1) > .anchor');
			$container.animate({
			    scrollTop: $scrollTo.offset().top - $container.offset().top + $container.scrollTop()
			});
	});

	$('#gs-help-container > .form-help:nth-child(1)').click( function() {
			SubMenuReset();
			$('#gs-dropdown > .sub-menu:nth-child(1)').toggleClass('sub-menu-active');
			helpSectionReset();
			$('#gs-help-container > .form-help:nth-child(1)').toggleClass('form-active');
			formFocus();
			$('#gs-help-container > .form-help:nth-child(1)').removeClass('form-focus');
	});

	$('#gs-dropdown > .sub-menu:nth-child(2)').click( function() {
			SubMenuReset();
			$('#gs-dropdown > .sub-menu:nth-child(2)').addClass('sub-menu-active');
			helpSectionReset();
			$('#gs-help-container > .form-help:nth-child(2)').addClass('form-active');
			formFocus();
			$('#gs-help-container > .form-help:nth-child(2)').removeClass('form-focus');
			var $container = $('.help-content-overflow'),
			    $scrollTo = $('#gs-help-container > .form-help:nth-child(2) > .anchor');
			$container.animate({
			    scrollTop: $scrollTo.offset().top - $container.offset().top + $container.scrollTop()
			});
	});

	$('#gs-help-container > .form-help:nth-child(2)').click( function() {
			SubMenuReset();
			$('#gs-dropdown > .sub-menu:nth-child(2)').toggleClass('sub-menu-active');
			helpSectionReset();
			$('#gs-help-container > .form-help:nth-child(2)').toggleClass('form-active');
			formFocus();
			$('#gs-help-container > .form-help:nth-child(2)').removeClass('form-focus');
	});

	$('#gs-dropdown > .sub-menu:nth-child(3)').click( function() {
			SubMenuReset();
			$('#gs-dropdown > .sub-menu:nth-child(3)').addClass('sub-menu-active');
			helpSectionReset();
			$('#gs-help-container > .form-help:nth-child(3)').addClass('form-active');
			formFocus();
			$('#gs-help-container > .form-help:nth-child(3)').removeClass('form-focus');
			var $container = $('.help-content-overflow'),
			    $scrollTo = $('#gs-help-container > .form-help:nth-child(3) > .anchor');
			$container.animate({
			    scrollTop: $scrollTo.offset().top - $container.offset().top + $container.scrollTop()
			});
	});

	$('#gs-help-container > .form-help:nth-child(3)').click( function() {
			SubMenuReset();
			$('#gs-dropdown > .sub-menu:nth-child(3)').toggleClass('sub-menu-active');
			helpSectionReset();
			$('#gs-help-container > .form-help:nth-child(3)').toggleClass('form-active');
			formFocus();
			$('#gs-help-container > .form-help:nth-child(3)').removeClass('form-focus');
	});

	$('#gs-dropdown > .sub-menu:nth-child(4)').click( function() {
			SubMenuReset();
			$('#gs-dropdown > .sub-menu:nth-child(4)').addClass('sub-menu-active');
			helpSectionReset();
			$('#gs-help-container > .form-help:nth-child(4)').addClass('form-active');
			formFocus();
			$('#gs-help-container > .form-help:nth-child(4)').removeClass('form-focus');
			var $container = $('.help-content-overflow'),
			    $scrollTo = $('#gs-help-container > .form-help:nth-child(4) > .anchor');
			$container.animate({
			    scrollTop: $scrollTo.offset().top - $container.offset().top + $container.scrollTop()
			});
	});

	$('#gs-help-container > .form-help:nth-child(4)').click( function() {
			SubMenuReset();
			$('#gs-dropdown > .sub-menu:nth-child(4)').toggleClass('sub-menu-active');
			helpSectionReset();
			$('#gs-help-container > .form-help:nth-child(4)').toggleClass('form-active');
			formFocus();
			$('#gs-help-container > .form-help:nth-child(4)').removeClass('form-focus');
	});

	$('#gs-dropdown > .sub-menu:nth-child(5)').click( function() {
			SubMenuReset();
			$('#gs-dropdown > .sub-menu:nth-child(5)').addClass('sub-menu-active');
			helpSectionReset();
			$('#gs-help-container > .form-help:nth-child(5)').addClass('form-active');
			formFocus();
			$('#gs-help-container > .form-help:nth-child(5)').removeClass('form-focus');
			var $container = $('.help-content-overflow'),
			    $scrollTo = $('#gs-help-container > .form-help:nth-child(5) > .anchor');
			$container.animate({
			    scrollTop: $scrollTo.offset().top - $container.offset().top + $container.scrollTop()
			});
	});

	$('#gs-help-container > .form-help:nth-child(5)').click( function() {
			SubMenuReset();
			$('#gs-dropdown > .sub-menu:nth-child(5)').toggleClass('sub-menu-active');
			helpSectionReset();
			$('#gs-help-container > .form-help:nth-child(5)').toggleClass('form-active');
			formFocus();
			$('#gs-help-container > .form-help:nth-child(5)').removeClass('form-focus');
	});

	$('#gs-dropdown > .sub-menu:nth-child(6)').click( function() {
			SubMenuReset();
			$('#gs-dropdown > .sub-menu:nth-child(6)').addClass('sub-menu-active');
			helpSectionReset();
			$('#gs-help-container > .form-help:nth-child(6)').addClass('form-active');
			formFocus();
			$('#gs-help-container > .form-help:nth-child(6)').removeClass('form-focus');
			var $container = $('.help-content-overflow'),
			    $scrollTo = $('#gs-help-container > .form-help:nth-child(6) > .anchor');
			$container.animate({
			    scrollTop: $scrollTo.offset().top - $container.offset().top + $container.scrollTop()
			});
	});

	$('#gs-help-container > .form-help:nth-child(6)').click( function() {
			SubMenuReset();
			$('#gs-dropdown > .sub-menu:nth-child(6)').toggleClass('sub-menu-active');
			helpSectionReset();
			$('#gs-help-container > .form-help:nth-child(6)').toggleClass('form-active');
			formFocus();
			$('#gs-help-container > .form-help:nth-child(6)').removeClass('form-focus');
	});

	$('#gs-dropdown > .sub-menu:nth-child(7)').click( function() {
			SubMenuReset();
			$('#gs-dropdown > .sub-menu:nth-child(7)').addClass('sub-menu-active');
			helpSectionReset();
			$('#gs-help-container > .form-help:nth-child(7)').addClass('form-active');
			formFocus();
			$('#gs-help-container > .form-help:nth-child(7)').removeClass('form-focus');
			var $container = $('.help-content-overflow'),
			    $scrollTo = $('#gs-help-container > .form-help:nth-child(7) > .anchor');
			$container.animate({
			    scrollTop: $scrollTo.offset().top - $container.offset().top + $container.scrollTop()
			});
	});

	$('#gs-help-container > .form-help:nth-child(7)').click( function() {
			SubMenuReset();
			$('#gs-dropdown > .sub-menu:nth-child(7)').toggleClass('sub-menu-active');
			helpSectionReset();
			$('#gs-help-container > .form-help:nth-child(7)').toggleClass('form-active');
			formFocus();
			$('#gs-help-container > .form-help:nth-child(7)').removeClass('form-focus');
	});

	$('#gs-dropdown > .sub-menu:nth-child(8)').click( function() {
			SubMenuReset();
			$('#gs-dropdown > .sub-menu:nth-child(8)').addClass('sub-menu-active');
			helpSectionReset();
			$('#gs-help-container > .form-help:nth-child(8)').addClass('form-active');
			formFocus();
			$('#gs-help-container > .form-help:nth-child(8)').removeClass('form-focus');
			var $container = $('.help-content-overflow'),
			    $scrollTo = $('#gs-help-container > .form-help:nth-child(8) > .anchor');
			$container.animate({
			    scrollTop: $scrollTo.offset().top - $container.offset().top + $container.scrollTop()
			});
	});

	$('#gs-help-container > .form-help:nth-child(8)').click( function() {
			SubMenuReset();
			$('#gs-dropdown > .sub-menu:nth-child(8)').toggleClass('sub-menu-active');
			helpSectionReset();
			$('#gs-help-container > .form-help:nth-child(8)').toggleClass('form-active');
			formFocus();
			$('#gs-help-container > .form-help:nth-child(8)').removeClass('form-focus');
	});

	  //  Getting Started Sub Menu

  	$('#share-trigger').click( function() {
		SubMenuReset();
		helpSectionReset();
  	});

  	$('#share-dropdown > .sub-menu:nth-child(1)').click( function() {
		SubMenuReset();
		$('#share-dropdown > .sub-menu:nth-child(1)').toggleClass('sub-menu-active');
		helpSectionReset();
		$('#share-help-container > .form-help:nth-child(1)').toggleClass('form-active');
		formFocus();
		$('#share-help-container > .form-help:nth-child(1)').removeClass('form-focus');
		var $container = $('.help-content-overflow'),
		    $scrollTo = $('#share-help-container > .form-help:nth-child(1) > .anchor');
		$container.animate({
		    scrollTop: $scrollTo.offset().top - $container.offset().top + $container.scrollTop()
		});
  	});

	$('#share-help-container > .form-help:nth-child(1)').click( function() {
			SubMenuReset();
			$('#share-dropdown > .sub-menu:nth-child(1)').toggleClass('sub-menu-active');
			helpSectionReset();
			$('#share-help-container > .form-help:nth-child(1)').toggleClass('form-active');
			formFocus();
			$('#share-help-container > .form-help:nth-child(1)').removeClass('form-focus');
	});

  	$('#share-dropdown > .sub-menu:nth-child(2)').click( function() {
		SubMenuReset();
		$('#share-dropdown > .sub-menu:nth-child(2)').toggleClass('sub-menu-active');
		helpSectionReset();
		$('#share-help-container > .form-help:nth-child(2)').toggleClass('form-active');
		formFocus();
		$('#share-help-container > .form-help:nth-child(2)').removeClass('form-focus');
		var $container = $('.help-content-overflow'),
		    $scrollTo = $('#share-help-container > .form-help:nth-child(2) > .anchor');
		$container.animate({
		    scrollTop: $scrollTo.offset().top - $container.offset().top + $container.scrollTop()
		});
  	});

	$('#share-help-container > .form-help:nth-child(2)').click( function() {
			SubMenuReset();
			$('#share-dropdown > .sub-menu:nth-child(2)').toggleClass('sub-menu-active');
			helpSectionReset();
			$('#share-help-container > .form-help:nth-child(2)').toggleClass('form-active');
			formFocus();
			$('#share-help-container > .form-help:nth-child(2)').removeClass('form-focus');
	});

  	$('#share-dropdown > .sub-menu:nth-child(3)').click( function() {
		SubMenuReset();
 		$('#share-dropdown > .sub-menu:nth-child(3)').toggleClass('sub-menu-active');
 		helpSectionReset();
 		$('#share-help-container > .form-help:nth-child(3)').toggleClass('form-active');
		formFocus();
		$('#share-help-container > .form-help:nth-child(3)').removeClass('form-focus');
		var $container = $('.help-content-overflow'),
		    $scrollTo = $('#share-help-container > .form-help:nth-child(3) > .anchor');
		$container.animate({
		    scrollTop: $scrollTo.offset().top - $container.offset().top + $container.scrollTop()
		});
  	});


	$('#share-help-container > .form-help:nth-child(3)').click( function() {
			SubMenuReset();
			$('#share-dropdown > .sub-menu:nth-child(3)').toggleClass('sub-menu-active');
			helpSectionReset();
			$('#share-help-container > .form-help:nth-child(3)').toggleClass('form-active');
			formFocus();
			$('#share-help-container > .form-help:nth-child(3)').removeClass('form-focus');
	});

  	$('#share-dropdown > .sub-menu:nth-child(4)').click( function() {
		SubMenuReset();
		$('#share-dropdown > .sub-menu:nth-child(4)').toggleClass('sub-menu-active');
		helpSectionReset();
		$('#share-help-container > .form-help:nth-child(4)').toggleClass('form-active');
		formFocus();
		$('#share-help-container > .form-help:nth-child(4)').removeClass('form-focus');
		var $container = $('.help-content-overflow'),
		    $scrollTo = $('#share-help-container > .form-help:nth-child(4) > .anchor');
		$container.animate({
		    scrollTop: $scrollTo.offset().top - $container.offset().top + $container.scrollTop()
		});
  	});


	$('#share-help-container > .form-help:nth-child(4)').click( function() {
			SubMenuReset();
			$('#share-dropdown > .sub-menu:nth-child(4)').toggleClass('sub-menu-active');
			helpSectionReset();
			$('#share-help-container > .form-help:nth-child(4)').toggleClass('form-active');
			formFocus();
			$('#share-help-container > .form-help:nth-child(4)').removeClass('form-focus');
	});

  	$('#share-dropdown > .sub-menu:nth-child(5)').click( function() {
		SubMenuReset();
		$('#share-dropdown > .sub-menu:nth-child(5)').toggleClass('sub-menu-active');
		helpSectionReset();
		$('#share-help-container > .form-help:nth-child(5)').toggleClass('form-active');
		formFocus();
		$('#share-help-container > .form-help:nth-child(5)').removeClass('form-focus');
		var $container = $('.help-content-overflow'),
		    $scrollTo = $('#share-help-container > .form-help:nth-child(5) > .anchor');
		$container.animate({
		    scrollTop: $scrollTo.offset().top - $container.offset().top + $container.scrollTop()
		});
  	});


	$('#share-help-container > .form-help:nth-child(5)').click( function() {
			SubMenuReset();
			$('#share-dropdown > .sub-menu:nth-child(5)').toggleClass('sub-menu-active');
			helpSectionReset();
			$('#share-help-container > .form-help:nth-child(5)').toggleClass('form-active');
			formFocus();
			$('#share-help-container > .form-help:nth-child(5)').removeClass('form-focus');
	});

  	$('#share-dropdown > .sub-menu:nth-child(6)').click( function() {
		SubMenuReset();
		$('#share-dropdown > .sub-menu:nth-child(6)').toggleClass('sub-menu-active');
		helpSectionReset();
		$('#share-help-container > .form-help:nth-child(6)').toggleClass('form-active');
		formFocus();
		$('#share-help-container > .form-help:nth-child(6)').removeClass('form-focus');
		var $container = $('.help-content-overflow'),
		    $scrollTo = $('#share-help-container > .form-help:nth-child(6) > .anchor');
		$container.animate({
		    scrollTop: $scrollTo.offset().top - $container.offset().top + $container.scrollTop()
		});
  	});


	$('#share-help-container > .form-help:nth-child(6)').click( function() {
			SubMenuReset();
			$('#share-dropdown > .sub-menu:nth-child(6)').toggleClass('sub-menu-active');
			helpSectionReset();
			$('#share-help-container > .form-help:nth-child(6)').toggleClass('form-active');
			formFocus();
			$('#share-help-container > .form-help:nth-child(6)').removeClass('form-focus');
	});

  	$('#share-dropdown > .sub-menu:nth-child(7)').click( function() {
		SubMenuReset();
		$('#share-dropdown > .sub-menu:nth-child(7)').toggleClass('sub-menu-active');
		helpSectionReset();
		$('#share-help-container > .form-help:nth-child(7)').toggleClass('form-active');
		formFocus();
		$('#share-help-container > .form-help:nth-child(7)').removeClass('form-focus');
		var $container = $('.help-content-overflow'),
		    $scrollTo = $('#share-help-container > .form-help:nth-child(7) > .anchor');
		$container.animate({
		    scrollTop: $scrollTo.offset().top - $container.offset().top + $container.scrollTop()
		});
  	});


	$('#share-help-container > .form-help:nth-child(7)').click( function() {
			SubMenuReset();
			$('#share-dropdown > .sub-menu:nth-child(7)').toggleClass('sub-menu-active');
			helpSectionReset();
			$('#share-help-container > .form-help:nth-child(7)').toggleClass('form-active');
			formFocus();
			$('#share-help-container > .form-help:nth-child(7)').removeClass('form-focus');
	});

  	$('#share-dropdown > .sub-menu:nth-child(8)').click( function() {
		SubMenuReset();
		$('#share-dropdown > .sub-menu:nth-child(8)').toggleClass('sub-menu-active');
		helpSectionReset();
		$('#share-help-container > .form-help:nth-child(8)').toggleClass('form-active');
		formFocus();
		$('#share-help-container > .form-help:nth-child(8)').removeClass('form-focus');
		var $container = $('.help-content-overflow'),
		    $scrollTo = $('#share-help-container > .form-help:nth-child(8) > .anchor');
		$container.animate({
		    scrollTop: $scrollTo.offset().top - $container.offset().top + $container.scrollTop()
		});
  	});

	$('#share-help-container > .form-help:nth-child(8)').click( function() {
			SubMenuReset();
			$('#share-dropdown > .sub-menu:nth-child(8)').toggleClass('sub-menu-active');
			helpSectionReset();
			$('#share-help-container > .form-help:nth-child(8)').toggleClass('form-active');
			formFocus();
			$('#share-help-container > .form-help:nth-child(8)').removeClass('form-focus');
	});


	  	$('#captions-trigger').click( function() {
			SubMenuReset();
			helpSectionReset();
	  	});

	  	$('#captions-dropdown > .sub-menu:nth-child(1)').click( function() {
			SubMenuReset();
			$('#captions-dropdown > .sub-menu:nth-child(1)').toggleClass('sub-menu-active');
			helpSectionReset();
			$('#captions-help-container > .form-help:nth-child(1)').toggleClass('form-active');
			formFocus();
			$('#captions-help-container > .form-help:nth-child(1)').removeClass('form-focus');
			var $container = $('.help-content-overflow'),
			    $scrollTo = $('#captions-help-container > .form-help:nth-child(1) > .anchor');
			$container.animate({
			    scrollTop: $scrollTo.offset().top - $container.offset().top + $container.scrollTop()
			});
	  	});

		$('#captions-help-container > .form-help:nth-child(1)').click( function() {
				SubMenuReset();
				$('#captions-dropdown > .sub-menu:nth-child(1)').toggleClass('sub-menu-active');
				helpSectionReset();
				$('#captions-help-container > .form-help:nth-child(1)').toggleClass('form-active');
				formFocus();
				$('#captions-help-container > .form-help:nth-child(1)').removeClass('form-focus');
		});

	  	$('#captions-dropdown > .sub-menu:nth-child(2)').click( function() {
			SubMenuReset();
			$('#captions-dropdown > .sub-menu:nth-child(2)').toggleClass('sub-menu-active');
			helpSectionReset();
			$('#captions-help-container > .form-help:nth-child(2)').toggleClass('form-active');
			formFocus();
			$('#captions-help-container > .form-help:nth-child(2)').removeClass('form-focus');
			var $container = $('.help-content-overflow'),
			    $scrollTo = $('#captions-help-container > .form-help:nth-child(2) > .anchor');
			$container.animate({
			    scrollTop: $scrollTo.offset().top - $container.offset().top + $container.scrollTop()
			});
	  	});

		$('#captions-help-container > .form-help:nth-child(2)').click( function() {
				SubMenuReset();
				$('#captions-dropdown > .sub-menu:nth-child(2)').toggleClass('sub-menu-active');
				helpSectionReset();
				$('#captions-help-container > .form-help:nth-child(2)').toggleClass('form-active');
				formFocus();
				$('#captions-help-container > .form-help:nth-child(2)').removeClass('form-focus');
		});

	  	$('#captions-dropdown > .sub-menu:nth-child(3)').click( function() {
			SubMenuReset();
	 		$('#captions-dropdown > .sub-menu:nth-child(3)').toggleClass('sub-menu-active');
	 		helpSectionReset();
	 		$('#captions-help-container > .form-help:nth-child(3)').toggleClass('form-active');
			formFocus();
			$('#captions-help-container > .form-help:nth-child(3)').removeClass('form-focus');
			var $container = $('.help-content-overflow'),
			    $scrollTo = $('#captions-help-container > .form-help:nth-child(3) > .anchor');
			$container.animate({
			    scrollTop: $scrollTo.offset().top - $container.offset().top + $container.scrollTop()
			});
	  	});


		$('#captions-help-container > .form-help:nth-child(3)').click( function() {
				SubMenuReset();
				$('#captions-dropdown > .sub-menu:nth-child(3)').toggleClass('sub-menu-active');
				helpSectionReset();
				$('#captions-help-container > .form-help:nth-child(3)').toggleClass('form-active');
				formFocus();
				$('#captions-help-container > .form-help:nth-child(3)').removeClass('form-focus');
		});

	  	$('#captions-dropdown > .sub-menu:nth-child(4)').click( function() {
			SubMenuReset();
			$('#captions-dropdown > .sub-menu:nth-child(4)').toggleClass('sub-menu-active');
			helpSectionReset();
			$('#captions-help-container > .form-help:nth-child(4)').toggleClass('form-active');
			formFocus();
			$('#captions-help-container > .form-help:nth-child(4)').removeClass('form-focus');
			var $container = $('.help-content-overflow'),
			    $scrollTo = $('#captions-help-container > .form-help:nth-child(4) > .anchor');
			$container.animate({
			    scrollTop: $scrollTo.offset().top - $container.offset().top + $container.scrollTop()
			});
	  	});


		$('#captions-help-container > .form-help:nth-child(4)').click( function() {
				SubMenuReset();
				$('#captions-dropdown > .sub-menu:nth-child(4)').toggleClass('sub-menu-active');
				helpSectionReset();
				$('#captions-help-container > .form-help:nth-child(4)').toggleClass('form-active');
				formFocus();
				$('#captions-help-container > .form-help:nth-child(4)').removeClass('form-focus');
		});

	  	$('#captions-dropdown > .sub-menu:nth-child(5)').click( function() {
			SubMenuReset();
			$('#captions-dropdown > .sub-menu:nth-child(5)').toggleClass('sub-menu-active');
			helpSectionReset();
			$('#captions-help-container > .form-help:nth-child(5)').toggleClass('form-active');
			formFocus();
			$('#captions-help-container > .form-help:nth-child(5)').removeClass('form-focus');
			var $container = $('.help-content-overflow'),
			    $scrollTo = $('#captions-help-container > .form-help:nth-child(5) > .anchor');
			$container.animate({
			    scrollTop: $scrollTo.offset().top - $container.offset().top + $container.scrollTop()
			});
	  	});


		$('#captions-help-container > .form-help:nth-child(5)').click( function() {
				SubMenuReset();
				$('#captions-dropdown > .sub-menu:nth-child(5)').toggleClass('sub-menu-active');
				helpSectionReset();
				$('#captions-help-container > .form-help:nth-child(5)').toggleClass('form-active');
				formFocus();
				$('#captions-help-container > .form-help:nth-child(5)').removeClass('form-focus');
		});

	  	$('#captions-dropdown > .sub-menu:nth-child(6)').click( function() {
			SubMenuReset();
			$('#captions-dropdown > .sub-menu:nth-child(6)').toggleClass('sub-menu-active');
			helpSectionReset();
			$('#captions-help-container > .form-help:nth-child(6)').toggleClass('form-active');
			formFocus();
			$('#captions-help-container > .form-help:nth-child(6)').removeClass('form-focus');
			var $container = $('.help-content-overflow'),
			    $scrollTo = $('#captions-help-container > .form-help:nth-child(6) > .anchor');
			$container.animate({
			    scrollTop: $scrollTo.offset().top - $container.offset().top + $container.scrollTop()
			});
	  	});


		$('#captions-help-container > .form-help:nth-child(6)').click( function() {
				SubMenuReset();
				$('#captions-dropdown > .sub-menu:nth-child(6)').toggleClass('sub-menu-active');
				helpSectionReset();
				$('#captions-help-container > .form-help:nth-child(6)').toggleClass('form-active');
				formFocus();
				$('#captions-help-container > .form-help:nth-child(6)').removeClass('form-focus');
		});

	  	$('#captions-dropdown > .sub-menu:nth-child(7)').click( function() {
			SubMenuReset();
			$('#captions-dropdown > .sub-menu:nth-child(7)').toggleClass('sub-menu-active');
			helpSectionReset();
			$('#captions-help-container > .form-help:nth-child(7)').toggleClass('form-active');
			formFocus();
			$('#captions-help-container > .form-help:nth-child(7)').removeClass('form-focus');
			var $container = $('.help-content-overflow'),
			    $scrollTo = $('#captions-help-container > .form-help:nth-child(7) > .anchor');
			$container.animate({
			    scrollTop: $scrollTo.offset().top - $container.offset().top + $container.scrollTop()
			});
	  	});


		$('#captions-help-container > .form-help:nth-child(7)').click( function() {
				SubMenuReset();
				$('#captions-dropdown > .sub-menu:nth-child(7)').toggleClass('sub-menu-active');
				helpSectionReset();
				$('#captions-help-container > .form-help:nth-child(7)').toggleClass('form-active');
				formFocus();
				$('#captions-help-container > .form-help:nth-child(7)').removeClass('form-focus');
		});

	  	$('#captions-dropdown > .sub-menu:nth-child(8)').click( function() {
			SubMenuReset();
			$('#captions-dropdown > .sub-menu:nth-child(8)').toggleClass('sub-menu-active');
			helpSectionReset();
			$('#captions-help-container > .form-help:nth-child(8)').toggleClass('form-active');
			formFocus();
			$('#captions-help-container > .form-help:nth-child(8)').removeClass('form-focus');
			var $container = $('.help-content-overflow'),
			    $scrollTo = $('#captions-help-container > .form-help:nth-child(8) > .anchor');
			$container.animate({
			    scrollTop: $scrollTo.offset().top - $container.offset().top + $container.scrollTop()
			});
	  	});

		$('#captions-help-container > .form-help:nth-child(8)').click( function() {
				SubMenuReset();
				$('#captions-dropdown > .sub-menu:nth-child(8)').toggleClass('sub-menu-active');
				helpSectionReset();
				$('#captions-help-container > .form-help:nth-child(8)').toggleClass('form-active');
				formFocus();
				$('#captions-help-container > .form-help:nth-child(8)').removeClass('form-focus');
		});
});
