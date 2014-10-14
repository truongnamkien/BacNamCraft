<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <title><?php echo PAGE_TITLE . (empty($PAGE_TITLE) ? '' : ' - ' . $PAGE_TITLE); ?></title>

        <meta name="robots" content="index, follow" />
        <meta name="viewport" content="width=1024, initial-scale=0.4" />

        <script type="text/javascript">
			var _asset_url = '<?php echo asset_url(); ?>';
        </script>

		<?php echo asset_link_tag('css/reset.css', 'stylesheet', 'text/css'); ?>
		<?php echo asset_link_tag('css/default.css', 'stylesheet', 'text/css'); ?>
		<?php echo asset_link_tag('css/templates.css', 'stylesheet', 'text/css'); ?>
		<?php echo asset_link_tag('css/jquery/jquery-ui-1.8.16.custom.css'); ?>
		<?php echo asset_link_tag('css/colorbox/colorbox.css'); ?>

        <!-- jQuery -->
		<?php echo asset_js('js/jquery/jquery-1.8.3.min.js'); ?>
		<?php echo asset_js('js/jquery/jquery-ui-1.9.2.custom.min.js'); ?>
		<?php echo asset_js('js/jquery/jquery.colorbox-min.js'); ?>
		<?php echo asset_js('js/jquery/jquery.carouFredSel.js'); ?>
		<?php echo asset_js('js/core.js'); ?>

		<?php echo Modules::run('navigator/_pagelet_meta_tag'); ?>
        <link href="<?php echo asset_url('images/favicon.ico'); ?>" rel="shortcut icon" type="image/x-icon" />

        <meta http-equiv="content-script-type" content="text/javascript" />
        <meta http-equiv="content-style-type" content="text/css" />
        <meta http-equiv="imagetoolbar" content="no" />
    </head>

    <body class="bgWrapper">
        <div id="fb-root"></div>
        <script>
			(function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id))
					return;
				js = d.createElement(s);
				js.id = id;
				js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
        </script>

		<div class="bgWrapper">
			<div id="Core">
				<div style="height: 115px;" id="Header" class="en">
					<div id="LogoWrapper">
						<a href="<?php echo site_url(); ?>" title="<?php echo PAGE_TITLE; ?>">
							<img src="<?php echo asset_url('images/logo.png'); ?>" />
						</a>
					</div>

					<div class="menuWrap">
						<?php echo Modules::run('navigator/_pagelet_main_menu'); ?>
					</div>

					<?php echo Modules::run('multi_lang/_icon_lang_list'); ?>
					<div class="clear"></div>

					<div class="globalMenuContainer changeCartBg">
						<?php echo Modules::run('navigator/_pagelet_product_menu'); ?>

						<div id="userWrapper">
							<?php echo Modules::run('search/_search_form'); ?>

                            <div id="cart_mini">
								<?php echo Modules::run('product/_pagelet_cart_content'); ?>
                            </div>
						</div>
					</div>
				</div>

				<div id="Content">
					<?php echo $PAGE_CONTENT; ?>
				</div>
				<div class="clear"></div>

				<div id="Footer">
					<div id="PageNotes" class="pagenotes">
						<?php echo Modules::run('navigator/_pagelet_subscribe'); ?>

						<?php echo Modules::run('navigator/_pagelet_main_menu', 'bottom'); ?>
						<div class="clear"></div>

						<?php echo Modules::run('navigator/_pagelet_footer'); ?>

						<div id="QuickLinkFooter" class="footerLine"></div>
					</div>
					<div class="endpage"></div>
				</div>
			</div>
		</div>
		<?php echo Modules::run('navigator/_pagelet_back_top'); ?>
    </body>
</html>

