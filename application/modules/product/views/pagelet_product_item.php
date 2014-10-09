<a href="<?php echo product_url($product); ?>" title="<?php echo $product['name_' . $this->_current_lang]; ?>">
	<div class="coupTitle"><?php echo $product['name_' . $this->_current_lang]; ?></div>
	<img src="<?php echo base_url($product['photo']); ?>" alt="<?php echo $product['name_' . $this->_current_lang]; ?>" class="coupImage" height="85" width="85" />
	<div class="coupCopy">
		<div class="desc">
			<?php if (!empty($product['price_off'])): ?>
				<div class="tdl fLeft">
					<?php echo format_price($product['price']); ?>
				</div>
				<div class="fRight">
					<?php echo format_price($product['price_off']); ?>
				</div>
			<?php else: ?>
				<div class="fRight">
					<?php echo format_price($product['price']); ?>
				</div>
			<?php endif; ?>
			<div class="clear"></div>
		</div>
	</div>
</a>
<div class="clear"></div>

<?php if ($product['sold_out'] == STATUS_ACTIVE): ?>
	<a href="#" class="fake chkbxStyleDisabled"><?php echo lang('product_sold_out'); ?></a>
<?php else: ?>
	<form action="<?php echo site_url('ajax/product_ajax/add_to_cart/' . $product['product_id']); ?>" rel="async" method="post">
		<input class="quantity_input mt10 w80" autocomplete="off" type="number" name="quantity" value="1" />
		<input class="chkbxStyle" type="submit" title="<?php echo lang('product_add_to_cart'); ?>" value="<?php echo lang('product_add_to_cart'); ?>" name="submit" />
	</form>
<?php endif; ?>

<script type="text/javascript">
	$(document).ready(function() {
		$('.quantity_input').bind('change', function() {
			if ($(this).val() <= 0) {
				$(this).val(1);
			}
		});
	});
</script>
