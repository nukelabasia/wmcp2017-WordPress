<?php
/*
Plugin Name: Navayan TinyMCE Pretty Code
Plugin URI: http://wordpress.org/extend/plugins/navayan-tinymce-pretty-code/
Description: Adds buttons to TinyMCE editor to mark text it as code or prettify it
Version: 1.1
Author: Amol Nirmala Waman
Author URI: http://blog.navayan.com/
License: GPL2
Donate Link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=amolnw2778@gmail.com&item_name=Navayan TinyMCEPretty Code

Based on <a href="http://wordpress.org/extend/plugins/wysiwyg-inline-code-command/" target="_blank">WYSIWYG Inline Code Command</a>

*/

$this_url = plugins_url() . '/navayan-pretty-code/';

function nypc_TinymceInit() {
    global $pagenow;

    if (current_user_can ('edit_posts') &&
		current_user_can ('edit_pages') &&
		get_user_option('rich_editing') &&
		in_array ($pagenow, array('post.php', 'post-new.php', 'page.php', 'page-new.php'))
		){
		add_filter ('mce_external_plugins', 'nypc_TinymceAddPlugin' );
		add_filter ('mce_buttons', 'nypc_TinymceButtons' );
	}
}

function nypc_TinymceAddPlugin ($plugin_array) {
    $plugin_array['nypc_code'] 	= plugins_url ('default.js', __FILE__);
	$plugin_array['nypc_pretty']= plugins_url ('default.js', __FILE__);
    return $plugin_array;
}

function nypc_TinymceButtons ($buttons) {
    array_push ($buttons, '|', 'nypc_code');
	array_push ($buttons, '|', 'nypc_pretty');
    return $buttons;
}

add_action ('init', 'nypc_TinymceInit');
?>

<style>
.wp_themeSkin .mce_nypc_pretty span.mceIcon,
.wp_themeSkin .mce_nypc_code span.mceIcon{
    background: url('<?php echo $this_url;?>navayan-pretty-code.png') no-repeat top left;
}
.wp_themeSkin .mce_nypc_pretty:hover span.mceIcon{
    background-position: bottom left;
}
.wp_themeSkin .mce_nypc_code span.mceIcon{
    background-position: top right;
}
.wp_themeSkin .mce_nypc_code:hover span.mceIcon{
    background-position: bottom right;
}
</style>