<?php

/*

Jappix - An open social platform
This is the main configuration form (install & manager)

~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~

License: AGPL
Author: Valérian Saliou
Contact: http://project.jappix.com/contact
Last revision: 27/10/10

*/

// Checks the checkboxes which are set "on"
$checked = ' checked="checked"';

// Host locking
if($lock_host == 'on')
	$check_lock_host = $checked;
else
	$check_lock_host = '';

// Anonymous mode
if($anonymous_mode == 'on')
	$check_anonymous_mode = $checked;
else
	$check_anonymous_mode = '';

// HTTPS store
if($https_storage == 'on')
	$check_https_storage = $checked;
else
	$check_https_storage = '';

// Encryption
if($encryption == 'on')
	$check_encryption = $checked;
else
	$check_encryption = '';

// Compression
if($compression == 'on')
	$check_compression = $checked;
else
	$check_compression = '';

?>

<fieldset>
	<legend><?php _e("Service"); ?></legend>
	
	<label for="service_name"><?php _e("Service name"); ?></label><input id="service_name" type="text" name="service_name" value="<?php echo $service_name; ?>" maxlength="14" />
	
	<label for="service_desc"><?php _e("Service description"); ?></label><input id="service_desc" type="text" name="service_desc" value="<?php echo $service_desc; ?>" maxlength="30" />
</fieldset>

<fieldset>
	<legend><?php _e("Connection"); ?></legend>
	
	<label for="jappix_resource"><?php _e("Resource"); ?></label><input id="jappix_resource" type="text" name="jappix_resource" value="<?php echo $jappix_resource; ?>" maxlength="1023" />
	
	<label for="lock_host"><?php _e("Lock the host"); ?></label><input id="lock_host" type="checkbox" name="lock_host"<?php echo $check_lock_host; ?> />
	
	<label for="anonymous_mode"><?php _e("Anonymous mode"); ?></label><input id="anonymous_mode" type="checkbox" name="anonymous_mode"<?php echo $check_anonymous_mode; ?> />
</fieldset>

<fieldset>
	<legend><?php _e("Advanced"); ?></legend>
	
	<label for="https_storage"><?php _e("HTTPS storage"); ?></label><input id="https_storage" type="checkbox" name="https_storage"<?php echo $check_https_storage; ?> />
	
	<label for="encryption"><?php _e("Encryption"); ?></label><input id="encryption" type="checkbox" name="encryption"<?php echo $check_encryption; ?> />
	
	<label for="compression"><?php _e("Compression"); ?></label><input id="compression" type="checkbox" name="compression"<?php echo $check_compression; ?> />
			
	<input type="hidden" name="developer" value="<?php echo $developer; ?>" />
</fieldset>
