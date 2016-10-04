
<div class="chat_container" style="overflow: hidden;">
			 <div class="collection-sidebar-container">
              		<div class="collection_title_selector">
                            <div class="collection_title_container">
                                <span class="collection_title_text">Captions</span>
                            </div>
                    </div>

                	<div class="chat_selector_overflow_container">
                        <div class="chat_selector_overflow">
                          		<a href="/#">
                                    <div class="chat_select_container" >
                                        <div class="chat_personal_info_container">
                                            <div class="chat_user_info">
                                                <span class="collection_list_text">20% OFF FOOTWEAR SALE</span>
                                            </div>
                                        </div>
                                    </div>
                              </a>
                        </div>
                  	</div>
              </div>


			<div class="collection_title_header">
                 <div class="collection_header_container">
                     <div class="caption-header-container">
                       	  <div class="builder-title-header-container" style=" width: 400px;">
                              <form class="search-form">
                                   	<span class="caption-title-text">Caption Title:  </span>
                                   	<input class="caption-title-text-box" type="text" name="q" placeholder="Footwear Sale" style="text-align: center;"/>
                              </form>
						              </div>
                       	  <div class="builder-save-button-container">
                              <a href="#" class="save-button"><i class="fa fa-unlock-alt" aria-hidden="true"></i> SAVE</a>
                       	  </div>
                     </div>
                  </div>
        	</div>

			<div class="product-grid-container">
        		<div  class="product-grid-overflow-container">
                  <form style="display: block;">
                  <!-- CONDITIONS -->
                  <div class="builder-main-conatiner">
                    <div id="conditions-header-clearfix" class="builder-main-clearfix" style="border-bottom: 0px;">
                      	<div class="builder-conditions-container" style="height: 30px;">
													  <a href="#" class="conditions-show-hide-button" style="width: 100%;">
															<span class="conditions-title conditions-title-hover" style="line-height: 30px;">
																Conditions
																<i id="condition-arrow-icon" class="fa fa-chevron-up" aria-hidden="true" style="float: right; line-height: 30px;"></i>
															</span>
														</a>
                      	</div>
                    </div>
									<div class="conditions-show-hide">
                   	<div class="builder-main-clearfix" style="border-top: 1px solid #eee;">
                      	<div class="builder-conditions-container">
                          <div class="condition-allorany-clearfix">
                            	<div class="condition-allorany-container-s">
                            		<span>Products must match: </span>
                                </div>
                          		<div class="condition-allorany-container-s">
                                  	<input type="checkbox" name="all-conditions" value="all" style="margin-right: 10px;"/>All conditions
                            	</div>
                            	<div class="condition-allorany-container-s">
                          			<input type="checkbox" name="any-conditions" value="any" style="margin-right: 10px;"/>Any condition
                            	</div>
                          </div>
                        </div>
                    </div>
                    <div class="builder-main-clearfix">
                    	<div class="builder-conditions-container">
                    		<div class="conditions-container-s select-style">
                              	<select class="condition-select">
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
                          	<div class="conditions-container-s select-style">
								<select class="condition-select">
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
                          	<div class="conditions-container-s">
								<input class="condition-input" type="text-box" placeholder="Enter condition"/>
                    		</div>
                    	</div>
                    </div>
                    <div class="builder-main-clearfix" style="border-bottom: 0px; padding-bottom: 5px;">
                    	<div class="builder-conditions-container" style="text-align: center;">
                          	<a href="#" class="add-condition-button"><i class="fa fa-plus" aria-hidden="true"></i> Add another condition</a>
                    	</div>
                    </div>
									</div>

                   </div>
				  <!-- TEMPLATE -->
                   <div class="builder-main-conatiner" style="height: auto;">
                    <div class="builder-main-clearfix" style="padding-top: 5px;">
                      	<div class="builder-conditions-container">
                          	<span class="conditions-title conditions-title-hover">Template<i class="fa fa-chevron-up" aria-hidden="true" style="float: right; line-height: 46px;"></i></span>
                      	</div>
                    </div>
										<div class="template-show-hide">
	                    <div class="builder-main-clearfix">
	                      	<div class="builder-conditions-container">
	                          	<span class="" style="line-height: 46px;"><i class="fa fa-info-circle" aria-hidden="true" style="margin-right: 10px;"></i> Create a custom caption template or use one of our premade templates</span>
	                      	</div>
	                    </div>
										</div>
                    <div class="builder-main-clearfix" style="border-bottom: 0px; padding-bottom: 5px;">
                    	<div class="builder-conditions-container" style="height: auto; min-height: 100px;">
                          <textarea style="width: 100%; min-height: 100px; border: 1px solid #666;"></textarea>
                        </div>
                    </div>
                   </div>
                  </form>
    			</div>
  			</div>
</div>

<!-- Show / Hide Script -->
<script type="text/javascript">

	// Condition - Show / Hide
	$('.conditions-show-hide-button').click(function() {
		// Show / Hide Conditions Container
	    $('.conditions-show-hide').slideToggle("slow");
		// Rotate Arrow 180 Degree / Click
			$('#condition-arrow-icon').toggle(function() {
				$(this).rotate({ endDeg:180, persist:true });
			}, function() {
				$(this).rotate({ endDeg:360 });
			});
		// Link Does Not Follow Href
	    return false;
	});

	// JQuery Rotate
	$.fn.rotate=function(options) {
	  var $this=$(this), prefixes, opts, wait4css=0;
	  prefixes=['-Webkit-', '-Moz-', '-O-', '-ms-', ''];
	  opts=$.extend({
	    startDeg: false,
	    endDeg: 360,
	    duration: 1,
	    count: 1,
	    easing: 'linear',
	    animate: {},
	    forceJS: false
	  }, options);

	  function supports(prop) {
	    var can=false, style=document.createElement('div').style;
	    $.each(prefixes, function(i, prefix) {
	      if (style[prefix.replace(/\-/g, '')+prop]==='') {
	        can=true;
	      }
	    });
	    return can;
	  }

	  function prefixed(prop, value) {
	    var css={};
	    if (!supports.transform) {
	      return css;
	    }
	    $.each(prefixes, function(i, prefix) {
	      css[prefix.toLowerCase()+prop]=value || '';
	    });
	    return css;
	  }

	  function generateFilter(deg) {
	    var rot, cos, sin, matrix;
	    if (supports.transform) {
	      return '';
	    }
	    rot=deg>=0 ? Math.PI*deg/180 : Math.PI*(360+deg)/180;
	    cos=Math.cos(rot);
	    sin=Math.sin(rot);
	    matrix='M11='+cos+',M12='+(-sin)+',M21='+sin+',M22='+cos+',SizingMethod="auto expand"';
	    return 'progid:DXImageTransform.Microsoft.Matrix('+matrix+')';
	  }

	  supports.transform=supports('Transform');
	  supports.transition=supports('Transition');

	  opts.endDeg*=opts.count;
	  opts.duration*=opts.count;

	  if (supports.transition && !opts.forceJS) { // CSS-Transition
	    if ((/Firefox/).test(navigator.userAgent)) {
	      wait4css=(!options||!options.animate)&&(opts.startDeg===false||opts.startDeg>=0)?0:25;
	    }
	    $this.queue(function(next) {
	      if (opts.startDeg!==false) {
	        $this.css(prefixed('transform', 'rotate('+opts.startDeg+'deg)'));
	      }
	      setTimeout(function() {
	        $this
	          .css(prefixed('transition', 'all '+opts.duration+'s '+opts.easing))
	          .css(prefixed('transform', 'rotate('+opts.endDeg+'deg)'))
	          .css(opts.animate);
	      }, wait4css);

	      setTimeout(function() {
	        $this.css(prefixed('transition'));
	        if (!opts.persist) {
	          $this.css(prefixed('transform'));
	        }
	        next();
	      }, (opts.duration*1000)-wait4css);
	    });

	  } else { // JavaScript-Animation + filter
	    if (opts.startDeg===false) {
	      opts.startDeg=$this.data('rotated') || 0;
	    }
	    opts.animate.perc=100;

	    $this.animate(opts.animate, {
	      duration: opts.duration*1000,
	      easing: $.easing[opts.easing] ? opts.easing : '',
	      step: function(perc, fx) {
	        var deg;
	        if (fx.prop==='perc') {
	          deg=opts.startDeg+(opts.endDeg-opts.startDeg)*perc/100;
	          $this
	            .css(prefixed('transform', 'rotate('+deg+'deg)'))
	            .css('filter', generateFilter(deg));
	        }
	      },
	      complete: function() {
	        if (opts.persist) {
	          while (opts.endDeg>=360) {
	            opts.endDeg-=360;
	          }
	        } else {
	          opts.endDeg=0;
	          $this.css(prefixed('transform'));
	        }
	        $this.css('perc', 0).data('rotated', opts.endDeg);
	      }
	    });
	  }

	  return $this;
	};

</script>
