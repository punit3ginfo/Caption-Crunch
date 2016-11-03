<form class="form">
  <!-- TEMPLATE -->
   <div class="form-container" style="height: auto;">
      <div class="form-clearfix" style="border-top: 0px;">
              <span class="cc-text-medium form-text-header templates-show-hide-button">
                Template
                <i id="template-arrow-icon" class="fa fa-chevron-up" aria-hidden="true" style="float: right; line-height: 30px;"></i>
              </span>
      </div>
          <div class="template-show-hide">
            <div class="form-clearfix">

                                      <div class="form-3col-clearfix">
                                              <input type="checkbox" name="all-conditions" value="all" style="margin-right: 10px;"/>Product Title
                                      </div>
                                      <div class="form-3col-clearfix">
                                              <input type="checkbox" name="all-conditions" value="all" style="margin-right: 10px;"/>Product Price
                                      </div>
                                      <div class="form-3col-clearfix">
                                              <input type="checkbox" name="any-conditions" value="any" style="margin-right: 10px;"/>Compare At Price
                                      </div>

                                      <div class="form-3col-clearfix">
                                              <input type="checkbox" name="all-conditions" value="all" style="margin-right: 10px;"/>Product Type
                                      </div>
                                      <div class="form-3col-clearfix">
                                              <input type="checkbox" name="all-conditions" value="all" style="margin-right: 10px;"/>Product Vendor
                                      </div>
                                      <div class="form-3col-clearfix">
                                              <input type="checkbox" name="any-conditions" value="any" style="margin-right: 10px;"/>Product Url
                                      </div>

                                      <div class="form-3col-clearfix">
                                              <input type="checkbox" name="all-conditions" value="all" style="margin-right: 10px;"/>Product Description
                                      </div>

                                      <div class="form-3col-clearfix">
                                              <input type="checkbox" name="all-conditions" value="all" style="margin-right: 10px;"/>Collection Title
                                      </div>

                                      <div class="form-3col-clearfix">
                                              <input type="checkbox" name="any-conditions" value="any" style="margin-right: 10px;"/>Percent Off
                                      </div>
            </div>
            <div class="form-clearfix">
                              <span class="cc-text-small">Caption for: Facebook, Google+, Pinterest</span>
                              <div class="caption-textarea-container">
                                    <textarea id="caption-textarea-large" class="caption-textarea"></textarea>
                              </div>
                              <span class="cc-text-small">Caption for: Twitter (Character Limit: 140)</span>
                              <div class="caption-textarea-container" style="margin-bottom: 0px;">
                                    <textarea id="caption-textarea-small" class="caption-textarea"></textarea>
                              </div>
            </div>
          </div>
      </div>
<!-- CONDITIONS -->
<div class="form-container">
  <div class="form-clearfix" style="border-top: 0px;">

            <span class="cc-text-medium form-text-header conditions-show-hide-button">
              Conditions
              <i id="condition-arrow-icon" class="fa fa-chevron-up" aria-hidden="true" style="float: right; line-height: 30px;"></i>
            </span>

  </div>
<div class="conditions-show-hide">
  <div class="form-clearfix">
        <div class="form-3col-clearfix">
                  <span>Products must match: </span>
        </div>
        <div class="form-3col-clearfix">
                  <input type="checkbox" name="all-conditions" value="all" style="margin-right: 10px;"/>All conditions
        </div>
        <div class="form-3col-clearfix">
                <input type="checkbox" name="any-conditions" value="any" style="margin-right: 10px;"/>Any condition
        </div>
  </div>
  <div class="form-clearfix">
        <div class="form-3col-clearfix">
                    <select class="form-select">
                            <option>Collection Title</option>
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
         <div class="form-3col-clearfix">
                    <select class="form-select">
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
         <div class="form-3col-clearfix">
            <input class="form-input" type="text-box" placeholder="Enter condition"/>
         </div>
</div>
  <div class="form-clearfix">
          <a href="#" class="add-condition-button"><i class="fa fa-plus" aria-hidden="true"></i> Add another condition</a>
  </div>
</div>

 </div>
<!-- PRODUCTS -->
 <div class="form-container">
      <div class="form-clearfix" style="border-top: 0px;">
              <span class="cc-text-medium form-text-header products-show-hide-button">
                  Products
              </span>
      </div>
</div>
<!-- PRODUCT LIST -->
<div class="product-card-clearfix">

	<div class="product-card-container">

          <div class="ribbon ribbon-<?php echo $p_id1; ?>"><span>SHARED</span></div>

      		<div class="product-card-image-container product-image-<?php echo $p_id1; ?>" style='background-image: url(<?php echo $src; ?>)'>
            <!-- Opacity Layer -->
              <div class="product-card-image-container-background-hover product-opacity-<?php echo $p_id1; ?>"></div>
            <!-- Product Details Layer -->
              <div class="product-card-image-container-content-hover product-details-<?php echo $p_id1; ?>">
                  <div class="product-details-container">
                      <a href="" class="product-icon-container">
                         <span class="product-icon-clearfix">
                                <i class="fa fa-link" aria-hidden="true"></i>
                         </span>
                      </a>

                      <div class="product-title-container">
                        <span class="cc-text-medium"><?php echo $title; ?></span>
                      </div>

                      <div class="product-title-container">
                        <span class="product-card-price-text" style="margin-right: 3px;">$<?php echo $price; ?></span>
                        <span class="product-card-price-text" style="font-size: 12px; color: #888;">$<?php echo $price; ?></span>
                      </div>
                  </div>
              </div>
          </div>

          <button type='button' class='share-button' id='share-button-<?php echo $p_id1; ?>'><i class='fa fa-bullhorn' aria-hidden='true'></i> Share</button>

        </div>

    </div>

    <div class="product-card-clearfix">

    	<div class="product-card-container">

              <div class="ribbon ribbon-<?php echo $p_id1; ?>"><span>SHARED</span></div>

          		<div class="product-card-image-container product-image-<?php echo $p_id1; ?>" style='background-image: url(<?php echo $src; ?>)'>
                <!-- Opacity Layer -->
                  <div class="product-card-image-container-background-hover product-opacity-<?php echo $p_id1; ?>"></div>
                <!-- Product Details Layer -->
                  <div class="product-card-image-container-content-hover product-details-<?php echo $p_id1; ?>">
                      <div class="product-details-container">
                          <a href="" class="product-icon-container">
                             <span class="product-icon-clearfix">
                                    <i class="fa fa-link" aria-hidden="true"></i>
                             </span>
                          </a>

                          <div class="product-title-container">
                            <span class="cc-text-medium"><?php echo $title; ?></span>
                          </div>

                          <div class="product-title-container">
                            <span class="product-card-price-text" style="margin-right: 3px;">$<?php echo $price; ?></span>
                            <span class="product-card-price-text" style="font-size: 12px; color: #888;">$<?php echo $price; ?></span>
                          </div>
                      </div>
                  </div>
              </div>

              <button type='button' class='share-button' id='share-button-<?php echo $p_id1; ?>'><i class='fa fa-bullhorn' aria-hidden='true'></i> Share</button>

            </div>

        </div>

        <div class="product-card-clearfix">

        	<div class="product-card-container">

                  <div class="ribbon ribbon-<?php echo $p_id1; ?>"><span>SHARED</span></div>

              		<div class="product-card-image-container product-image-<?php echo $p_id1; ?>" style='background-image: url(<?php echo $src; ?>)'>
                    <!-- Opacity Layer -->
                      <div class="product-card-image-container-background-hover product-opacity-<?php echo $p_id1; ?>"></div>
                    <!-- Product Details Layer -->
                      <div class="product-card-image-container-content-hover product-details-<?php echo $p_id1; ?>">
                          <div class="product-details-container">
                              <a href="" class="product-icon-container">
                                 <span class="product-icon-clearfix">
                                        <i class="fa fa-link" aria-hidden="true"></i>
                                 </span>
                              </a>

                              <div class="product-title-container">
                                <span class="cc-text-medium"><?php echo $title; ?></span>
                              </div>

                              <div class="product-title-container">
                                <span class="product-card-price-text" style="margin-right: 3px;">$<?php echo $price; ?></span>
                                <span class="product-card-price-text" style="font-size: 12px; color: #888;">$<?php echo $price; ?></span>
                              </div>
                          </div>
                      </div>
                  </div>

                  <button type='button' class='share-button' id='share-button-<?php echo $p_id1; ?>'><i class='fa fa-bullhorn' aria-hidden='true'></i> Share</button>

                </div>

            </div>

            <div class="product-card-clearfix">

            	<div class="product-card-container">

                      <div class="ribbon ribbon-<?php echo $p_id1; ?>"><span>SHARED</span></div>

                  		<div class="product-card-image-container product-image-<?php echo $p_id1; ?>" style='background-image: url(<?php echo $src; ?>)'>
                        <!-- Opacity Layer -->
                          <div class="product-card-image-container-background-hover product-opacity-<?php echo $p_id1; ?>"></div>
                        <!-- Product Details Layer -->
                          <div class="product-card-image-container-content-hover product-details-<?php echo $p_id1; ?>">
                              <div class="product-details-container">
                                  <a href="" class="product-icon-container">
                                     <span class="product-icon-clearfix">
                                            <i class="fa fa-link" aria-hidden="true"></i>
                                     </span>
                                  </a>

                                  <div class="product-title-container">
                                    <span class="cc-text-medium"><?php echo $title; ?></span>
                                  </div>

                                  <div class="product-title-container">
                                    <span class="product-card-price-text" style="margin-right: 3px;">$<?php echo $price; ?></span>
                                    <span class="product-card-price-text" style="font-size: 12px; color: #888;">$<?php echo $price; ?></span>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <button type='button' class='share-button' id='share-button-<?php echo $p_id1; ?>'><i class='fa fa-bullhorn' aria-hidden='true'></i> Share</button>

                    </div>

                </div>

                <div class="product-card-clearfix">

                	<div class="product-card-container">

                          <div class="ribbon ribbon-<?php echo $p_id1; ?>"><span>SHARED</span></div>

                      		<div class="product-card-image-container product-image-<?php echo $p_id1; ?>" style='background-image: url(<?php echo $src; ?>)'>
                            <!-- Opacity Layer -->
                              <div class="product-card-image-container-background-hover product-opacity-<?php echo $p_id1; ?>"></div>
                            <!-- Product Details Layer -->
                              <div class="product-card-image-container-content-hover product-details-<?php echo $p_id1; ?>">
                                  <div class="product-details-container">
                                      <a href="" class="product-icon-container">
                                         <span class="product-icon-clearfix">
                                                <i class="fa fa-link" aria-hidden="true"></i>
                                         </span>
                                      </a>

                                      <div class="product-title-container">
                                        <span class="cc-text-medium"><?php echo $title; ?></span>
                                      </div>

                                      <div class="product-title-container">
                                        <span class="product-card-price-text" style="margin-right: 3px;">$<?php echo $price; ?></span>
                                        <span class="product-card-price-text" style="font-size: 12px; color: #888;">$<?php echo $price; ?></span>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <button type='button' class='share-button' id='share-button-<?php echo $p_id1; ?>'><i class='fa fa-bullhorn' aria-hidden='true'></i> Share</button>

                        </div>

                    </div>

                    <div class="product-card-clearfix">

                    	<div class="product-card-container">

                              <div class="ribbon ribbon-<?php echo $p_id1; ?>"><span>SHARED</span></div>

                          		<div class="product-card-image-container product-image-<?php echo $p_id1; ?>" style='background-image: url(<?php echo $src; ?>)'>
                                <!-- Opacity Layer -->
                                  <div class="product-card-image-container-background-hover product-opacity-<?php echo $p_id1; ?>"></div>
                                <!-- Product Details Layer -->
                                  <div class="product-card-image-container-content-hover product-details-<?php echo $p_id1; ?>">
                                      <div class="product-details-container">
                                          <a href="" class="product-icon-container">
                                             <span class="product-icon-clearfix">
                                                    <i class="fa fa-link" aria-hidden="true"></i>
                                             </span>
                                          </a>

                                          <div class="product-title-container">
                                            <span class="cc-text-medium"><?php echo $title; ?></span>
                                          </div>

                                          <div class="product-title-container">
                                            <span class="product-card-price-text" style="margin-right: 3px;">$<?php echo $price; ?></span>
                                            <span class="product-card-price-text" style="font-size: 12px; color: #888;">$<?php echo $price; ?></span>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <button type='button' class='share-button' id='share-button-<?php echo $p_id1; ?>'><i class='fa fa-bullhorn' aria-hidden='true'></i> Share</button>

                            </div>

                        </div>
<!-- HTML Content for Product END    -->

</form>
