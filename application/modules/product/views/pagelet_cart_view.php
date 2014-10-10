<div id="catgoryHeaderContainer" class="categoryTemplate">
	<div id="categoryHeader">
		<h1 class="search-large-text"><?php echo lang('product_shopping_cart'); ?></h1>
	</div>
	<div class="clear"></div>

	<div id="Main" class="mainSize2 L1L2-template templateRender">
		<?php echo Modules::run('navigator/_pagelet_breadcrumb'); ?>

		<?php if (empty($cart)): ?>
			<div class="tac fs20 ma15"><?php echo lang('product_shopping_cart_empty'); ?></div>
		<?php else: ?>
			<div id="cartSku000" class="cartdata clearfix">
				<?php foreach ($cart as $rowid => $item): ?>
					<div id="row_<?php echo $rowid; ?>" class="cart_row">
						<?php echo Modules::run('product/_pagelet_cart_item', $item); ?>
					</div>
				<?php endforeach; ?>
			</div>

			<div class="cart_row">
				<div class="cartCol1">&nbsp;</div>
				<div class="cartCol2">
					<p class="itemname">
						<?php echo lang('product_shopping_cart_total_price'); ?>
					</p>
				</div>
				<div class="cartCol5">
					<?php echo format_price($total_price); ?>    
				</div>
			</div>
			<div class="clear"></div> 

			<div id="cartsection">
				<div class="cartLinks">
					<a class="button fRight ml20" href="#" rel="async" ajaxify="<?php echo site_url('ajax/product_ajax/checkout'); ?>">
						<span class="buttonText"><?php echo lang('product_shopping_cart_finish'); ?></span>
					</a>
					<a class="button fRight" href="<?php echo site_url(); ?>">
						<span class="buttonText"><?php echo lang('product_shopping_cart_back'); ?></span>
					</a>
					<div class="clear"></div> 
				</div>
				<div class="clear"></div> 
			</div>
		<?php endif; ?>
	</div>
</div>

