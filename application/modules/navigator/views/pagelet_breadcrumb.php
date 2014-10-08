<div id="breadcrumb">
	<span class="previous first">
		<a href="<?php echo site_url(); ?>" title="<?php echo lang('static_content_title'); ?>">
			<?php echo lang('static_content_title'); ?>
		</a> 
	</span>		

	<?php foreach ($page_list as $title => $url): ?>
		<span class="separator"> &gt; </span>
		<span>
			<a title="<?php echo $title; ?>" href="<?php echo $url; ?>">
				<?php echo $title; ?>
			</a>
		</span>
	<?php endforeach; ?>
</div>
