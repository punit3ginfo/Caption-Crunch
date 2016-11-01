
<div class="chat_container" style="overflow: hidden;">
						<div class="sidbar-content-header">
										<div class="content-header-title-container">
															<div class="content-header-title">
																			<span class="cc-text-large">
																				CAPTIONS
																			</span>
                            </div>
                    </div>

                	<div class="menu-overflow-container">
                        <div class="menu-overflow">

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


			<div class="content-header">

								<div class="content-header-3col-container">
													<div class="content-header-container">
																			<a href="javascript:void(0)" class="sidebar-span share-history-button">
																				 <i class="fa fa-plus" aria-hidden="true"></i>
																					 New Caption
																			</a>
														</div>
								</div>

								<div class="content-header-3col-container">
													<div class="content-header-container">
																				<input class="search-text-box" onKeyDown="if(event.keyCode==13) search(document.getElementById('formValueId').value);" id="formValueId" type="text" name="q_name" placeholder="Search" />
																				<i class="fa fa-search search-button" onclick="search(document.getElementById('formValueId').value);"></i>
														</div>
								</div>

								<div class="content-header-3col-container">
													<div class="content-header-container">
																				<a href="javascript:void(0)" class="save-button">
																								<i class="fa fa-unlock-alt" aria-hidden="true"></i>
																								 SAVE CAPTION
																				</a>
														</div>
								</div>

	   </div>

			<div class="content-overflow-container">

        		<div  class="content-overflow">
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
