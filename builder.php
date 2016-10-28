
<div class="chat_container" style="overflow: hidden;">
			 <div class="collection-sidebar-container">
              		<div class="collection_title_selector">
                            <div class="collection_title_container">
                                <span class="collection_title_text" id="share-captions">Captions</span>
                            </div>
                    </div>

                	<div class="chat_selector_overflow_container">
                        <div class="chat_selector_overflow">
													<!-- Caption Menu Item  -->
                          		<a href="javascript:void(0)">
                                    <div class="menu-container" >
                                        <div class="menu-clearfix">
                                            <div class="menu-font-container">
                                                <span class="menu-font">Caption title go here</span>
                                            </div>
                                        </div>
                                    </div>
                              </a>
													<!-- Caption Menu Item  -->
                        </div>
                  	</div>
              </div>


			<div class="collection_title_header">
                 <div class="collection_header_container">
                     <div class="caption-header-container">

													 <div class="builder-title-header-container">
														 	<div class="builder-title-clearfix">
																	<a href="javascript:void(0)" class="sidebar-span share-history-button">
		 																 <i class="fa fa-plus" aria-hidden="true"></i>
		 																   New Caption
		 														 	</a>
															</div>
													 </div>

													<div class="builder-title-header-container">
														<!-- <div class="builder-title-clearfix" style="text-align: center;">
																<span class="collection_list_text">Caption title go here</span>
														</div> -->
													</div>

													<div class="builder-title-header-container">
														<div class="builder-title-clearfix">
																	<a href="javascript:void(0)" class="save-button"><i class="fa fa-unlock-alt" aria-hidden="true"></i> SAVE CAPTION</a>
														</div>
												  </div>

                     </div>
                  </div>
        	</div>

			<div class="builder-grid-container">
        		<div  class="builder-grid-overflow-container">
                  <?php include 'caption-form.php';?>
    			  </div>
  	  </div>
</div>

<!-- Show / Hide Script -->
<script type="text/javascript">

	// Condition - Show / Hide
	$('.conditions-show-hide-button').click(function() {
		// Show / Hide Conditions Container
	    $('.conditions-show-hide').slideToggle("slow");
		// Rotate Arrow 180 Degree / Click
			$('#condition-arrow-icon').toggleClass('fa-chevron-up fa-chevron-down');
	});

	// Templates - Show / Hide
	$('.templates-show-hide-button').click(function() {
		// Show / Hide Conditions Container
	    $('.template-show-hide').slideToggle("slow");
		// Rotate Arrow 180 Degree / Click
			$('#template-arrow-icon').toggleClass('fa-chevron-up fa-chevron-down');
	});

	// Products - Show / Hide
	$('.products-show-hide-button').click(function() {
		// Show / Hide Conditions Container
	    $('.products-show-hide').slideToggle("slow");
		// Rotate Arrow 180 Degree / Click
			$('#products-arrow-icon').toggleClass('fa-chevron-up fa-chevron-down');
	});

</script>
