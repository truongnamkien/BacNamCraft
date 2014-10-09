<?php echo asset_link_tag('css/categories.css', 'stylesheet', 'text/css'); ?>

<div id="catgoryHeaderContainer" class="categoryTemplate">
	<div id="categoryHeader">
		<h1 class="search-large-text"><?php echo $category['category_name_' . $this->_current_lang]; ?></h1>
	</div>
	<div class="fRight mt25">
		<div class="fb-like" data-href="<?php echo product_category_url($category); ?>" data-send="true" data-layout="button_count" data-width="300" data-show-faces="true" data-font="verdana"></div>
	</div>
	<div class="clear"></div>

	<div id="Main" class="mainSize2 L1L2-template templateRender">
		<?php echo Modules::run('navigator/_pagelet_breadcrumb'); ?>

		<div id="offers">
			<div id="product_list">
				<?php echo Modules::run('category/_product_list', $category['product_category_id']); ?>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	scroll_loading = false;
	category_offset = 0;
	$(document).ready(function() {
		$(document).scroll(function() {
			if ($(window).scrollTop() > $("#product_list .coupon:last").offset().top - 400 && !scroll_loading) {
				scroll_loading = true;
				category_offset++;
				var _uri = "<?php echo site_url('ajax/category_ajax/product_list?product_category_id=' . $category['product_category_id']); ?>&offset=" + category_offset;
					AsyncRequest.bootstrap(new URI(_uri));
			}
		});
	});
</script>
