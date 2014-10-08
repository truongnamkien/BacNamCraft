<div id="catgoryHeaderContainer">
	<div id="categoryHeader">
		<h1 class="medium-text"><?php echo lang('contact_contact_title'); ?></h1>
	</div>
</div>

<div id="Main">
	<div id="primary">
		<div id="find-order">
			<p class="required"><?php echo lang('contact_message'); ?></p>

			<div class="form-content">
				<?php echo form_open('contact', array('id' => 'frm_contact'), FALSE); ?>
				<fieldset>
					<div class="input-step input-field">
						<label for="email"><?php echo lang('contact_email'); ?></label>
						<input value="<?php echo set_value('email'); ?>" name="email" id="email" type="text" />
						<?php echo form_error('email', '<div class="error_message">', '</div>'); ?>
					</div>
					<div class="input-step input-field">
						<label for="contact_content"><?php echo lang('contact_content'); ?></label>
						<textarea name="contact_content" id="contact_content" rows="10" cols="5"><?php echo set_value('contact_content'); ?></textarea>
						<?php echo form_error('contact_content', '<div class="error_message">', '</div>'); ?>
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


