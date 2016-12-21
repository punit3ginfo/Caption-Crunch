<form class="form">
	<!-- TEMPLATE -->
	<div class="form-container" style="height: auto;">
		<div class="form-clearfix" style="border-top: 0px; padding-bottom: 0px;">
			<div class="form-title-container">
				<span class="cc-text-medium form-text-header account-show-hide-button">
					Step 1 | Select Profiles
				</span>

				<div class="account-bubble-container">
					<!-- Account Bubbles -->
					<div class="account-bubble-clearfix">
						<a href="javascript:void(0)">
							<div class="account-bubble">
								<i class="fa fa-facebook account-icon" aria-hidden="true"></i>
							</div>
						</a>
					</div>

					<div class="account-bubble-clearfix">
						<a href="javascript:void(0)">
							<div class="account-bubble">
								<i class="fa fa-twitter account-icon" aria-hidden="true"></i>
							</div>
						</a>
					</div>

					<div class="account-bubble-clearfix">
						<a href="javascript:void(0)">
							<div class="account-bubble">
								<i class="fa fa-google-plus account-icon" aria-hidden="true"></i>
							</div>
						</a>
					</div>

					<div class="account-bubble-clearfix">
						<a href="javascript:void(0)">
							<div class="account-bubble">
								<i class="fa fa-pinterest-p account-icon" aria-hidden="true"></i>
							</div>
						</a>
					</div>

					<div class="account-bubble-clearfix">
						<a href="javascript:void(0)">
							<div class="account-bubble">
								<i class="fa fa-instagram account-icon" aria-hidden="true"></i>
							</div>
						</a>
					</div>
					<!-- Account Bubbles -->
				</div>
			</div>
		</div>
	</div>
	<!-- SETTINGS -->
	<div class="form-container">
		<div class="form-clearfix" style="border-top: 0px;">
			<span class="cc-text-medium form-text-header conditions-show-hide-button">
				Step 2 | Campaign Settings
			</span>
		</div>
		<div class="conditions-show-hide">
			<div class="form-clearfix flex-col">
				<span class="cc-text-small" style="line-height: 46px;">Post Frequency :</span>
				<div class="priority-container">
					<span class="cc-text-small" style=" width: 70px; line-height: 46px;">
						Priority :
					</span>
					<select class="form-select priority-dropdown">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>6</option>
						<option>7</option>
						<option>8</option>
						<option>9</option>
						<option>10</option>
					</select>
					<select class="form-select frequecy-dropdown">
						<option>Daily</option>
						<option>Bi-weekly</option>
						<option>Weekly</option>
						<option>Monthly</option>
					</select>
				</div>
			</div>
			<div class="form-clearfix flex-col">
				<span class="cc-text-small" style="line-height: 46px;">Push new products to front of queue</span>

				<a href="javascript:void(0)" class="btn grey-button save-button">
					<i class="fa fa-times" aria-hidden="true"></i>
					NO
				</a>
			</div>
			<div class="form-clearfix flex-col">
				<span class="cc-text-small" style="line-height: 46px;">Repeat campaign after all products have been shared once</span>

				<a href="javascript:void(0)" class="btn green-button save-button">
					<i class="fa fa-check" aria-hidden="true"></i>
					YES
				</a>
			</div>
		</div>

	</div>
<!-- CONDITIONS -->
<div class="form-container">
	<div class="form-clearfix" style="border-top: 0px;">
		<span class="cc-text-medium form-text-header conditions-show-hide-button">
			Step 3 | Set  Product Conditions
		</span>
	</div>
	<div class="conditions-show-hide">
		<div class="form-clearfix flex-col">
			<div class="form-3col-clearfix flex-center">
				<span>Products must match: </span>
			</div>
			<div class="form-3col-clearfix">
				<!-- <input type="checkbox" name="all-conditions" value="all" style="margin-right: 10px;"/>All conditions -->
				<a id="all-conditions-btn" href="javascript:void(0)" class="button-three-col btn green-button" style="width: calc(100% - 22px);">
					<i id="all-conditions-icon" class="fa fa-check" aria-hidden="true"></i> All conditions
				</a>
			</div>
			<div class="form-3col-clearfix">
				<!-- <input type="checkbox" name="any-conditions" value="any" style="margin-right: 10px;"/>Any condition -->
				<a id="any-condition-btn" href="javascript:void(0)" class="button-three-col btn grey-button" style="width: calc(100% - 22px);">
					<i id="any-condition-icon" class="fa fa-times" aria-hidden="true"></i> Any condition
				</a>
			</div>
		</div>
		<div class="form-clearfix flex-col">
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
			<a href="#" class="add-condition-button btn grey-button"><i class="fa fa-plus" aria-hidden="true"></i> Add another condition</a>
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
