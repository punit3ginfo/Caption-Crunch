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
	    valLarge = $('#caption-textarea-large').val();
		// valSmall = $('#caption-textarea-small').val();
	        // remove all occurence of content of #name in #result
	    $('#caption-textarea-large').val(valLarge.replace($productTitle, ""));
		// $('#caption-textarea-small').val(valSmall.replace($productTitle, ""));
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
		// val = $('#caption-textarea-small').val();
			// remove all occurence of content of #name in #result
		$('#caption-textarea-large').val(val.replace($productPrice, ""));
		// $('#caption-textarea-small').val(val.replace($productPrice, ""));
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
		// val = $('#caption-textarea-small').val();
			// remove all occurence of content of #name in #result
		$('#caption-textarea-large').val(val.replace($productComparePrice, ""));
		// $('#caption-textarea-small').val(val.replace($productComparePrice, ""));
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
		// val = $('#caption-textarea-small').val();
			// remove all occurence of content of #name in #result
		$('#caption-textarea-large').val(val.replace($productType, ""));
		// $('#caption-textarea-small').val(val.replace($productType, ""));
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
		// val = $('#caption-textarea-small').val();
			// remove all occurence of content of #name in #result
		$('#caption-textarea-large').val(val.replace($productUrl, ""));
		// $('#caption-textarea-small').val(val.replace($productUrl, ""));
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
		// val = $('#caption-textarea-small').val();
			// remove all occurence of content of #name in #result
		$('#caption-textarea-large').val(val.replace($productDescription, ""));
		// $('#caption-textarea-small').val(val.replace($productDescription, ""));
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
		// val = $('#caption-textarea-small').val();
			// remove all occurence of content of #name in #result
		$('#caption-textarea-large').val(val.replace($collectionTitle, ""));
		// $('#caption-textarea-small').val(val.replace($collectionTitle, ""));
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
		// val = $('#caption-textarea-small').val();
			// remove all occurence of content of #name in #result
		$('#caption-textarea-large').val(val.replace($percentOff, ""));
		// $('#caption-textarea-small').val(val.replace($percentOff, ""));
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
		// val = $('#caption-textarea-small').val();
			// remove all occurence of content of #name in #result
		$('#caption-textarea-large').val(val.replace($dollarsOff, ""));
		// $('#caption-textarea-small').val(val.replace($dollarsOff, ""));
		$("#product-dollars-btn").removeClass("green-button");
		$("#product-dollars-btn").addClass("grey-button");
		$("#product-dollars-icon").removeClass("fa-check");
		$("#product-dollars-icon").addClass("fa-times");
	};
});

$('#all-conditions-btn').click(function(){
	if ($("#all-conditions-btn").hasClass('grey-button')) {
		$("#all-conditions-btn").removeClass("grey-button");
		$("#all-conditions-btn").addClass("green-button");
		$("#all-conditions-icon").removeClass("fa-times");
		$("#all-conditions-icon").addClass("fa-check");

		$("#any-condition-btn").removeClass("green-button");
		$("#any-condition-btn").addClass("grey-button");
		$("#any-condition-icon").removeClass("fa-check");
		$("#any-condition-icon").addClass("fa-times");
	} else if ($("#all-conditions-btn").hasClass('green-button')) {
		$("#all-conditions-btn").removeClass("green-button");
		$("#all-conditions-btn").addClass("grey-button");
		$("#all-conditions-icon").removeClass("fa-check");
		$("#all-conditions-icon").addClass("fa-times");
	};
});

$('#any-condition-btn').click(function(){
	if ($("#any-condition-btn").hasClass('grey-button')) {
		$("#any-condition-btn").removeClass("grey-button");
		$("#any-condition-btn").addClass("green-button");
		$("#any-condition-icon").removeClass("fa-times");
		$("#any-condition-icon").addClass("fa-check");

		$("#all-conditions-btn").removeClass("green-button");
		$("#all-conditions-btn").addClass("grey-button");
		$("#all-conditions-icon").removeClass("fa-check");
		$("#all-conditions-icon").addClass("fa-times");
	} else if ($("#any-condition-btn").hasClass('green-button')) {
		$("#any-condition-btn").removeClass("green-button");
		$("#any-condition-btn").addClass("grey-button");
		$("#any-condition-icon").removeClass("fa-check");
		$("#any-condition-icon").addClass("fa-times");
	};
});

$('.add-condition-button').click(function(){
		$("#add-condition-container").before("<div id='form-condition-row-one' class='form-clearfix' style='border-top: 0px; padding-top: 0px;'><i id='form-condition-remove-btn-one' class='fa fa-times form-condition-remove' aria-hidden='true'></i><div class='form-3col-clearfix'><select class='form-select'><option>Collection Title</option><option>Product Title</option><option>Product Type</option><option>Product Vendor</option><option>Product Price</option><option>Product Tag</option><option>Compare At Price</option><option>Weight</option><option>Inventory Stock</option><option>Varient Title</option></select></div><div class='form-3col-clearfix'><select class='form-select'><option>is equal to</option><option>is not equal to</option><option>is greater than</option><option>is less than</option><option>starts with</option><option>ends with</option><option>contains</option><option>does not contain</option></select></div><div class='form-3col-clearfix'><input class='form-input' type='text-box' placeholder='Enter condition'/></div></div>");
});

$('#form-condition-remove-btn-one').click(function(){
		$("#form-condition-row-one").html();
});

</script>
