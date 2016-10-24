// Load Pages
	function getproducts(){

               var access_token='<?php echo $access_token ?>';
		var shop='<?php echo $_REQUEST['shop'] ?>';

                $.ajax({
                    url: '/collections.php?access_token='+access_token+'&shop='+shop,
                    success: function(data){
                     //console.log(data);
			   // var data1= data.find('.chat_container').html()
			    $('.main_container').html(data);
                    }
                });
            }
			function getdashboard(){

               var access_token='<?php echo $access_token ?>';
		var shop='<?php echo $_REQUEST['shop'] ?>';

                $.ajax({
                    url: '/dashboard.php?access_token='+access_token+'&shop='+shop,
                    success: function(data){
                     //console.log(data);
			   // var data1= data.find('.chat_container').html()
			    $('.main_container').html(data);
                    }
                });
            }
			function getbuilder(){

               var access_token='<?php echo $access_token ?>';
		var shop='<?php echo $_REQUEST['shop'] ?>';

                $.ajax({
                    url: '/builder.php?access_token='+access_token+'&shop='+shop,
                    success: function(data){
                     //console.log(data);
			   // var data1= data.find('.chat_container').html()
			    $('.main_container').html(data);
                    }
                });
            }
			function getsettings(){

               var access_token='<?php echo $access_token ?>';
		var shop='<?php echo $_REQUEST['shop'] ?>';

                $.ajax({
                    url: '/settings.php?access_token='+access_token+'&shop='+shop,
                    success: function(data){
                     //console.log(data);
			   // var data1= data.find('.chat_container').html()
			    $('.main_container').html(data);
                    }
                });
            }
			function getaccount(){

               var access_token='<?php echo $access_token ?>';
		var shop='<?php echo $_REQUEST['shop'] ?>';

                $.ajax({
                    url: '/account.php?access_token='+access_token+'&shop='+shop,
                    success: function(data){
                     //console.log(data);
			   // var data1= data.find('.chat_container').html()
			    $('.main_container').html(data);
                    }
                });
            }


function gethistory(){

               var access_token='<?php echo $access_token ?>';
		var shop='<?php echo $_REQUEST['shop'] ?>';

                $.ajax({
                    url: '/collections.php?access_token='+access_token+'&shop='+shop+'&status=history',
                    success: function(data){
                     //console.log(data);
			   // var data1= data.find('.chat_container').html()
			    $('.main_container').html(data);
                    }
                });
            }


// Initial Page Load
(function($) {
    $(document).ready(function() {
        getproducts(); // start the loop
    });
})(jQuery);


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
