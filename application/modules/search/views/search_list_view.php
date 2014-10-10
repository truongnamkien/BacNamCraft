<?php echo asset_link_tag('css/categories.css', 'stylesheet', 'text/css'); ?>

<div id="catgoryHeaderContainer" class="categoryTemplate">
	<div id="categoryHeader">
		<h1 class="search-large-text"><?php echo lang('search_result_desc', '', $query); ?></h1>
	</div>
	<div class="clear"></div>

	<div id="Main" class="mainSize2 L1L2-template templateRender">
		<div id="offers">
			<div id="product_list">
				<?php if (empty($products)): ?>
					<div class="tac fs20 ma15"><?php echo lang('search_result_empty'); ?></div>
				<?php else: ?>
					<?php $index = 0; ?>
					<?php foreach ($products as $product): ?>
						<div class="coupon <?php echo (($index + 1) % 4 == 0 ? '' : 'tileborderright'); ?>">
							<?php echo Modules::run('product/_pagelet_product_item', $product); ?>
						</div>
						<?php $index++; ?>
					<?php endforeach; ?>                
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>

