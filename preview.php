<div class="preview-container" id="post-preview-container">
	<div  class="preview-overflow-container">
		<div class="preview-clearfix">
			<div class="preview-template-container">
				<div class="chat_container" style="overflow: hidden;">
					<div class="sidebar-content-header">
						<div class="content-header-title-container">
							<div class="content-header-title">
								<span class="cc-text-large">
									Preview
								</span>
							</div>
						</div>

						<div class="menu-overflow-container">
							<div class="menu-overflow" style="overflow: hidden; display: flex; justify-content: center; align-items: center;">
								<!-- Preview Section -->
								<?php include 'iphone-preview.php';?>
								<!-- Preview Section -->
							</div>
						</div>
					</div>

					<div class="content-header preview-header">
						<div id="<?php echo $p_id1; ?>"  class="share-button-container?>" >

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
			
        $(_id).html("<button type='button' class='share-button' id='share-button-<?php echo $p_id1; ?>' onclick='shareButton("+pid_1+","+tags_1+");'><i class='fa fa-bullhorn' aria-hidden='true'></i> Share</button>");
          }
        });
      </script>

 </div>
						<a href="javascript:void(0)" class="btn grey-button button-four-col back-link"><i class="fa fa-caret-square-o-right" aria-hidden="true"></i> Share Next</a>
						<a href="javascript:void(0)" class="btn grey-button button-four-col back-link"><i class="fa fa-clock-o" aria-hidden="true"></i> Share Later</a>
						<a href="javascript:void(0)" class="btn grey-button button-four-col back-link"><i class="fa fa-calendar" aria-hidden="true"></i> Schedule</a>
					</div>

					<div class="content-overflow-container">
						<div  class="preview-content-overflow">
							<!-- Form Section -->
							<?php include 'preview-form.php';?>
							<!-- Form Section -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
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
 </script>

 <script>

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
     </script>
