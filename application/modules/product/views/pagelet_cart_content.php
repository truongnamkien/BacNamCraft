<ul id="ShopMenu">
	<li class="mini-cart-wrapper-leave no_background" id="mini-cart-wrapper" style="background-image: none; background-position: initial initial; background-repeat: initial initial;"> 
		<a href="<?php echo site_url('product/cart'); ?>" title="<?php echo lang('product_shopping_cart'); ?>" id="mini-cart-icon">
			<span class="your-cart">
				<?php if ($total_product > 0): ?>
					<?php echo lang('product_shopping_cart_total_items', '', $total_product); ?>
				<?php else: ?>
					<?php echo lang('product_shopping_cart'); ?>
				<?php endif; ?>
			</span>
		</a>
	</li>
</ul>
<a class="mini-cart-arrow mini-cart-arrow-leave mini-cart-arrow_mouseleave" rel="nofollow" href="<?php echo site_url('product/cart'); ?>" title="<?php echo lang('product_shopping_cart'); ?>"></a>
