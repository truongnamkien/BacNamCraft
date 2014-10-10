<div class="product_category">
    <?php //echo Modules::run('product/_pagelet_hot_products'); ?>
</div>

<div class="w_home mb20">

    <div class="w300">
        <?php //echo Modules::run('navigator/_pagelet_connect', 'home'); ?>
    </div>        
</div>

<?php if (isset($notice) && !empty($notice)): ?>
    <script type='text/javascript'>
        $(document).ready(function() {
            show_alert('<?php echo $notice['content']; ?>');
        });
    </script>
<?php endif; ?>

	
					<?php //echo Modules::run('navigator/_pagelet_subscribe'); ?>
