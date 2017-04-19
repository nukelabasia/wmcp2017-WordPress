<?php
	function menu_single_pinterest_admin_settings_wide(){
		if ( is_admin() )
		add_submenu_page( 'pinterest-master', 'Settings', 'Settings', 'manage_options', 'pinterest-master-admin-settings-wide', 'pinterest_master_admin_settings_wide' );
}

function pinterest_master_admin_settings_wide(){
$plugin_master_name = constant('PINTEREST_MASTER_NAME');
?>
<div class="wrap">
<h1>Settings</h1>
<?php
if(!class_exists('pinterest_master_admin_settings_wide')){
	require_once( dirname( __FILE__ ) . '/pinterest-master-admin-settings-wide-table.php');
}
//Prepare Table of elements
$wp_list_table = new pinterest_master_admin_settings_wide_table();
//Table of elements
$wp_list_table->display();

?>
</br>
<div style="background: url(<?php echo plugins_url('images/techgasp-hr.png', dirname(__FILE__)); ?>) repeat-x; height: 10px"></div>
</br>
<?php
if(!class_exists('pinterest_master_admin_settings_wide_table_options')){
	require_once( dirname( __FILE__ ) . '/pinterest-master-admin-settings-wide-table-options.php');
}
//Prepare Table of elements
$wp_list_table = new pinterest_master_admin_settings_wide_table_options();
//Table of elements
$wp_list_table->display();
?>
</br>
<h2>IMPORTANT: Makes no use of Javascript or Ajax to keep your website fast and conflicts free</h2>

<div style="background: url(<?php echo plugins_url('images/techgasp-hr.png', dirname(__FILE__)); ?>) repeat-x; height: 10px"></div>

<br>

<p>
<a class="button-secondary" href="https://wordpress.techgasp.com" target="_blank" title="Visit Website">More TechGasp Plugins</a>
<a class="button-secondary" href="https://wordpress.techgasp.com/support/" target="_blank" title="Facebook Page">TechGasp Support</a>
<a class="button-primary" href="https://wordpress.techgasp.com/pinterest-master/" target="_blank" title="Visit Website"><?php echo $plugin_master_name; ?> Info</a>
<a class="button-primary" href="https://wordpress.techgasp.com/pinterest-master-documentation/" target="_blank" title="Visit Website"><?php echo $plugin_master_name; ?> Documentation</a>
</p>
<?php
}
if( is_multisite() ) {
add_action( 'admin_menu', 'menu_single_pinterest_admin_settings_wide' );
}
else {
add_action( 'admin_menu', 'menu_single_pinterest_admin_settings_wide' );
}
