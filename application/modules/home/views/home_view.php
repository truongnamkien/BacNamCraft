<?php echo Modules::run('home/_pagelet_banner'); ?>

<?php echo Modules::run('product/_pagelet_hot_products'); ?>

<?php if (isset($notice) && !empty($notice)): ?>
    <script type='text/javascript'>
        $(document).ready(function() {
            show_alert('<?php echo $notice['content']; ?>');
        });
    </script>
<?php endif; ?>
