<div class="wrap">
<h2><?php _e("Google Analytics"); ?> <small><?php _e("by DG"); ?></small></h2>
<?php if( isset($_POST['action']) && strtolower(strip_tags(trim($_POST['action']))) == "update" ) { ?>
    <div id="message" class="updated">
   	<?php
$dg_option = (isset($_POST['dg_default_anatics_code'])) ? trim($_POST['dg_default_anatics_code']) : "";
update_option( 'dg_default_anatics_code', $dg_option );
   	?>
        <p><strong><?php _e('Settings saved.') ?></strong></p>
    </div>
<?php } ?>
<form method="post" action="">
<?php wp_nonce_field('update-options'); ?>

<table class="form-table">
<tr valign="top">
<th scope="row"><?php _e("Google Analytics ID:"); ?></th>
<td><input type="text" name="dg_default_anatics_code" value="<?php echo get_option('dg_default_anatics_code'); ?>" /></td>
</tr>

<tr>
	<td><input type="hidden" name="action" value="update" /></td>
	<td><?php submit_button("Save Changes"); ?></td>
</tr>
</table>

</form>
</div>