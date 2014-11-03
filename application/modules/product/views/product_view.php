<?php echo asset_link_tag('css/product.css', 'stylesheet', 'text/css'); ?>

<div id="Main">
	<div class="fRight">
		<div class="fb-like" data-href="<?php echo product_url($product); ?>" data-send="true" data-layout="button_count" data-width="300" data-show-faces="true" data-font="verdana"></div>
	</div>
	<div class="clear"></div>

	<div class="mt20 pdp-box-model" id="ProductDetails">
		<div class="pdp-body">	
			<div id="ProductDetailsTop">
				<?php echo Modules::run('navigator/_pagelet_breadcrumb'); ?>

				<div class="contentRight primaryImgContainer fLeft">
					<h2 class="product-name item">
						<span class="fn"><?php echo $product['name_' . $this->_current_lang]; ?></span>
					</h2>

					<?php if (!empty($product['photo_list']) && isset($product['photo_list'][0])): ?>
						<div id="photo_panel">
							<?php $photo_path = Modules::run('photo/_get_photo_path', $product['photo_list'][0]['url'], 480); ?>
							<img src="<?php echo base_url($photo_path); ?>" alt="<?php echo $product['name_' . $this->_current_lang]; ?>" height="360" width="480" />
						</div>
						<div class="clear"></div>

						<?php if (count($product['photo_list']) > 1): ?>
							<div class="list_photo pt15">
								<ul id="slider_photo">
									<?php foreach ($product['photo_list'] as $photo): ?>
										<li class="fLeft mr5">
											<a class="photo_thumb" href="<?php echo base_url(Modules::run('photo/_get_photo_path', $photo['url'], 480)); ?>">
												<img width="80" height="60" alt="<?php echo $product['name_' . $this->_current_lang]; ?>" src="<?php echo base_url(Modules::run('photo/_get_photo_path', $photo['url'], 80)); ?>" />
											</a>
										</li>
									<?php endforeach; ?>
								</ul>
							</div>
						<?php endif; ?>
					<?php endif; ?>
					<div class="clear"></div>
				</div>

				<div class="contentLeft">
					<div class="primaryInfo j_primaryInfo" id="giftcard">
						<div id="price_main" class="priceDiv">
							<div class="offerprice">
								<p class="price">
									<span class="offerPrice">
										<?php if (!empty($product['price_off'])): ?>
											<span class="tdl">
												<?php echo format_price($product['price']); ?>
											</span>
											&nbsp;-&nbsp;
											<?php echo format_price($product['price_off']); ?>
										<?php else: ?>
											<?php echo format_price($product['price']); ?>
										<?php endif; ?>
									</span>
								</p>
							</div>
						</div>
						<div class="clear"></div>

						<div class="productWarnings">
							<div class="warninglabel"><?php echo lang('product_description'); ?></div>

							<div class="w290 pl10" style="display: table-cell;">
								<?php echo $product['description_' . $this->_current_lang]; ?>
							</div>
						</div>
						<div class="clear"></div>

						<div class="mt20">
							<?php if ($product['sold_out'] != STATUS_ACTIVE): ?>
								<form action="<?php echo site_url('ajax/product_ajax/add_to_cart/' . $product['product_id']); ?>" rel="async" method="post">
									<input class="quantity_input w80 fLeft mt10" autocomplete="off" type="number" name="quantity" value="1" />
									<button type="submit" id="addToCart" class="fRight">
										<span class="buttonText"><?php echo lang('product_add_to_cart'); ?></span>
									</button>
								</form>
							<?php endif; ?>
							<div class="clear"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$('.quantity_input').change(function() {
			if ($(this).val() <= 0) {
				$(this).val(1);
			}
		});

		$('.photo_thumb').click(function(e) {
			var _img = $(this);
			var _html = '<img width="480" height="360" src="' + _img.attr('href') + '" alt="<?php echo $product['name_' . $this->_current_lang]; ?>" />';
			$('#photo_panel').html(_html);
			e.preventDefault();
		});
	});
</script>  
