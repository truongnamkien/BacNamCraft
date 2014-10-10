<?php echo asset_link_tag('css/categories.css', 'stylesheet', 'text/css'); ?>

<div id="catgoryHeaderContainer" class="categoryTemplate">
	<div id="categoryHeader">
		<h1 class="search-large-text"><?php echo lang('product_hot'); ?></h1>
	</div>
	<div class="clear"></div>

	<div id="Main" class="mainSize2 L1L2-template templateRender">
		<div id="offers">
			<div id="product_list">
				<?php $index = 0; ?>
				<?php foreach ($product_list as $product): ?>
					<div class="coupon <?php echo (($index + 1) % 4 == 0 ? '' : 'tileborderright'); ?>">
						<?php echo Modules::run('product/_pagelet_product_item', $product); ?>
					</div>
					<?php $index++; ?>
				<?php endforeach; ?>                
			</div>
		</div>
	</div>
</div>

