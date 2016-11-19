<div class="collections-animation-container">
        <div class="chat_container" style="overflow: hidden;">
                <div class="sidebar-content-header">
                        <div class="content-header-title-container">
                                <div class="content-header-title">
                                        <span class="cc-text-large">
                                          PRODUCTS
                                        </span>
                                </div>
                        </div>

                    	<div class="menu-overflow-container">
                            <div class="menu-overflow">

                              	<!-- Collection Card -->

                                    <a href="javascript:void(0)" onclick="getproducts()">
                                            <div class="menu-container">
                                                <div class="menu-clearfix">
                                                    <div class="menu-font-container">
                                                        <span class="menu-font">ALL PRODUCTS</span>
                                                    </div>
                                                    <div class="menu-icon-clearfix">
                                                        <div class="menu-icon-container">
                                                            <span class="menu-icon">X</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

										<a href="javascript:void(0)" onclick="">
	                                            <div class="menu-container">
	                                                <div class="menu-clearfix">
	                                                    <div class="menu-font-container">
	                                                        <span class="menu-font">NEW PRODUCTS</span>
	                                                    </div>
	                                                    <div class="menu-icon-clearfix">
	                                                        <div class="menu-icon-container">
	                                                            <span class="menu-icon">X</span>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </a>

                                    <?php

           				// echo "Product's go here"
           				require __DIR__.'/get_collectionlist.php'; //GET PRODUCTS
            				?>

                                 <!-- Collection Card -->

                            </div>
                	</div>
           </div>

  				 <div class="content-header">

                          <div class="content-header-3col-container">
                                    <div class="content-header-container">
                                                  <a href="javascript:void(0)" onclick="getsharehistory()" class="sidebar-span share-history-button">
                      				                        <i class="fa fa-history" aria-hidden="true"></i>
                      				                         History
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
					  <nav aria-label="Page navigation" class="page">
       						 <ul class="pagination text-center" id="pagination1"></ul>
						   <ul class="pagination text-center" id="pagination2"></ul>
   					 </nav>
                                          <!--div class="text-center" id="pagination"></div-->
                                  </div>
                          </div>

                            <!-- <div class="collection_title_header_container">
                               <div class="collection_title_container-active">

                                    <input class="search-text-box" onKeyDown="if(event.keyCode==13) search(document.getElementById('formValueId').value);" id="formValueId" type="text" name="q_name" placeholder="Search" />

                                    <i style="position: absolute; right: 10px;  color: #666;" class="fa fa-search" onclick="search(document.getElementById('formValueId').value);"></i>

                               </div>
                            </div> -->
        			</div>

              <div class="content-overflow-container">
                      <div  class="content-overflow">

                        <?php

                                 //  Products List Here
                                	if($_REQUEST['status']=="search"){
                                       require __DIR__.'/history.php';
                                	}
                                	      if(($_REQUEST['status']!="search")|| ($_REQUEST['status']=="")){
                                		 require __DIR__.'/get_products.php';
                                	}

                        ?>

                      </div>
          </div>
</div>

