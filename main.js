// Help Slide
$(document).ready(function(){
  $('#help-button').click(function() {
      if ($("#help-menu-container").hasClass('help-menu-animate')) {
          $('#help-menu-container').removeClass("help-menu-animate");
      } else {
          $('#help-menu-container').addClass("help-menu-animate");
      };
  });
});
