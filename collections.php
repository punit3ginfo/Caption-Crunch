
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

                          		<a href="{{ collection.url }}">
                                    <div class="chat_select_container" >
                                        <div class="chat_personal_info_container">
                                            <div class="chat_user_info">
                                                <span class="collection_list_text">COLLECTION TITLE</span>
                                            </div>
                                            <div class="notification-container">
                                                <div class="chat_notification_container">
                                                    <span class="notif_number">45</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <?php
                                echo "List collections here";
                                ?>

                             <!-- Collection Card -->

                        </div>
                  	</div>
              </div>




						<div class="collection_title_header">

                          <div class="collection-share-history-container">
                            <a href="/#" class="sidebar-span share-history-button"><i class="fa fa-history" aria-hidden="true"></i> Share History</a>
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
                                 <form class="search-form" method="get" action="/search">
                                    <input class="search-text-box" type="text" name="q" placeholder="Search" />
                                    <input class="search-icon-button" type="submit" value="&#xf002;" />
                                </form>
                               </div>
                            </div>

                          </div>
        				</div>

  <div class="product-grid-container">
      <div  class="product-grid-overflow-container">
        <?php
        echo "Product's go here"
        ?>
      </div>
  </div>
</div>
