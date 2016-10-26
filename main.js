// Help Slide
$(document).ready(function(){
  $('#help-button').click(function() {
      if ($("#help-menu-container").hasClass('help-menu-animate')) {
          $('#help-menu-container').removeClass("help-menu-animate");
          $('.sidebar-nav-container-header').removeClass("sidebar-nav-container-header-active");
          $('help-header-link').removeClass("help-header-link-active");
      } else {
          $('#help-menu-container').addClass("help-menu-animate");
          $('.sidebar-nav-container-header').addClass("sidebar-nav-container-header-active");
          $('.help-header-link').addClass("help-header-link-active");
      };
  });
});
