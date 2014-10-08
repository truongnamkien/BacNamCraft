<div id="catgoryHeaderContainer" class="categoryTemplate">
	<div id="categoryHeader">
		<h1 class="search-large-text"><?php echo $page['name_' . $this->_current_lang]; ?></h1>
	</div>
	<div class="fRight mt25">
		<div class="fb-like" data-href="<?php echo page_url($page); ?>" data-send="true" data-layout="button_count" data-show-faces="true" data-font="verdana"></div>
	</div>
	<div class="clear"></div>

	<div id="Main" class="mainSize2 L1L2-template templateRender">
		<?php echo Modules::run('navigator/_pagelet_breadcrumb'); ?>

		<div class="componentContainer" id="content-detail">
			<?php echo Modules::run('page/_display_content', $page['page_id']); ?>
		</div>
	</div>
</div>
