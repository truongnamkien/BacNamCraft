<div class="cartCol1">
    <a href="<?php echo product_url($item['product']); ?>">
		<?php if (!empty($item['product']['photo'])): ?>
			<img height="75" width="75" alt="<?php echo $item['product']['name_' . $this->_current_lang]; ?>" src="<?php echo base_url(Modules::run('photo/_get_photo_path', $item['product']['photo']['url'], 75)); ?>" />
		<?php endif; ?>
    </a>
</div>

<div class="cartCol2">
	<p class="itemname">
		<a href="<?php echo product_url($item['product']); ?>">
			<span class="itemQuick"><?php echo $item['product']['name_' . $this->_current_lang]; ?></span>
		</a>
	</p>
    <a class="button mr5 ml30 fLeft" href="#" rel="async" ajaxify="<?php echo site_url('ajax/product_ajax/edit_item/' . $item['rowid']); ?>">
		<span class="buttonText"><?php echo lang('product_shopping_cart_edit'); ?></span>
    </a>
    <a class="button fLeft" href="#" rel="async" ajaxify="<?php echo site_url('ajax/product_ajax/remove_from_cart/' . $item['rowid']); ?>">
		<span class="buttonText"><?php echo lang('product_shopping_cart_remove'); ?></span>
    </a>
	<div class="clear"></div>
</div>

<div class="cartCol3">
	<?php echo format_price($item['price']); ?>
</div>

<div class="cartCol4">
	<?php echo $item['qty']; ?>
</div>

<div class="cartCol5">
	<?php echo format_price($item['total_price']); ?>
</div>
<div class="clear"></div>
