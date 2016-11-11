<form class="form">
	<!-- TEMPLATE -->
	<div class="form-container" style="height: auto;">
		<div class="form-clearfix" style="border-top: 0px;">
			<span class="cc-text-medium form-text-header templates-show-hide-button" style="float: left;">
				<span class="cc-text-medium form-text-header template-tip">Template
			    <!-- <span class="cc-text-small" style="float: left; line-height: 30px;">
					Use the selectors below to add autofilled variables to your caption.
				</span> -->
				<i id="template-arrow-icon" class="fa fa-chevron-up cc-text-medium" aria-hidden="true" style="float: right; line-height: 46px;"></i>
				</span>
			</span>
		</div>
		<div class="template-show-hide">
			<div class="form-clearfix">
				<div class="form-caption-list-clearfix">
					<a id="product-title-btn" href="javascript:void(0)" class="button-three-col grey-button">
						<i id="product-title-icon" class="fa fa-times" aria-hidden="true"></i> Product Title
					</a>
					<a id="product-price-btn" href="javascript:void(0)" class="button-three-col grey-button">
						<i id="product-price-icon" class="fa fa-times" aria-hidden="true"></i> Product Price
					</a>
					<a id="product-comp-price-btn" href="javascript:void(0)" class="button-three-col grey-button">
						<i id="product-comp-price-icon" class="fa fa-times" aria-hidden="true"></i> Compare Price
					</a>
					<a id="product-type-btn" href="javascript:void(0)" class="button-three-col grey-button">
						<i  id="product-type-icon" class="fa fa-times" aria-hidden="true"></i> Product Type
					</a>
					<a id="product-url-btn" href="javascript:void(0)" class="button-three-col grey-button">
						<i id="product-url-icon" class="fa fa-times" aria-hidden="true"></i> Product Url
					</a>
					<a id="product-description-btn" href="javascript:void(0)" class="button-three-col grey-button">
						<i id="product-description-icon" class="fa fa-times" aria-hidden="true"></i> Description
					</a>
					<a id="product-collection-btn" href="javascript:void(0)" class="button-three-col grey-button">
						<i id="product-collection-icon" class="fa fa-times" aria-hidden="true"></i> Collection Title
					</a>
					<a id="product-percent-btn" href="javascript:void(0)" class="button-three-col grey-button">
						<i id="product-percent-icon" class="fa fa-times" aria-hidden="true"></i> Precent Off
					</a>
					<a id="product-dollars-btn" href="javascript:void(0)" class="button-three-col grey-button">
						<i id="product-dollars-icon" class="fa fa-times" aria-hidden="true"></i> Dollars Saved
					</a>
				</div>
			</div>
			<div class="form-clearfix" style="margin-bottom: 0px;">
				<span class="cc-text-small">Caption:</span>
				<div class="caption-textarea-container" style="margin-bottom: 0px;">
					<textarea id="caption-textarea-large" class="caption-textarea"></textarea>
				</div>
				<!-- <span class="cc-text-small">Caption for: Twitter (Character Limit: 140)</span>
				<div class="caption-textarea-container" style="margin-bottom: 0px;">
					<textarea id="caption-textarea-small" class="caption-textarea"></textarea>
				</div> -->
			</div>
		</div>
	</div>
	<!-- CONDITIONS -->
	<div class="form-container">
		<div class="form-clearfix" style="border-top: 0px;">

			<span class="cc-text-medium form-text-header conditions-show-hide-button">
				Conditions
				<i id="condition-arrow-icon" class="fa fa-chevron-up" aria-hidden="true" style="float: right; line-height: 46px;"></i>
			</span>

		</div>
		<div class="conditions-show-hide">
			<div class="form-clearfix">
				<div class="form-3col-clearfix">
					<span>Products must match: </span>
				</div>
				<div class="form-3col-clearfix">
					<!-- <input type="checkbox" name="all-conditions" value="all" style="margin-right: 10px;"/>All conditions -->
					<a id="all-conditions-btn" href="javascript:void(0)" class="button-three-col green-button" style="width: calc(100% - 32px);">
						<i id="all-conditions-icon" class="fa fa-check" aria-hidden="true"></i> All conditions
					</a>
				</div>
				<div class="form-3col-clearfix">
					<!-- <input type="checkbox" name="any-conditions" value="any" style="margin-right: 10px;"/>Any condition -->
					<a id="any-condition-btn" href="javascript:void(0)" class="button-three-col grey-button" style="width: calc(100% - 32px);">
						<i id="any-condition-icon" class="fa fa-times" aria-hidden="true"></i> Any condition
					</a>
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
			<div class="form-clearfix" id="add-condition-container">
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
	<?php echo "Display products that match conditions here." ?>
	<!-- HTML Content for Product END    -->

</form>

<?php include 'caption-form-js.php';?>
