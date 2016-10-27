
<div class="collections-animation-container">
    <div class="chat_container" style="overflow: hidden;">
          <div class="collection-sidebar-container">
                  		<div class="collection_title_selector">
                                <div class="collection_title_container">
                                    <span class="collection_title_text">Collections</span>
                                </div>
                        </div>

                    	<div class="chat_selector_overflow_container">
                            <div class="chat_selector_overflow" style="height: calc(100% - 160px);">

                              	<!-- Collection Card -->

                                <a href="javascript:void(0)" onclick="getproducts()">
                                        <div class="chat_select_container">
                                            <div class="chat_personal_info_container">
                                                <div class="chat_user_info">
                                                    <span class="collection_list_text">ALL PRODUCTS</span>
                                                </div>
                                                <div class="notification-container">
                                                    <div class="chat_notification_container">

                                                        <span class="notif_number"><?php echo $noOfProduct; ?></span>
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



						<div class="collection_title_header">

                          <div class="collection-share-history-container">
                            <a href="javascript:void(0)" onclick="getsharehistory()" class="sidebar-span share-history-button">
				                        <i class="fa fa-history" aria-hidden="true"></i>
				                         History
			                      </a>
                          </div>

                          <div class="collection_header_container">

                            <div class="pagination-clearfix">
                                          <div class="text-center" id="pagination">

                                          </div>
                          	</div>

                            <div class="collection_title_header_container">
                               <div class="collection_title_container-active">

                                    <input class="search-text-box" onKeyDown="if(event.keyCode==13) search(document.getElementById('formValueId').value);" id="formValueId" type="text" name="q_name" placeholder="Search" />

                                    <i style="position: absolute; right: 10px;  color: #666;" class="fa fa-search" onclick="search(document.getElementById('formValueId').value);"></i>

                               </div>
                            </div>

                          </div>
        				</div>





  <div class="product-grid-container scroll-grid">
      <div  class="product-grid-overflow-container">

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
