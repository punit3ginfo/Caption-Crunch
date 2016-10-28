<!-- <div id="<?php echo $p_id1; ?>"  class="share-button-container?>" >

      <script>
        $(document).ready(function(){
          var OrigonalTag = '<?php echo $OrigonalTag; ?>';

          var pid_1 = '<?php echo $p_id1; ?>';
          //alert(pid_1);
          var pattern = /shared/;
          var pattern1 = / shared/;

          var exists = pattern.test(OrigonalTag);
          var exists1 = pattern1.test(OrigonalTag);
          if(exists || exists1 ){
            var tags_1 = '"<?php echo $tags; ?>"';
            //alert(tags_1);

                  var _id = '#'+ pid_1;


          //$(_id).html('<button type=button class=share-button onclick=unshareButton('+pid_1+',"'+tags_1+'");>UnShare</button>');
          $(_id).html("<button type='button' class='reset-button'  id='reset-button-<?php echo $p_id1; ?>' onclick='unshareButton("+pid_1+","+tags_1+");'><i class='fa fa-times' aria-hidden='true'></i> Reset</button>");

          }else{
            var _id = '#'+ pid_1;
            <?php
            if($OrigonalTag == '')
            {
              $OrigonalTag="shared";
            }
            else{
               $OrigonalTag=$OrigonalTag.",shared";
            }
            ?>
            var tags_1 = '"<?php echo $OrigonalTag; ?>"';

              //$(_id).html('<button type="button" class=share-button onclick=shareButton('+pid_1+',"'+tags_1+'");>Share</button>');
        $(_id).html("<button type='button' class='share-button' id='share-button-<?php echo $p_id1; ?>' onclick='shareButton("+pid_1+","+tags_1+");'><i class='fa fa-bullhorn' aria-hidden='true'></i> Share</button>");
          }
        });
      </script>

 </div> -->


 <!-- <script>
 	function shareButton(pid,tags){

                var access_token='<?php echo $access_token ?>';
 	       var shop='<?php echo $_REQUEST['shop'] ?>';
                var tags_unshare = tags.replace('shared', "");

 	       var tags_unshare = tags_unshare.replace('shared', "");
 		var tags_unshare = tags_unshare.replace(' ', "");

 	       var _id = '#'+ pid;
                $.ajax({
                     url: '/sharebutton.php?pid='+ pid+'&access_token='+access_token+'&shop='+shop+'&tags='+tags,
                     success: function(data){
 			$(_id).html('<button type=button class=reset-button id=reset-button-<?php echo $p_id1; ?>  onclick=unshareButton('+pid+',"'+tags_unshare+'");><i class="fa fa-times" aria-hidden=true></i> Reset</button>');

                     }
                 });
             }
 </script> -->

 <!-- <script>

 	var tags;
 	function unshareButton(pid,tags){
 		var _id = '#'+ pid;
                 var access_token='<?php echo $access_token ?>';
 	        var shop='<?php echo $_REQUEST['shop'] ?>';
 			var tags_1 = tags+',shared';
 		//var tags_1 = '<?php //echo $tags; ?>';
 		if(tags_1== ''){
 			tags_1= 'shared';
 		}

                 $.ajax({
                     url: '/sharebutton.php?pid='+ pid+'&access_token='+access_token+'&shop='+shop+'&tags='+tags,
                     success: function(data){

 			  $(_id).html('<button type="button" class=share-button id=share-button-<?php echo $p_id1; ?>  def onclick=shareButton('+pid+',"'+tags_1+'");><i class="fa fa-bullhorn" aria-hidden=true></i> Share</button>');

                     }
                 });
             }
     </script> -->
