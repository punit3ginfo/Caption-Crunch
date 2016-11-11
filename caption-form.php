<form class="form">
	<!-- TEMPLATE -->
	<div class="form-container" style="height: auto;">
		<div class="form-clearfix" style="border-top: 0px;">
			<span class="cc-text-medium form-text-header templates-show-hide-button" style="float: left;">
				<span class="cc-text-medium form-text-header template-tip">Template
			    <!-- <span class="cc-text-small" style="float: left; line-height: 30px;">
					Use the selectors below to add autofilled variables to your caption.
				</span> -->
				<i id="template-arrow-icon" class="fa fa-chevron-up cc-text-medium" aria-hidden="true" style="float: right; line-height: 30px;"></i>
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
				<i id="condition-arrow-icon" class="fa fa-chevron-up" aria-hidden="true" style="float: right; line-height: 30px;"></i>
			</span>

		</div>
		<div class="conditions-show-hide">
			<div class="form-clearfix">
				<div class="form-3col-clearfix">
					<span>Products must match: </span>
				</div>
				<div class="form-3col-clearfix">
					<!-- <input type="checkbox" name="all-conditions" value="all" style="margin-right: 10px;"/>All conditions -->
					<a id="all-conditions-btn" href="javascript:void(0)" class="button-three-col grey-button" style="width: calc(100% - 32px);">
						<i id="all-conditions-icon" class="fa fa-times" aria-hidden="true"></i> All conditions
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
	<?php echo "Display products that match conditions here." ?>
	<!-- HTML Content for Product END    -->

</form>

<script>

var $productTitle = "{{ product.title }}";
var $productPrice = "{{ product.price }}";
var $productComparePrice = "{{ product.compare_price }}";
var $productType = "{{ product.type }}";
var $productUrl = "{{ product.url }}";
var $productDescription = "{{ product.description }}";
var $collectionTitle = "{{ collection.title }}";
var $percentOff = "{{ percent.off }}";
var $dollarsOff = "{{ dollars.off }}";

var $textAreaLarge = $("#caption-textarea-large");
var $textAreaSmall = $("#caption-textarea-small");

$('#product-title-btn').click(function(){
	if ($("#product-title-btn").hasClass('grey-button')) {
		$($textAreaLarge).val($($textAreaLarge).val() + $productTitle);
		$($textAreaSmall).val($($textAreaSmall).val() + $productTitle);
		$("#product-title-btn").removeClass("grey-button");
		$("#product-title-btn").addClass("green-button");
		$("#product-title-icon").removeClass("fa-times");
		$("#product-title-icon").addClass("fa-check");
	} else if ($("#product-title-btn").hasClass('green-button')) {
			// get the content of the #result textarea
	    val = $('#caption-textarea-large').val();
		val = $('#caption-textarea-small').val();
	        // remove all occurence of content of #name in #result
	    $('#caption-textarea-large').val(val.replace($productTitle, ""));
		$('#caption-textarea-small').val(val.replace($productTitle, ""));
		$("#product-title-btn").removeClass("green-button");
		$("#product-title-btn").addClass("grey-button");
		$("#product-title-icon").removeClass("fa-check");
		$("#product-title-icon").addClass("fa-times");
	};
});

$('#product-price-btn').click(function(){
	if ($("#product-price-btn").hasClass('grey-button')) {
		$($textAreaLarge).val($($textAreaLarge).val() + $productPrice);
		$($textAreaSmall).val($($textAreaSmall).val() + $productPrice);
		$("#product-price-btn").removeClass("grey-button");
		$("#product-price-btn").addClass("green-button");
		$("#product-price-icon").removeClass("fa-times");
		$("#product-price-icon").addClass("fa-check");
	} else if ($("#product-price-btn").hasClass('green-button')) {
			// get the content of the #result textarea
		val = $('#caption-textarea-large').val();
		val = $('#caption-textarea-small').val();
			// remove all occurence of content of #name in #result
		$('#caption-textarea-large').val(val.replace($productPrice, ""));
		$('#caption-textarea-small').val(val.replace($productPrice, ""));
		$("#product-price-btn").removeClass("green-button");
		$("#product-price-btn").addClass("grey-button");
		$("#product-price-icon").removeClass("fa-check");
		$("#product-price-icon").addClass("fa-times");
	};
});

$('#product-comp-price-btn').click(function(){
	if ($("#product-comp-price-btn").hasClass('grey-button')) {
		$($textAreaLarge).val($($textAreaLarge).val() + $productComparePrice);
		$($textAreaSmall).val($($textAreaSmall).val() + $productComparePrice);
		$("#product-comp-price-btn").removeClass("grey-button");
		$("#product-comp-price-btn").addClass("green-button");
		$("#product-comp-price-icon").removeClass("fa-times");
		$("#product-comp-price-icon").addClass("fa-check");
	} else if ($("#product-comp-price-btn").hasClass('green-button')) {
			// get the content of the #result textarea
		val = $('#caption-textarea-large').val();
		val = $('#caption-textarea-small').val();
			// remove all occurence of content of #name in #result
		$('#caption-textarea-large').val(val.replace($productComparePrice, ""));
		$('#caption-textarea-small').val(val.replace($productComparePrice, ""));
		$("#product-comp-price-btn").removeClass("green-button");
		$("#product-comp-price-btn").addClass("grey-button");
		$("#product-comp-price-icon").removeClass("fa-check");
		$("#product-comp-price-icon").addClass("fa-times");
	};
});

$('#product-type-btn').click(function(){
	if ($("#product-type-btn").hasClass('grey-button')) {
		$($textAreaLarge).val($($textAreaLarge).val() + $productType);
		$($textAreaSmall).val($($textAreaSmall).val() + $productType);
		$("#product-type-btn").removeClass("grey-button");
		$("#product-type-btn").addClass("green-button");
		$("#product-type-icon").removeClass("fa-times");
		$("#product-type-icon").addClass("fa-check");
	} else if ($("#product-type-btn").hasClass('green-button')) {
			// get the content of the #result textarea
		val = $('#caption-textarea-large').val();
		val = $('#caption-textarea-small').val();
			// remove all occurence of content of #name in #result
		$('#caption-textarea-large').val(val.replace($productType, ""));
		$('#caption-textarea-small').val(val.replace($productType, ""));
		$("#product-type-btn").removeClass("green-button");
		$("#product-type-btn").addClass("grey-button");
		$("#product-type-icon").removeClass("fa-check");
		$("#product-type-icon").addClass("fa-times");
	};
});

$('#product-url-btn').click(function(){
	if ($("#product-url-btn").hasClass('grey-button')) {
		$($textAreaLarge).val($($textAreaLarge).val() + $productUrl);
		$($textAreaSmall).val($($textAreaSmall).val() + $productUrl);
		$("#product-url-btn").removeClass("grey-button");
		$("#product-url-btn").addClass("green-button");
		$("#product-url-icon").removeClass("fa-times");
		$("#product-url-icon").addClass("fa-check");
	} else if ($("#product-url-btn").hasClass('green-button')) {
			// get the content of the #result textarea
		val = $('#caption-textarea-large').val();
		val = $('#caption-textarea-small').val();
			// remove all occurence of content of #name in #result
		$('#caption-textarea-large').val(val.replace($productUrl, ""));
		$('#caption-textarea-small').val(val.replace($productUrl, ""));
		$("#product-url-btn").removeClass("green-button");
		$("#product-url-btn").addClass("grey-button");
		$("#product-url-icon").removeClass("fa-check");
		$("#product-url-icon").addClass("fa-times");
	};
});

$('#product-description-btn').click(function(){
	if ($("#product-description-btn").hasClass('grey-button')) {
		$($textAreaLarge).val($($textAreaLarge).val() + $productDescription);
		$($textAreaSmall).val($($textAreaSmall).val() + $productDescription);
		$("#product-description-btn").removeClass("grey-button");
		$("#product-description-btn").addClass("green-button");
		$("#product-description-icon").removeClass("fa-times");
		$("#product-description-icon").addClass("fa-check");
	} else if ($("#product-description-btn").hasClass('green-button')) {
			// get the content of the #result textarea
		val = $('#caption-textarea-large').val();
		val = $('#caption-textarea-small').val();
			// remove all occurence of content of #name in #result
		$('#caption-textarea-large').val(val.replace($productDescription, ""));
		$('#caption-textarea-small').val(val.replace($productDescription, ""));
		$("#product-description-btn").removeClass("green-button");
		$("#product-description-btn").addClass("grey-button");
		$("#product-description-icon").removeClass("fa-check");
		$("#product-description-icon").addClass("fa-times");
	};
});

$('#product-collection-btn').click(function(){
	if ($("#product-collection-btn").hasClass('grey-button')) {
		$($textAreaLarge).val($($textAreaLarge).val() + $collectionTitle);
		$($textAreaSmall).val($($textAreaSmall).val() + $collectionTitle);
		$("#product-collection-btn").removeClass("grey-button");
		$("#product-collection-btn").addClass("green-button");
		$("#product-collection-icon").removeClass("fa-times");
		$("#product-collection-icon").addClass("fa-check");
	} else if ($("#product-collection-btn").hasClass('green-button')) {
			// get the content of the #result textarea
		val = $('#caption-textarea-large').val();
		val = $('#caption-textarea-small').val();
			// remove all occurence of content of #name in #result
		$('#caption-textarea-large').val(val.replace($collectionTitle, ""));
		$('#caption-textarea-small').val(val.replace($collectionTitle, ""));
		$("#product-collection-btn").removeClass("green-button");
		$("#product-collection-btn").addClass("grey-button");
		$("#product-collection-icon").removeClass("fa-check");
		$("#product-collection-icon").addClass("fa-times");
	};
});

$('#product-percent-btn').click(function(){
	if ($("#product-percent-btn").hasClass('grey-button')) {
		$($textAreaLarge).val($($textAreaLarge).val() + $percentOff);
		$($textAreaSmall).val($($textAreaSmall).val() + $percentOff);
		$("#product-percent-btn").removeClass("grey-button");
		$("#product-percent-btn").addClass("green-button");
		$("#product-percent-icon").removeClass("fa-times");
		$("#product-percent-icon").addClass("fa-check");
	} else if ($("#product-percent-btn").hasClass('green-button')) {
			// get the content of the #result textarea
		val = $('#caption-textarea-large').val();
		val = $('#caption-textarea-small').val();
			// remove all occurence of content of #name in #result
		$('#caption-textarea-large').val(val.replace($percentOff, ""));
		$('#caption-textarea-small').val(val.replace($percentOff, ""));
		$("#product-percent-btn").removeClass("green-button");
		$("#product-percent-btn").addClass("grey-button");
		$("#product-percent-icon").removeClass("fa-check");
		$("#product-percent-icon").addClass("fa-times");
	};
});

$('#product-dollars-btn').click(function(){
	if ($("#product-dollars-btn").hasClass('grey-button')) {
		$($textAreaLarge).val($($textAreaLarge).val() + $dollarsOff);
		$($textAreaSmall).val($($textAreaSmall).val() + $dollarsOff);
		$("#product-dollars-btn").removeClass("grey-button");
		$("#product-dollars-btn").addClass("green-button");
		$("#product-dollars-icon").removeClass("fa-times");
		$("#product-dollars-icon").addClass("fa-check");
	} else if ($("#product-dollars-btn").hasClass('green-button')) {
			// get the content of the #result textarea
		val = $('#caption-textarea-large').val();
		val = $('#caption-textarea-small').val();
			// remove all occurence of content of #name in #result
		$('#caption-textarea-large').val(val.replace($dollarsOff, ""));
		$('#caption-textarea-small').val(val.replace($dollarsOff, ""));
		$("#product-dollars-btn").removeClass("green-button");
		$("#product-dollars-btn").addClass("grey-button");
		$("#product-dollars-icon").removeClass("fa-check");
		$("#product-dollars-icon").addClass("fa-times");
	};
});

$('#all-conditions-btn').click(function(){
		$("#all-conditions-btn").removeClass("grey-button");
		$("#all-conditions-btn").addClass("green-button");
		$("#all-conditions-icon").removeClass("fa-times");
		$("#all-conditions-icon").addClass("fa-check");

		$("#any-condition-btn").removeClass("green-button");
		$("#any-condition-btn").addClass("grey-button");
		$("#any-condition-icon").removeClass("fa-check");
		$("#any-condition-icon").addClass("fa-times");
});

$('#any-condition-btn').click(function(){
		$("#any-condition-btn").removeClass("grey-button");
		$("#any-condition-btn").addClass("green-button");
		$("#any-condition-icon").removeClass("fa-times");
		$("#any-condition-icon").addClass("fa-check");

		$("#all-conditions-btn").removeClass("green-button");
		$("#all-conditions-btn").addClass("grey-button");
		$("#all-conditions-icon").removeClass("fa-check");
		$("#all-conditions-icon").addClass("fa-times");

	};
});

</script>
