<div id="catgoryHeaderContainer" class="categoryTemplate">
	<div id="categoryHeader">
		<h1 class="search-large-text"><?php echo lang('product_checkout_title'); ?></h1>
	</div>
	<div class="clear"></div>
</div>

<div id="Main">
	<div id="primary">
		<div id="find-order">
			<div class="form-content">
				<?php echo form_open('ajax/product_ajax/checkout', array('id' => 'frm_checkout', 'rel' => 'async'), FALSE); ?>
				<fieldset>
					<div class="input-step input-field">
						<label for="fullname"><?php echo lang('product_checkout_fullname'); ?></label>
						<input value="<?php echo set_value('fullname'); ?>" name="fullname" id="fullname" type="text" />
						<?php echo form_error('fullname', '<div class="error_message">', '</div>'); ?>
					</div>
					<div class="input-step input-field">
						<label for="email"><?php echo lang('product_checkout_email'); ?></label>
						<input value="<?php echo set_value('email'); ?>" name="email" id="email" type="text" />
						<?php echo form_error('email', '<div class="error_message">', '</div>'); ?>
					</div>
					<div class="input-step input-field">
						<label for="mobile"><?php echo lang('product_checkout_mobile'); ?></label>
						<input value="<?php echo set_value('mobile'); ?>" name="mobile" id="mobile" type="text" />
						<?php echo form_error('mobile', '<div class="error_message">', '</div>'); ?>
					</div>
					<div class="input-step input-field">
						<label for="address"><?php echo lang('product_checkout_shipping_address'); ?></label>
						<input value="<?php echo set_value('address'); ?>" name="address" id="address" type="text" />
						<?php echo form_error('address', '<div class="error_message">', '</div>'); ?>
					</div>
					
					<div class="input-step input-field">
						<label for="note"><?php echo lang('product_checkout_note'); ?></label>
						<textarea name="note" id="note" rows="10" cols="5"><?php echo set_value('note'); ?></textarea>
						<?php echo form_error('note', '<div class="error_message">', '</div>'); ?>
					</div>

					<div class="input-step input-field button-row">
						<button class="button" id="sign-in" type="submit" title="<?php echo lang('static_content_home_submit_btn'); ?>">
							<span class="buttonText"><?php echo lang('static_content_home_submit_btn'); ?></span>
						</button>							
					</div>
				</fieldset>
				<?php echo form_close(); ?>
			</div>
		</div>	
	</div>
</div>

