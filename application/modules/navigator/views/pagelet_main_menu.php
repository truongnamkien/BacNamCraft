<?php if ($pos == 'top'): ?>
	<?php echo asset_link_tag('css/menu.css'); ?>
	<ul class="menu" id="ja-cssmenu">
		<?php foreach ($top_nav as $title => $nav): ?>
			<li class="<?php echo $nav['class']; ?>" title="<?php echo $title; ?>">
				<a href="<?php echo $nav['url']; ?>" class="<?php echo $nav['class']; ?>" title="<?php echo $title; ?>">
					<?php echo $title; ?>
				</a>
				<?php if (isset($nav['sub_nav']) && !empty($nav['sub_nav'])): ?>
					<ul>
						<?php foreach ($nav['sub_nav'] as $sub_title => $sub_nav): ?>
							<li class="<?php echo $sub_nav['class']; ?>">
								<a class="<?php echo $sub_nav['class']; ?>" href="<?php echo $sub_nav['url']; ?>" title="<?php echo $sub_title; ?>">
									<?php echo $sub_title; ?>
								</a>
							</li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
			</li>
		<?php endforeach; ?>
	</ul>
<?php else: ?>
	<p class="quicklinks globalfooter-quicklinks">
		<?php $count = 0; ?>
		<?php foreach ($top_nav as $title => $nav): ?>
			<a href="<?php echo $nav['url']; ?>" class="<?php echo $nav['class']; ?>" title="<?php echo $title; ?>">
				<?php echo $title; ?>
			</a>
			<?php if ($count < count($top_nav) - 1): ?>
				&nbsp;|&nbsp;
			<?php endif; ?>
			<?php $count++; ?>
		<?php endforeach; ?>
	</p>
<?php endif; ?>

