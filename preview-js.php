<!-- Show / Hide Script -->
<script type="text/javascript">

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

</script>
