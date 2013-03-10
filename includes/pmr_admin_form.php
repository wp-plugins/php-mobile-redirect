<?php

function pmr_admin_menu() {
    $page_title = 'PHP Redirect Settings';
    $menu_title = 'PHP Redirect';
    $capability = 'manage_options';
    $menu_slug = 'pmr-settings';
    $function = 'pmr_myplugin_settings';
    add_options_page($page_title, $menu_title, $capability, $menu_slug, $function);
}
add_action('admin_menu', 'pmr_admin_menu');

function pmr_myplugin_settings() {

	global $pmr_options;
	
	ob_start(); ?>
		<div style="padding-bottom:50px;">
			<form method="post" action="options.php">
				<?php settings_fields('pmr_settings_group'); ?>
				<h4>PHP Mobile Redirect Settings</h4>
				<table>
					<tr>
						<td style="padding:15px;"><label class="description" for="pmr_settings[mobile_url]">Mobile Site URL:  </label></td>
						<td style="padding:15px;"><input id="pmr_settings[mobile_url]" name="pmr_settings[mobile_url]" type="text" value="<?php echo $pmr_options['mobile_url']; ?>" /></td>
						<td style="padding:15px;"><b>**URL must be in format www.test.com do not add http://</b></td>
					</tr>
					<tr>
						<td style="padding:15px;"><label class="description" for="pmr_settings[mobile_cookie]">Cookie Name:  </label></td>
						<td style="padding:15px;"><input id="pmr_settings[mobile_cookie]" name="pmr_settings[mobile_cookie]" type="text" value="<?php echo $pmr_options['mobile_cookie']; ?>" /></td>
						<td style="padding:15px;"><b>**Cookie is "mobile" by default</b></td>
					</tr>
					<tr>
						<td style="padding:15px;"><input type="submit" class="button-primary" value="Save Options" /></td>
					</tr>
				</table>
			</form>
		</div>
		<div>
			<h4>Mobile Redirect Code</h4>
			<p><b>Make certain you have added the following code to your mobile index page to set the cookie to bypass the redirect:</b></p>
			<textarea rows="4" cols="50"><?php echo'<?php';?>&#13;&#10;setcookie("mobile","m", time()+3600, "/");&#13;&#10;<?php echo'?>' ?></textarea>
		</div>
		<div style="padding-top:50px;">
			<h4>WordPress Design & WordPress Themes</h4>
			<p>
				<a href="http://www.code96wd.com"><img src="http://www.code96wd.com/wp-content/uploads/2013/03/Code-96-WordPress-Design.png"></a>
			</p>
		</div>

<?php
	
	echo ob_get_clean();

}

function pmr_register_settings() {
	register_setting('pmr_settings_group', 'pmr_settings');
}
add_action('admin_init', 'pmr_register_settings');