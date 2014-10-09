<?php if (empty($product_list)): ?>
	<div class="tac fs20 ma15"><?php echo lang('product_list_empty'); ?></div>
<?php else: ?>
	<?php $index = 0; ?>
	<?php foreach ($product_list as $product): ?>
		<div class="coupon <?php echo (($index + 1) % 4 == 0 ? '' : 'tileborderright'); ?>">
			<?php echo Modules::run('product/_pagelet_product_item', $product); ?>
		</div>
		<?php $index++; ?>
	<?php endforeach; ?>                
<?php endif; ?>

