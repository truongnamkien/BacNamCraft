<div class="fRight mt10 mr20">
	<p class="fs14 fwb"><?php echo lang('static_content_home_subscribe_header'); ?></p>
	<div class="mt10">
		<div class="email_res">
			<label class="fs11 fwb" for="subscribe_email"><?php echo lang('static_content_home_customer_email'); ?></label>
			<form id="subscribe_form" action="<?php echo site_url('ajax/email_ajax/submit'); ?>" rel="async" method="post">
				<input class="w200 pa5" autocomplete="off" id="subscribe_email" name="subscribe_email" placeholder="<?php echo lang('static_content_home_email'); ?>" type="text" />
				<button class="button" type="submit" title="<?php echo lang('static_content_home_submit_btn'); ?>">
					<span class="buttonText"><?php echo lang('static_content_home_submit_btn'); ?></span>
				</button>
			</form>
		</div>
	</div>
</div>
<div class="clear"></div>