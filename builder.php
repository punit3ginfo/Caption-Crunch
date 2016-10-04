
<div class="chat_container" style="overflow: hidden;">
			 <div class="collection-sidebar-container">
              		<div class="collection_title_selector">
                            <div class="collection_title_container">
                                <span class="collection_title_text">Captions</span>
                            </div>
                    </div>

                	<div class="chat_selector_overflow_container">
                        <div class="chat_selector_overflow">
                          		<a href="/#">
                                    <div class="chat_select_container" >
                                        <div class="chat_personal_info_container">
                                            <div class="chat_user_info">
                                                <span class="collection_list_text">20% OFF FOOTWEAR SALE</span>
                                            </div>
                                        </div>
                                    </div>
                              </a>
                        </div>
                  	</div>
              </div>


			<div class="collection_title_header">
                 <div class="collection_header_container">
                     <div class="caption-header-container">
                       	  <div class="builder-title-header-container" style=" width: 400px;">
                              <form class="search-form">
                                   	<span class="caption-title-text">Caption Title:  </span>
                                   	<input class="caption-title-text-box" type="text" name="q" placeholder="Footwear Sale" style="text-align: center;"/>
                              </form>
						              </div>
                       	  <div class="builder-save-button-container">
                              <a href="#" class="save-button"><i class="fa fa-unlock-alt" aria-hidden="true"></i> SAVE</a>
                       	  </div>
                     </div>
                  </div>
        	</div>

			<div class="product-grid-container">
        		<div  class="product-grid-overflow-container">
                  <form style="display: block;">
                  <!-- CONDITIONS -->
                  <div class="builder-main-conatiner">
                    <div class="builder-main-clearfix" style="padding-top: 5px;">
                      	<div class="builder-conditions-container">
                          	<span class="conditions-title conditions-title-hover">
															Conditions
															<button type="button" id="conditions-show-hide-button" style="float:right; border: 0px; background: none;">
																<i class="fa fa-chevron-up" aria-hidden="true" style="float: right; line-height: 46px;"></i>
															</button>
														</span>
                      	</div>
                    </div>
									<div id="conditions-show-hide">
                   	<div class="builder-main-clearfix">
                      	<div class="builder-conditions-container">
                          <div class="condition-allorany-clearfix">
                            	<div class="condition-allorany-container-s">
                            		<span>Products must match: </span>
                                </div>
                          		<div class="condition-allorany-container-s">
                                  	<input type="checkbox" name="all-conditions" value="all" style="margin-right: 10px;"/>All conditions
                            	</div>
                            	<div class="condition-allorany-container-s">
                          			<input type="checkbox" name="any-conditions" value="any" style="margin-right: 10px;"/>Any condition
                            	</div>
                          </div>
                        </div>
                    </div>
                    <div class="builder-main-clearfix">
                    	<div class="builder-conditions-container">
                    		<div class="conditions-container-s select-style">
                              	<select class="condition-select">
                                  	<option>Product Title</option>
                                  	<option>Product Type</option>
                                  	<option>Product Vendor</option>
                                  	<option>Product Price</option>
                                  	<option>Product Tag</option>
                                  	<option>Compare At Price</option>
                                  	<option>Weight</option>
                                  	<option>Inventory Stock</option>
                                  	<option>Varient Title</option>
                              	</select>
                    		</div>
                          	<div class="conditions-container-s select-style">
								<select class="condition-select">
                                  	<option>is equal to</option>
                                  	<option>is not equal to</option>
                                  	<option>is greater than</option>
                                  	<option>is less than</option>
                                  	<option>starts with</option>
                                  	<option>ends with</option>
                                  	<option>contains</option>
                                  	<option>does not contain</option>
                              	</select>
                    		</div>
                          	<div class="conditions-container-s">
								<input class="condition-input" type="text-box" placeholder="Enter condition"/>
                    		</div>
                    	</div>
                    </div>
                    <div class="builder-main-clearfix" style="border-bottom: 0px; padding-bottom: 5px;">
                    	<div class="builder-conditions-container" style="text-align: center;">
                          	<a href="#" class="add-condition-button"><i class="fa fa-plus" aria-hidden="true"></i> Add another condition</a>
                    	</div>
                    </div>
									</div>

                   </div>
				  <!-- TEMPLATE -->
                   <div class="builder-main-conatiner" style="height: auto;">
                    <div class="builder-main-clearfix" style="padding-top: 5px;">
                      	<div class="builder-conditions-container">
                          	<span class="conditions-title conditions-title-hover">Template<i class="fa fa-chevron-up" aria-hidden="true" style="float: right; line-height: 46px;"></i></span>
                      	</div>
                    </div>
										<div class="template-show-hide">
	                    <div class="builder-main-clearfix">
	                      	<div class="builder-conditions-container">
	                          	<span class="" style="line-height: 46px;"><i class="fa fa-info-circle" aria-hidden="true" style="margin-right: 10px;"></i> Create a custom caption template or use one of our premade templates</span>
	                      	</div>
	                    </div>
										</div>
                    <div class="builder-main-clearfix" style="border-bottom: 0px; padding-bottom: 5px;">
                    	<div class="builder-conditions-container" style="height: auto; min-height: 100px;">
                          <textarea style="width: 100%; min-height: 100px; border: 1px solid #666;"></textarea>
                        </div>
                    </div>
                   </div>
                  </form>
    			</div>
  			</div>
</div>

<!-- Show / Hide Script -->
<script type="text/javascript">
	$('document').on('load',function() {
		$( "#conditions-show-hide-button" ).click(function() {
			$( "#conditions-show-hide" ).slideToggle( "slow", function() {
				// Animation complete.
			});
		});
	});
</script>
