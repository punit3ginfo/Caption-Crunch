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
