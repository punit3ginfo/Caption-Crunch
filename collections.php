

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
						<?php 
							$TotalnoOfProduct = $shopify('GET /admin/products/count.json');
							//echo "total products=".$TotalnoOfProduct=sizeof($products);
							$limit=50; // Number of product per page
							$noofPages=$TotalnoOfProduct/$limit;
							$noofPages=abs(round($noofPages));
						
						 ?>
												 <button type="button" id="showLess">Previous</button> <ul id="pagination-list">
												 
						  <?php
						     for($i=1;$i<=$noofPages;$i++)
							 {?>
								<li class="page-link" onclick="getPaging(this.id,<?php echo $limit; ?>)" id="<?php echo $i; ?>"><?php echo $i; ?></li>
								
								
						  <?php } ?>
												  
								
						  </ul>
						   <button type="button" id="loadMore">NEXT</button>
											
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

<script>
jQuery(document).ready(function () {
	$('ul li:gt(3)').hide();
	
    size_li =jQuery("#pagination-list li").length;
    x=3;
    jQuery('#pagination-list li:lt('+x+')').show();
    jQuery('#loadMore').click(function () {
		
        x= (x+5 <= size_li) ? x+5 : size_li;
        jQuery('#pagination-list li:lt('+x+')').show();
         jQuery('#showLess').show();
        if(x == size_li){
            jQuery('#loadMore').hide();
        }
    });
    $('#showLess').click(function () {
		
        x=(x-5<0) ? 3 : x-5;
        jQuery('#pagination-list li').not(':lt('+x+')').hide();
        jQuery('#loadMore').show();
         jQuery('#showLess').show();
        if(x == 3){
            $('#showLess').hide();
        }
    });
});

</script>



