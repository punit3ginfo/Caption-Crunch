// Help Slide
$(document).ready(function(){
  $('#help-button').click(function() {
      if ($("#right-slide-left").hasClass('right-slide-left-animate')) {
          $('#right-slide-left').removeClass("right-slide-left-animate");
	  $(".sidebar_nav").removeClass("main-container-slide-left");
	  $(".preview-container").removeClass("main-container-slide-left");
	  $(".main_container_clearfix").removeClass("slide-left");
          $('.sidebar-nav-container-header').removeClass("sidebar-nav-container-header-active");
          $('.help-header-link').css("color", "#666");
	  $("#help-title").html('<i style="font-size: 20px;" class="fa fa-info" aria-hidden="true"></i><br> Help');
      } else {
          $('#right-slide-left').addClass("right-slide-left-animate");
	  $(".preview-container").addClass("main-container-slide-left");
	  $(".main_container_clearfix").addClass("slide-left");
	  $(".sidebar_nav").addClass("main-container-slide-left");
          $('.sidebar-nav-container-header').addClass("sidebar-nav-container-header-active");
          $('.help-header-link').css("color", "white");
	  $("#help-title").html('<i style="font-size: 20px;" class="fa fa-times" aria-hidden="true"></i><br> Back');
      };
  });

//  Getting Started Section

	 $('#getting-started-trigger').click( function() {
		 if ($("#getting-started-icon").hasClass('arrow-rotate')) {

			$('#getting-started-icon').addClass('fa-star');

		  	$('#getting-started-trigger').removeClass('menu-container-active');
			$('#getting-started-icon').removeClass('fa-chevron-down');
			$('#getting-started-icon').removeClass('arrow-rotate');

			$('#getting-started-dropdown').slideUp("slow");
			// Show / Hide Getting StartedContainer
			$('#gs-help-container').slideToggle("slow");
			// Rotate Arrow 180 Degree / Click
			$('#gs-help-arrow-icon').toggleClass('fa-chevron-up fa-chevron-down');

		} else {

			$('#getting-started-icon').removeClass('fa-star');
			$('#share-icon').removeClass('menu-container-active');

			$('#getting-started-trigger').addClass('menu-container-active');
			$('#getting-started-icon').addClass('fa-chevron-down');
			$('#getting-started-icon').addClass('arrow-rotate');

			$('#getting-started-dropdown').slideDown("slow");

		// Share Reset
			$('#share-dropdown').slideUp("slow");

			$('#share-icon').addClass('fa-bullhorn');

			$('#share-trigger').removeClass('menu-container-active');
			$('#share-icon').removeClass('fa-chevron-down');
			$('#share-icon').removeClass('arrow-rotate');
			// Show / Hide Getting StartedContainer
			$('#gs-help-container').slideToggle("slow");
			// Rotate Arrow 180 Degree / Click
			$('#gs-help-arrow-icon').toggleClass('fa-chevron-up fa-chevron-down');

		}
	});

	//  Getting Started Sub Menu

	function SubMenuReset() {
		$('.sub-menu').removeClass('sub-menu-active');
	}

	function helpSectionReset() {
		$('.form-help').removeClass('form-active');
	}

	$('#getting-started-trigger, #gs-help-trigger').click( function() {
			SubMenuReset();
			helpSectionReset();
	});

	$('#getting-started-dropdown > .sub-menu:nth-child(1)').click( function() {
			SubMenuReset();
			$('#getting-started-dropdown > .sub-menu:nth-child(1)').addClass('sub-menu-active');
			helpSectionReset();
			$('#gs-help-container > .form-help:nth-child(1)').addClass('form-active');
	});

	$('#gs-help-container > .form-help:nth-child(1)').click( function() {
			SubMenuReset();
			$('#getting-started-dropdown > .sub-menu:nth-child(1)').toggleClass('sub-menu-active');
			helpSectionReset();
			$('#gs-help-container > .form-help:nth-child(1)').toggleClass('form-active');
	});

	$('#getting-started-dropdown > .sub-menu:nth-child(2)').click( function() {
			SubMenuReset();
			$('#getting-started-dropdown > .sub-menu:nth-child(2)').addClass('sub-menu-active');
			helpSectionReset();
			$('#gs-help-container > .form-help:nth-child(2)').addClass('form-active');
	});

	$('#gs-help-container > .form-help:nth-child(2)').click( function() {
			SubMenuReset();
			$('#getting-started-dropdown > .sub-menu:nth-child(2)').toggleClass('sub-menu-active');
			helpSectionReset();
			$('#gs-help-container > .form-help:nth-child(2)').toggleClass('form-active');
	});

	$('#getting-started-dropdown > .sub-menu:nth-child(3)').click( function() {
			SubMenuReset();
			$('#getting-started-dropdown > .sub-menu:nth-child(3)').addClass('sub-menu-active');
			helpSectionReset();
			$('#gs-help-container > .form-help:nth-child(3)').addClass('form-active');
	});

	$('#getting-started-dropdown > .sub-menu:nth-child(4)').click( function() {
			SubMenuReset();
			$('#getting-started-dropdown > .sub-menu:nth-child(4)').addClass('sub-menu-active');
			helpSectionReset();
			$('#gs-help-container > .form-help:nth-child(4)').addClass('form-active');
	});

	$('#getting-started-dropdown > .sub-menu:nth-child(5)').click( function() {
			SubMenuReset();
			$('#getting-started-dropdown > .sub-menu:nth-child(5)').addClass('sub-menu-active');
			helpSectionReset();
			$('#gs-help-container > .form-help:nth-child(5)').addClass('form-active');
	});

	$('#getting-started-dropdown > .sub-menu:nth-child(6)').click( function() {
			SubMenuReset();
			$('#getting-started-dropdown > .sub-menu:nth-child(6)').addClass('sub-menu-active');
			helpSectionReset();
			$('#gs-help-container > .form-help:nth-child(6)').addClass('form-active');
	});

	$('#getting-started-dropdown > .sub-menu:nth-child(7)').click( function() {
			SubMenuReset();
			$('#getting-started-dropdown > .sub-menu:nth-child(7)').addClass('sub-menu-active');
			helpSectionReset();
			$('#gs-help-container > .form-help:nth-child(7)').addClass('form-active');
	});

	$('#getting-started-dropdown > .sub-menu:nth-child(8)').click( function() {
			SubMenuReset();
			$('#getting-started-dropdown > .sub-menu:nth-child(8)').addClass('sub-menu-active');
			helpSectionReset();
			$('#gs-help-container > .form-help:nth-child(8)').addClass('form-active');
	});

	//  Getting Started  Help Content
		$('#gs-help-trigger').click(function() {
			// Show / Hide Getting StartedContainer
			$('#gs-help-container').slideToggle("slow");
			// Rotate Arrow 180 Degree / Click
			$('#gs-help-arrow-icon').toggleClass('arrow-rotate');

			$('#getting-started-icon').toggleClass('fa-star');
			$('#share-icon').removeClass('menu-container-active');

			$('#getting-started-trigger').toggleClass('menu-container-active');
			$('#getting-started-icon').toggleClass('fa-chevron-down');
			$('#getting-started-icon').toggleClass('arrow-rotate');

			$('#getting-started-dropdown').slideToggle("slow");
		});

	//  Share Section

          $('#share-trigger').click( function() {
		  if ($("#share-icon").hasClass('arrow-rotate')) {

			$('#share-icon').addClass('fa-bullhorn');

			$('#share-trigger').removeClass('menu-container-active');
			$('#share-icon').removeClass('fa-chevron-down');
			$('#share-icon').removeClass('arrow-rotate');

			$('#share-dropdown').slideUp("slow");

	      	} else {

			$('#share-icon').removeClass('fa-bullhorn');
			$('#getting-started-trigger').removeClass('menu-container-active');

			$('#share-trigger').addClass('menu-container-active');
			$('#share-icon').addClass('fa-chevron-down');
			$('#share-icon').addClass('arrow-rotate');

			$('#share-dropdown').slideDown("slow");

			// Getting Started Reset
			$('#getting-started-dropdown').slideUp("slow");

			$('#getting-started-icon').addClass('fa-star');

		  	$('#getting-started-trigger').removeClass('menu-container-active');
			$('#getting-started-icon').removeClass('fa-chevron-down');
			$('#getting-started-icon').removeClass('arrow-rotate');

		}
          });

	  //  Getting Started Sub Menu

  	$('#share-trigger').click( function() {
  			$('.sub-menu:nth-child(1)').removeClass('sub-menu-active');
  			$('.sub-menu:nth-child(2)').removeClass('sub-menu-active');
  			$('.sub-menu:nth-child(3)').removeClass('sub-menu-active');
  			$('.sub-menu:nth-child(4)').removeClass('sub-menu-active');
  			$('.sub-menu:nth-child(5)').removeClass('sub-menu-active');
  			$('.sub-menu:nth-child(6)').removeClass('sub-menu-active');
  			$('.sub-menu:nth-child(7)').removeClass('sub-menu-active');
  			$('.sub-menu:nth-child(8)').removeClass('sub-menu-active');
  	});

  	$('  #share-dropdown > .sub-menu:nth-child(1)').click( function() {
  			$('#share-dropdown > .sub-menu:nth-child(1)').addClass('sub-menu-active');
  			$('#share-dropdown > .sub-menu:nth-child(2)').removeClass('sub-menu-active');
  			$('#share-dropdown > .sub-menu:nth-child(3)').removeClass('sub-menu-active');
  			$('#share-dropdown > .sub-menu:nth-child(4)').removeClass('sub-menu-active');
  			$('#share-dropdown > .sub-menu:nth-child(5)').removeClass('sub-menu-active');
  			$('#share-dropdown > .sub-menu:nth-child(6)').removeClass('sub-menu-active');
  			$('#share-dropdown > .sub-menu:nth-child(7)').removeClass('sub-menu-active');
  			$('#share-dropdown > .sub-menu:nth-child(8)').removeClass('sub-menu-active');
  	});

  	$('#share-dropdown > .sub-menu:nth-child(2)').click( function() {
  			$('#share-dropdown > .sub-menu:nth-child(2)').addClass('sub-menu-active');
  			$('#share-dropdown > .sub-menu:nth-child(1)').removeClass('sub-menu-active');
  			$('#share-dropdown > .sub-menu:nth-child(3)').removeClass('sub-menu-active');
  			$('#share-dropdown > .sub-menu:nth-child(4)').removeClass('sub-menu-active');
  			$('#share-dropdown > .sub-menu:nth-child(5)').removeClass('sub-menu-active');
  			$('#share-dropdown > .sub-menu:nth-child(6)').removeClass('sub-menu-active');
  			$('#share-dropdown > .sub-menu:nth-child(7)').removeClass('sub-menu-active');
  			$('#share-dropdown > .sub-menu:nth-child(8)').removeClass('sub-menu-active');
  	});

  	$('#share-dropdown > .sub-menu:nth-child(3)').click( function() {
  			$('#share-dropdown > .sub-menu:nth-child(3)').addClass('sub-menu-active');
  			$('#share-dropdown > .sub-menu:nth-child(1)').removeClass('sub-menu-active');
  			$('#share-dropdown > .sub-menu:nth-child(2)').removeClass('sub-menu-active');
  			$('#share-dropdown > .sub-menu:nth-child(4)').removeClass('sub-menu-active');
  			$('#share-dropdown > .sub-menu:nth-child(5)').removeClass('sub-menu-active');
  			$('#share-dropdown > .sub-menu:nth-child(6)').removeClass('sub-menu-active');
  			$('#share-dropdown > .sub-menu:nth-child(7)').removeClass('sub-menu-active');
  			$('#share-dropdown > .sub-menu:nth-child(8)').removeClass('sub-menu-active');
  	});

  	$('#share-dropdown > .sub-menu:nth-child(4)').click( function() {
  			$('#share-dropdown > .sub-menu:nth-child(4)').addClass('sub-menu-active');
  			$('#share-dropdown > .sub-menu:nth-child(1)').removeClass('sub-menu-active');
  			$('#share-dropdown > .sub-menu:nth-child(2)').removeClass('sub-menu-active');
  			$('#share-dropdown > .sub-menu:nth-child(3)').removeClass('sub-menu-active');
  			$('#share-dropdown > .sub-menu:nth-child(5)').removeClass('sub-menu-active');
  			$('#share-dropdown > .sub-menu:nth-child(6)').removeClass('sub-menu-active');
  			$('#share-dropdown > .sub-menu:nth-child(7)').removeClass('sub-menu-active');
  			$('#share-dropdown > .sub-menu:nth-child(8)').removeClass('sub-menu-active');
  	});

  	$('#share-dropdown > .sub-menu:nth-child(5)').click( function() {
  			$('#share-dropdown > .sub-menu:nth-child(5)').addClass('sub-menu-active');
  			$('#share-dropdown > .sub-menu:nth-child(1)').removeClass('sub-menu-active');
  			$('#share-dropdown > .sub-menu:nth-child(2)').removeClass('sub-menu-active');
  			$('#share-dropdown > .sub-menu:nth-child(3)').removeClass('sub-menu-active');
  			$('#share-dropdown > .sub-menu:nth-child(4)').removeClass('sub-menu-active');
  			$('#share-dropdown > .sub-menu:nth-child(6)').removeClass('sub-menu-active');
  			$('#share-dropdown > .sub-menu:nth-child(7)').removeClass('sub-menu-active');
  			$('#share-dropdown > .sub-menu:nth-child(8)').removeClass('sub-menu-active');
  	});

  	$('#share-dropdown > .sub-menu:nth-child(6)').click( function() {
  			$('#share-dropdown > .sub-menu:nth-child(6)').addClass('sub-menu-active');
  			$('#share-dropdown > .sub-menu:nth-child(1)').removeClass('sub-menu-active');
  			$('#share-dropdown > .sub-menu:nth-child(2)').removeClass('sub-menu-active');
  			$('#share-dropdown > .sub-menu:nth-child(3)').removeClass('sub-menu-active');
  			$('#share-dropdown > .sub-menu:nth-child(4)').removeClass('sub-menu-active');
  			$('#share-dropdown > .sub-menu:nth-child(5)').removeClass('sub-menu-active');
  			$('#share-dropdown > .sub-menu:nth-child(7)').removeClass('sub-menu-active');
  			$('#share-dropdown > .sub-menu:nth-child(8)').removeClass('sub-menu-active');
  	});

  	$('#share-dropdown > .sub-menu:nth-child(7)').click( function() {
  			$('#share-dropdown > .sub-menu:nth-child(7)').addClass('sub-menu-active');
  			$('#share-dropdown > .sub-menu:nth-child(1)').removeClass('sub-menu-active');
  			$('#share-dropdown > .sub-menu:nth-child(2)').removeClass('sub-menu-active');
  			$('#share-dropdown > .sub-menu:nth-child(3)').removeClass('sub-menu-active');
  			$('#share-dropdown > .sub-menu:nth-child(4)').removeClass('sub-menu-active');
  			$('#share-dropdown > .sub-menu:nth-child(5)').removeClass('sub-menu-active');
  			$('#share-dropdown > .sub-menu:nth-child(6)').removeClass('sub-menu-active');
  			$('#share-dropdown > .sub-menu:nth-child(8)').removeClass('sub-menu-active');
  	});

  	$('#share-dropdown > .sub-menu:nth-child(8)').click( function() {
  			$('#share-dropdown > .sub-menu:nth-child(8)').addClass('sub-menu-active');
  			$('#share-dropdown > .sub-menu:nth-child(1)').removeClass('sub-menu-active');
  			$('#share-dropdown > .sub-menu:nth-child(2)').removeClass('sub-menu-active');
  			$('#share-dropdown > .sub-menu:nth-child(3)').removeClass('sub-menu-active');
  			$('#share-dropdown > .sub-menu:nth-child(4)').removeClass('sub-menu-active');
  			$('#share-dropdown > .sub-menu:nth-child(5)').removeClass('sub-menu-active');
  			$('#share-dropdown > .sub-menu:nth-child(6)').removeClass('sub-menu-active');
  			$('#share-dropdown > .sub-menu:nth-child(7)').removeClass('sub-menu-active');
  	});

});

// Preview JS

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
