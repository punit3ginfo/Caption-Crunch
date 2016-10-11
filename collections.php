

<div class="chat_container" style="overflow: hidden;">
  <div class="collection-sidebar-container">
              		<div class="collection_title_selector">
                            <div class="collection_title_container">
                                <span class="collection_title_text">Collections</span>
                            </div>
                    </div>

                	<div class="chat_selector_overflow_container">
                        <div class="chat_selector_overflow">

                          	<!-- Collection Card -->


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

                                  <div class="grid-item pagination-border-top">
                                    <div class="grid">
                                      <div class="grid-item">
                                          <div class="text-center" id="pagination">
						  <style>
							ul#pagination-list li {
							    display:inline;
							}
						</style>

						  <ul id="pagination-list">
							  <li onclick="getPaging(this.id)" id="1">1</li>
							<li onclick="getPaging(this.id)" id="2">2</li>
							  <li onclick="getPaging(this.id)" id="3">3</li>
							<li onclick="getPaging(this.id)" id="4">4</li>
						   </ul>
                                            <?php
                                            //echo "Pagination goes here";
                                            ?>
                                          </div>
                                      </div>
                                    </div>
                                  </div>

                          	</div>

                            <div class="collection_title_header_container">
                               <div class="collection_title_container-active">
                                 <form class="search-form" method="">
                                    <input class="search-text-box" id="formValueId" type="text" name="q_name" placeholder="Search" />
                                    <input class="search-icon-button" type="button" onclick="search(document.getElementById('formValueId').value);" value="&#xf002;" />
                                </form>
                               </div>
                            </div>

                          </div>
        				</div>





  <div class="product-grid-container scroll-grid">
      <div  class="product-grid-overflow-container">
        <?php

       // echo "Product's go here"
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
