// Help Slide
$(document).ready(function(){

	function loading() {
		$(".main-content-container").css('top','0px');
		$(".sidebar_nav").css('left','0px');
	}

	$('.sidebar-nav-container').mouseenter( function menuHover() {
		$('.sidebar-link-active').addClass('hover-active-menu');
	});

	$('.sidebar-nav-container').mouseout( function menuHover() {
		$('.sidebar-link-active').removeClass('hover-active-menu');
	});

	$('.sidebar-nav-span').mouseenter( function menuHover() {
		$('.sidebar-link-active').addClass('hover-active-menu');
	});

	$('.sidebar-nav-span').mouseout( function menuHover() {
		$('.sidebar-link-active').addClass('hover-active-menu');
	});

	$('.sidebar-icon').mouseenter( function menuHover() {
		$('.sidebar-link-active').addClass('hover-active-menu');
	});

	$('.sidebar-icon').mouseout( function menuHover() {
		$('.sidebar-link-active').addClass('hover-active-menu');
	});


		$('.sidebar-link').mouseenter( function menuHover() {
			$('.sidebar-link-active').addClass('hover-active-menu');
		});

		$('.sidebar-link').mouseout( function menuHover() {
			$('.sidebar-link-active').removeClass('hover-active-menu');
		});

	// $('#dashboard-link').mouseenter( function menuHover() {
	// 	$('.sidebar-link-active').addClass('hover-active-menu');
	// });
	//
	// $('#dashboard-link').mouseout( function menuHover() {
	// 	$('.sidebar-link-active').removeClass('hover-active-menu');
	// });
	//
	// $('#autopilot-link').mouseenter( function menuHover() {
	// 	$('.sidebar-link-active').addClass('hover-active-menu');
	// });
	//
	// $('#autopilot-link').mouseout( function menuHover() {
	// 	$('.sidebar-link-active').removeClass('hover-active-menu');
	// });
	//
	// $('#captions-link').mouseenter( function menuHover() {
	// 	$('.sidebar-link-active').addClass('hover-active-menu');
	// });
	//
	// $('#captions-link').mouseout( function menuHover() {
	// 	$('.sidebar-link-active').removeClass('hover-active-menu');
	// });
	//
	// $('#share-link').mouseenter( function menuHover() {
	// 	$('.sidebar-link-active').addClass('hover-active-menu');
	// });
	//
	// $('#share-link').mouseout( function menuHover() {
	// 	$('.sidebar-link-active').removeClass('hover-active-menu');
	// });

	// Step 1 | Choose Account - Show / Hide
	$('.account-show-hide-button').click(function() {
		// Show / Hide Conditions Container
		$('.account-show-hide').slideToggle("slow");
		// Rotate Arrow 180 Degree / Click
		$('#account-arrow-icon').toggleClass('fa-chevron-up fa-chevron-down');
	});

	// Step 2 | Choose Caption - Show / Hide
	$('.caption-show-hide-button').click(function() {
		// Show / Hide Conditions Container
		$('.caption-show-hide').slideToggle("slow");
		// Rotate Arrow 180 Degree / Click
		$('#caption-arrow-icon').toggleClass('fa-chevron-up fa-chevron-down');
	});

	// Step 3 | Add Image - Show / Hide
	$('.image-show-hide-button').click(function() {
		// Show / Hide Conditions Container
		$('.image-show-hide').slideToggle("slow");
		// Rotate Arrow 180 Degree / Click
		$('#image-arrow-icon').toggleClass('fa-chevron-up fa-chevron-down');
	});

	// Step 4 | Share - Show / Hide
	$('.share-show-hide-button').click(function() {
		// Show / Hide Conditions Container
		$('.share-show-hide').slideToggle("slow");
		// Rotate Arrow 180 Degree / Click
		$('#share-arrow-icon').toggleClass('fa-chevron-up fa-chevron-down');
	});

	// Next Step 1 - 2 | Show / Hide
	$('#step2button').click(function() {
		// Show / Hide Conditions Container
		$('.caption-show-hide').slideToggle("slow");
		// Rotate Arrow 180 Degree / Click
		$('#caption-arrow-icon').toggleClass('fa-chevron-up fa-chevron-down');
		// Show / Hide Conditions Container
		$('.account-show-hide').slideToggle("slow");
		// Rotate Arrow 180 Degree / Click
		$('#account-arrow-icon').toggleClass('fa-chevron-up fa-chevron-down');
	});

	// Next Step 2 - 3 | Show / Hide
	$('#step3button').click(function() {
		// Show / Hide Conditions Container
		$('.image-show-hide').slideToggle("slow");
		// Rotate Arrow 180 Degree / Click
		$('#image-arrow-icon').toggleClass('fa-chevron-up fa-chevron-down');
		// Show / Hide Conditions Container
		$('.caption-show-hide').slideToggle("slow");
		// Rotate Arrow 180 Degree / Click
		$('#caption-arrow-icon').toggleClass('fa-chevron-up fa-chevron-down');
	});

	// Next Step 3 - 4 | Show / Hide
	$('#step4button').click(function() {
		// Show / Hide Conditions Container
		$('.image-show-hide').slideToggle("slow");
		// Rotate Arrow 180 Degree / Click
		$('#image-arrow-icon').toggleClass('fa-chevron-up fa-chevron-down');
		// Show / Hide Conditions Container
		$('.share-show-hide').slideToggle("slow");
		// Rotate Arrow 180 Degree / Click
		$('#share-arrow-icon').toggleClass('fa-chevron-up fa-chevron-down');
	});

	// Prev Step 1 - 2 | Show / Hide
	$('#step2prevbutton').click(function() {
		// Show / Hide Conditions Container
		$('.caption-show-hide').slideToggle("slow");
		// Rotate Arrow 180 Degree / Click
		$('#caption-arrow-icon').toggleClass('fa-chevron-up fa-chevron-down');
		// Show / Hide Conditions Container
		$('.account-show-hide').slideToggle("slow");
		// Rotate Arrow 180 Degree / Click
		$('#account-arrow-icon').toggleClass('fa-chevron-up fa-chevron-down');
	});

	// Prev Step 2 - 1 | Show / Hide
	$('#step3prevbutton').click(function() {
		// Show / Hide Conditions Container
		$('.image-show-hide').slideToggle("slow");
		// Rotate Arrow 180 Degree / Click
		$('#image-arrow-icon').toggleClass('fa-chevron-up fa-chevron-down');
		// Show / Hide Conditions Container
		$('.caption-show-hide').slideToggle("slow");
		// Rotate Arrow 180 Degree / Click
		$('#caption-arrow-icon').toggleClass('fa-chevron-up fa-chevron-down');
	});


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

  $('#help-button').click(function() {
      if ($("#right-slide-left").hasClass('right-slide-left-animate')) {

          $('#right-slide-left').removeClass("right-slide-left-animate");
	  $(".sidebar_nav").removeClass("main-container-slide-left");
	  $(".preview-container").removeClass("main-container-slide-left");
	  $(".main-content-container").css('top','0px');
	  $(".main_container_clearfix").removeClass("slide-left");
          $('.sidebar-nav-container-header').removeClass("sidebar-nav-container-header-active");
        //   $('.help-header-link').css("color", "#666");
	  $('.help-header-link').removeClass('help-header-link-active');
	  $("#help-title").html('<i  class="fa fa-info sidebar-icon" aria-hidden="true"></i><br> Help');
      } else {

          $('#right-slide-left').addClass("right-slide-left-animate");
	  $(".preview-container").addClass("main-container-slide-left");
	  $(".main_container_clearfix").addClass("slide-left");
	  $(".main-content-container").css('top','100vh');
	  $(".sidebar_nav").addClass("main-container-slide-left");
          $('.sidebar-nav-container-header').addClass("sidebar-nav-container-header-active");
        //   $('.help-header-link').css("color", "white");
	  $('.help-header-link').addClass('help-header-link-active');
	  $("#help-title").html('<i class="fa fa-times sidebar-icon" aria-hidden="true"></i><br> Back');
      };
  });

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
