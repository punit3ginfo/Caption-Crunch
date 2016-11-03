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
                                              <input id="product-title-check" type="checkbox" name="all-conditions" value="all" style="margin-right: 10px;"/>Product Title
                                      </div>
                                      <div class="form-3col-clearfix">
                                              <input id="product-price-check" type="checkbox" name="all-conditions" value="all" style="margin-right: 10px;"/>Product Price
                                      </div>
                                      <div class="form-3col-clearfix">
                                              <input id="product-comp-price-check" type="checkbox" name="any-conditions" value="any" style="margin-right: 10px;"/>Compare At Price
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
                              <div class="captions-textarea-container" style="margin-bottom: 0px;">
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

<!-- HTML Content for Product END    -->

</form>

<script>

var $productTitle = "{{ product.title }}";

$('#product-title-check').click(function(){
    if (this.checked) {
        $('#caption-textarea-large').val($productTitle);
    } else {
        $('#caption-textarea-large').val().empty();
    }
});

</script>
