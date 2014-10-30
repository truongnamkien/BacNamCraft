<div class="menuBox" id="product_menu">
    <a href="#" class="triggerHover fake"><?php echo lang('product_product'); ?></a>

    <?php if (!empty($page_nav)): ?>
        <ul id="MainMenu" class="gb-menu">
            <?php foreach ($page_nav as $title => $nav): ?>
                <li style="height: 35.6923px;" class="leftmenu">
                    <span style="cursor: default;">
                        <a href="<?php echo $nav['url']; ?>" title="<?php echo $title; ?>">
                            <?php echo $title; ?>
                        </a>
                    </span>

                    <?php if (isset($nav['sub_nav']) && !empty($nav['sub_nav'])): ?>
                        <div class="hover">
                            <div class="hover_ie7">
                                <ul class="first">
                                    <li class="lastl2">
                                        <a href="<?php echo $nav['url']; ?>" title="<?php echo $title; ?>">
                                            <?php echo $title; ?>
                                        </a>

                                        <ul class="lastNoBorder">
                                            <?php foreach ($nav['sub_nav'] as $sub_title => $sub_nav): ?>
                                                <li>
                                                    <a href="<?php echo $sub_nav['url']; ?>" title="<?php echo $sub_title; ?>">
                                                        <?php echo $sub_title; ?>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#product_menu').hover(function() {
            $(this).addClass('active');
        }, function() {
            $(this).removeClass('active');
        });
        $('.leftmenu').hover(function() {
            $(this).addClass('showMenu');
        }, function() {
            $(this).removeClass('showMenu');
        });
    });
</script>