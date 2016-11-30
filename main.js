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

		}
	});

	//  Getting Started Sub Menu

	$('#gs-first-trigger').click( function() {
			$('#gs-second-trigger').removeClass('sub-menu-active');
			$('#gs-third-trigger').removeClass('sub-menu-active');
			$('#gs-fourth-trigger').removeClass('sub-menu-active');
			$('#gs-first-trigger').addClass('sub-menu-active');

			$('#gs-five-trigger').removeClass('sub-menu-active');
			$('#gs-six-trigger').removeClass('sub-menu-active');
			$('#gs-seven-trigger').removeClass('sub-menu-active');
			$('#gs-eight-trigger').removeClass('sub-menu-active');
	});

	$('#gs-second-trigger').click( function() {
			$('#gs-first-trigger').removeClass('sub-menu-active');
			$('#gs-third-trigger').removeClass('sub-menu-active');
			$('#gs-fourth-trigger').removeClass('sub-menu-active');
			$('#gs-second-trigger').addClass('sub-menu-active');

			$('#gs-five-trigger').removeClass('sub-menu-active');
			$('#gs-six-trigger').removeClass('sub-menu-active');
			$('#gs-seven-trigger').removeClass('sub-menu-active');
			$('#gs-eight-trigger').removeClass('sub-menu-active');
	});

	$('#gs-third-trigger').click( function() {
			$('#gs-first-trigger').removeClass('sub-menu-active');
			$('#gs-second-trigger').removeClass('sub-menu-active');
			$('#gs-fourth-trigger').removeClass('sub-menu-active');
			$('#gs-third-trigger').addClass('sub-menu-active');

			$('#gs-five-trigger').removeClass('sub-menu-active');
			$('#gs-six-trigger').removeClass('sub-menu-active');
			$('#gs-seven-trigger').removeClass('sub-menu-active');
			$('#gs-eight-trigger').removeClass('sub-menu-active');
	});

	$('#gs-fourth-trigger').click( function() {
			$('#gs-first-trigger').removeClass('sub-menu-active');
			$('#gs-second-trigger').removeClass('sub-menu-active');
			$('#gs-third-trigger').removeClass('sub-menu-active');
			$('#gs-fourth-trigger').addClass('sub-menu-active');

			$('#gs-five-trigger').removeClass('sub-menu-active');
			$('#gs-six-trigger').removeClass('sub-menu-active');
			$('#gs-seven-trigger').removeClass('sub-menu-active');
			$('#gs-eight-trigger').removeClass('sub-menu-active');
	});

	$('#gs-five-trigger').click( function() {
			$('#gs-first-trigger').removeClass('sub-menu-active');
			$('#gs-second-trigger').removeClass('sub-menu-active');
			$('#gs-third-trigger').removeClass('sub-menu-active');
			$('#gs-fourth-trigger').removeClass('sub-menu-active');

			$('#gs-five-trigger').addClass('sub-menu-active');
			$('#gs-six-trigger').removeClass('sub-menu-active');
			$('#gs-seven-trigger').removeClass('sub-menu-active');
			$('#gs-eight-trigger').removeClass('sub-menu-active');
	});

	$('#gs-six-trigger').click( function() {
			$('#gs-first-trigger').removeClass('sub-menu-active');
			$('#gs-third-trigger').removeClass('sub-menu-active');
			$('#gs-fourth-trigger').removeClass('sub-menu-active');
			$('#gs-second-trigger').addClass('sub-menu-active');

			$('#gs-five-trigger').removeClass('sub-menu-active');
			$('#gs-six-trigger').addClass('sub-menu-active');
			$('#gs-seven-trigger').removeClass('sub-menu-active');
			$('#gs-eight-trigger').removeClass('sub-menu-active');
	});

	$('#gs-seven-trigger').click( function() {
			$('#gs-first-trigger').removeClass('sub-menu-active');
			$('#gs-second-trigger').removeClass('sub-menu-active');
			$('#gs-fourth-trigger').removeClass('sub-menu-active');
			$('#gs-third-trigger').addClass('sub-menu-active');

			$('#gs-five-trigger').removeClass('sub-menu-active');
			$('#gs-six-trigger').removeClass('sub-menu-active');
			$('#gs-seven-trigger').addClass('sub-menu-active');
			$('#gs-eight-trigger').removeClass('sub-menu-active');
	});

	$('#gs-eight-trigger').click( function() {
			$('#gs-first-trigger').removeClass('sub-menu-active');
			$('#gs-second-trigger').removeClass('sub-menu-active');
			$('#gs-third-trigger').removeClass('sub-menu-active');
			$('#gs-fourth-trigger').addClass('sub-menu-active');

			$('#gs-five-trigger').removeClass('sub-menu-active');
			$('#gs-six-trigger').removeClass('sub-menu-active');
			$('#gs-seven-trigger').removeClass('sub-menu-active');
			$('#gs-eight-trigger').addClass('sub-menu-active');
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
