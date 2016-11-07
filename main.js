// Help Slide
$(document).ready(function(){
  $('#help-button').click(function() {
      if ($("#help-menu-container").hasClass('help-menu-animate')) {
          $('#help-menu-container').removeClass("help-menu-animate");
          $('.sidebar-nav-container-header').removeClass("sidebar-nav-container-header-active");
          $('.help-header-link').css("color", "#666");
      } else {
          $('#help-menu-container').addClass("help-menu-animate");
          $('.sidebar-nav-container-header').addClass("sidebar-nav-container-header-active");
          $('.help-header-link').css("color", "white");
      };
  });
});

$(document).ready(function(){
    $(".header-cc-hammer-img").addEventListener("load", function() {
        var doc = this.getSVGDocument();
        var rect = doc.querySelector("rect"); // suppose our image contains a <rect>
        rect.setAttribute("fill", "green");
    });
});
