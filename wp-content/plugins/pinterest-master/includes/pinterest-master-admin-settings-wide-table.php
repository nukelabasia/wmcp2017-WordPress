<?php
if(!class_exists('WP_List_Table')){
	require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
}
class pinterest_master_admin_settings_wide_table extends WP_List_Table {
	/**
	 * Display the rows of records in the table
	 * @return string, echo the markup of the rows
	 */
	function display() {
?>
<table class="widefat" cellspacing="0">
	<thead>
		<tr>
			<th><h2><img src="<?php echo plugins_url('images/techgasp-minilogo-16.png', dirname(__FILE__)); ?>" style="float:left; height:18px; vertical-align:middle;" /><?php _e('&nbsp;Instructions', 'pinterest_master'); ?></h2></th>
		</tr>
	</thead>

	<tfoot>
		<tr>
			<th></th>
		</tr>
	</tfoot>

	<tbody>
		<tr class="alternate">
			<td>
				<p>These Settings apply to all shortcodes and widgets. Pinterest API only allows one instance to be loaded per page. Pinterest Master avoids just that and allows you to load all widgets, shortcodes and buttons into a single page.</p>
				<p>This is the central place where you can easily control the pinterest save button hover, size and shape. Make sure the <b>Activate TechGasp Pinterest System</b> is <b>On</b>.</p>
			</td>
		</tr>
	</tbody>
</table>
<?php
		}
}
