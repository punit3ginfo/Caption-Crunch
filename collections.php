
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
                            <a href="javascript:void(0)" onclick="gethistory()" class="sidebar-span share-history-button">
				    <i class="fa fa-history" aria-hidden="true"></i> 
				    Share History
			    </a>
                          </div>
                          <div class="collection_header_container">

                            <div class="pagination-clearfix">

                                  <div class="grid-item pagination-border-top">
                                    <div class="grid">
                                      <div class="grid-item">
                                          <div class="text-center">
                                            <?php
                                            echo "Pagination goes here"
                                            ?>
                                          </div>
                                      </div>
                                    </div>
                                  </div>

                          	</div>

                            <div class="collection_title_header_container">
                               <div class="collection_title_container-active">
                                 <form class="search-form" method="get">
                                    <input class="search-text-box" id="formValueId" type="text" name="q_name" placeholder="Search" />
                                    <input class="search-icon-button" type="submit" value="&#xf002;" />
                                </form>
                               </div>
                            </div>

                          </div>
        				</div>
	
	<script>
		$(document).ready(function() {
    $('.search-form').submit(function() {
	    alert("OK");
      search($('#formValueId').val());
    });
});
		
		</script>

  <div class="product-grid-container scroll-grid">
      <div  class="product-grid-overflow-container">
        <?php

       // echo "Product's go here"
	if($_REQUEST['status']=="history"){				    
       require __DIR__.'/history.php';
	}else{
		 require __DIR__.'/get_products.php';
	}
        ?>
      </div>
  </div>
</div>




