<form id="frmsearch" action="<?php echo site_url('search'); ?>">
	<fieldset>
		<div class="searchWrap">
			<input style="margin:3px 0 0 -2px;height:20px;width: 570px; color: rgb(102, 102, 102);" id="query" name="query" placeholder="<?php echo lang('search_frm_placeholder'); ?>" type="text" maxlength="50" autocomplete="off" />
			<button type="submit" id="goSearch" title="<?php echo lang('search_frm_placeholder'); ?>">
				<span class="screen-reader-only"><?php echo lang('search_frm_placeholder'); ?></span>
			</button>
		</div>
	</fieldset>
</form>

<script type="text/javascript">
	$(document).ready(function() {
		$('#frmsearch').live('submit', function(e) {
			var query = $.trim($("#query").val());
			if (query == '' || query == '<?php echo lang('search_frm_placeholder'); ?>') {
				e.preventDefault();
				show_alert('<?php echo lang('search_frm_empty_error'); ?>');
				return false;
			}
		});
	});
</script>
