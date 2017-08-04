<?php
if(!class_exists('WP_List_Table')){
	require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
}
class pinterest_master_admin_settings_wide_table_options extends WP_List_Table {
	/**
	 * Display the rows of records in the table
	 * @return string, echo the markup of the rows
	 */
function display() {
global $wpdb, $blog_id;
//Set Buttons Size
$pinterest_master_system_wide_size_small = "pinterest_master_system_wide_size_small";
$pinterest_master_system_wide_size_large = "pinterest_master_system_wide_size_large";
//Set Buttons Shape
$pinterest_master_system_wide_shape_rectangular = "pinterest_master_system_wide_shape_rectangular";
$pinterest_master_system_wide_shape_circular = "pinterest_master_system_wide_shape_circular";
	if(is_multisite()){
	add_blog_option($blog_id, 'pinterest_master_system_wide', "true");
	add_blog_option($blog_id, 'pinterest_master_system_wide_size_small', $pinterest_master_system_wide_size_small);
	add_blog_option($blog_id, 'pinterest_master_system_wide_size_large', $pinterest_master_system_wide_size_large);
	add_blog_option($blog_id, 'pinterest_master_system_wide_shape_rectangular', $pinterest_master_system_wide_shape_rectangular);
	add_blog_option($blog_id, 'pinterest_master_system_wide_shape_circular', $pinterest_master_system_wide_shape_circular);
	}
	else{
	//Set Activate TechGasp Pinterest System and ON
	add_option('pinterest_master_system_wide', "true");
	add_option('pinterest_master_system_wide_size_small', $pinterest_master_system_wide_size_small);
	add_option('pinterest_master_system_wide_size_large', $pinterest_master_system_wide_size_large);
	add_option('pinterest_master_system_wide_shape_rectangular', $pinterest_master_system_wide_shape_rectangular);
	add_option('pinterest_master_system_wide_shape_circular', $pinterest_master_system_wide_shape_circular);
	}

//Save Post Options
if (isset($_POST['update_system_wide'])){
	if(is_multisite()){
		if (isset($_POST['pinterest_master_system_wide'])){
			update_blog_option($blog_id, 'pinterest_master_system_wide', $_POST['pinterest_master_system_wide']);
		}
		else{
			update_blog_option($blog_id, 'pinterest_master_system_wide', 'false' );
		}
		if (isset($_POST['pinterest_master_system_wide_size'])){
			update_blog_option($blog_id, 'pinterest_master_system_wide_size', $_POST['pinterest_master_system_wide_size']);
		}
		else{
			update_blog_option($blog_id, 'pinterest_master_system_wide_size', 'false' );
		}
		if (isset($_POST['pinterest_master_system_wide_shape'])){
			update_blog_option($blog_id, 'pinterest_master_system_wide_shape', $_POST['pinterest_master_system_wide_shape']);
		}
		else{
			update_blog_option($blog_id, 'pinterest_master_system_wide_shape', 'false' );
		}
		if (isset($_POST['pinterest_master_system_wide_hover'])){
			update_blog_option($blog_id, 'pinterest_master_system_wide_hover', $_POST['pinterest_master_system_wide_hover']);
		}
		else{
			update_blog_option($blog_id, 'pinterest_master_system_wide_hover', 'false' );
		}
	}
	else{
		if (isset($_POST['pinterest_master_system_wide'])){
			update_option('pinterest_master_system_wide', $_POST['pinterest_master_system_wide']);
		}
		else{
			update_option('pinterest_master_system_wide', 'false' );
		}
		if (isset($_POST['pinterest_master_system_wide_size'])){
			update_option('pinterest_master_system_wide_size', $_POST['pinterest_master_system_wide_size']);
		}
		else{
			update_option('pinterest_master_system_wide_size', 'false' );
		}
		if (isset($_POST['pinterest_master_system_wide_shape'])){
			update_option('pinterest_master_system_wide_shape', $_POST['pinterest_master_system_wide_shape']);
		}
		else{
			update_option('pinterest_master_system_wide_shape', 'false' );
		}
		if (isset($_POST['pinterest_master_system_wide_hover'])){
			update_option('pinterest_master_system_wide_hover', $_POST['pinterest_master_system_wide_hover']);
		}
		else{
			update_option('pinterest_master_system_wide_hover', 'false' );
		}
	}

?>
<div id="message" class="updated fade">
<p><strong><?php _e('Settings Saved!', 'pinterest_master'); ?></strong></p>
</div>
<?php
}
//nothing to post
else{}

//Lets get data from single and multi to populate the form

if(is_multisite()){
	$pinterest_master_system_wide = get_blog_option($blog_id, 'pinterest_master_system_wide');
	$pinterest_master_system_wide_size = get_blog_option($blog_id, 'pinterest_master_system_wide_size');
	$pinterest_master_system_wide_size_small = get_blog_option($blog_id, 'pinterest_master_system_wide_size_small');
	$pinterest_master_system_wide_size_large = get_blog_option($blog_id, 'pinterest_master_system_wide_size_large');
	$pinterest_master_system_wide_shape = get_blog_option($blog_id, 'pinterest_master_system_wide_shape');
	$pinterest_master_system_wide_shape_rectangular = get_blog_option($blog_id, 'pinterest_master_system_wide_shape_rectangular');
	$pinterest_master_system_wide_shape_circular = get_blog_option($blog_id, 'pinterest_master_system_wide_shape_circular');
	$pinterest_master_system_wide_hover = get_blog_option($blog_id, 'pinterest_master_system_wide_hover');
}
else{
	$pinterest_master_system_wide = get_option('pinterest_master_system_wide');
	$pinterest_master_system_wide_size = get_option('pinterest_master_system_wide_size');
	$pinterest_master_system_wide_size_small = get_option('pinterest_master_system_wide_size_small');
	$pinterest_master_system_wide_size_large = get_option('pinterest_master_system_wide_size_large');
	$pinterest_master_system_wide_shape = get_option('pinterest_master_system_wide_shape');
	$pinterest_master_system_wide_shape_rectangular = get_option('pinterest_master_system_wide_shape_rectangular');
	$pinterest_master_system_wide_shape_circular = get_option('pinterest_master_system_wide_shape_circular');
	$pinterest_master_system_wide_hover = get_option('pinterest_master_system_wide_hover');
}
?>
<form method="post" width='1'>
<fieldset class="options">

<table class="widefat" cellspacing="0">
	<thead>
		<tr>
			<th colspan="3"><h2><img src="<?php echo plugins_url('images/techgasp-minilogo-16.png', dirname(__FILE__)); ?>" style="float:left; height:18px; vertical-align:middle;" /><?php _e('&nbsp;System Wide Settings', 'pinterest_master'); ?></h2></th>
		</tr>
	</thead>

	<tfoot>
		<tr>
			<th colspan="3"></th>
		</tr>
	</tfoot>

	<tbody>
		<tr class="alternate">
			<th class="check-column" scope="row"><input name="pinterest_master_system_wide" id="pinterest_master_system_wide" value="true" type="checkbox" <?php echo $pinterest_master_system_wide == 'true' ? 'checked="checked"':''; ?> /></th>
			<td><label for="pinterest_master_system_wide"><b><?php _e('Activate TechGasp Pinterest System', 'pinterest_master'); ?></b></label></td>
			<td style="vertical-align:middle">Default is <b>On</b>, if off no shortcodes or widgets will be loaded.</td>
		</tr>
		<tr class="alternate">
			<th class="check-column" scope="row"></th>
			<td><label for="pinterest_master_system_wide_size"><b><?php _e('Select Pin-it Button Size:', 'pinterest_master'); ?></b></label></td>
			<td style="vertical-align:middle">
				<select id="pinterest_master_system_wide_size" name="pinterest_master_system_wide_size" style="width:165px">
					<option value="<?php echo $pinterest_master_system_wide_size_small; ?>" <?php echo $pinterest_master_system_wide_size == 'pinterest_master_system_wide_size_small' ? 'selected="selected"':''; ?>>Medium</option>
					<option value="<?php echo $pinterest_master_system_wide_size_large; ?>" <?php echo $pinterest_master_system_wide_size == 'pinterest_master_system_wide_size_large' ? 'selected="selected"':''; ?>>Large</option>
				</select>
			</td>
		</tr>
		<tr class="alternate">
			<th class="check-column" scope="row"></th>
			<td><label for="pinterest_master_system_wide_shape"><b><?php _e('Select Pin-it Button Shape:', 'pinterest_master'); ?></b></label></td>
			<td style="vertical-align:middle">
				<select id="pinterest_master_system_wide_shape" name="pinterest_master_system_wide_shape" style="width:165px">
					<option value="<?php echo $pinterest_master_system_wide_shape_rectangular; ?>" <?php echo $pinterest_master_system_wide_shape == 'pinterest_master_system_wide_shape_rectangular' ? 'selected="selected"':''; ?>>Rectangular</option>
					<option value="<?php echo $pinterest_master_system_wide_shape_circular; ?>" <?php echo $pinterest_master_system_wide_shape == 'pinterest_master_system_wide_shape_circular' ? 'selected="selected"':''; ?>>Circular</option>
				</select>
			</td>
		</tr>
		<tr class="alternate">
			<th><input name="pinterest_master_system_wide_hover" id="pinterest_master_system_wide_hover" value="true" type="checkbox" <?php echo $pinterest_master_system_wide_hover == 'true' ? 'checked="checked"':''; ?> /></th>
			<td><label for="pinterest_master_system_wide_hover"><b><?php _e('Activate Pin It Hover Button', 'pinterest_master'); ?></b></label></td>
			<td><b>TechGasp Pinterest System must be On</b>. Automatically displays the pin-it button the on mouse-over your wordpress photos.</td>
		</tr>
	</tbody>
</table>
<p class="submit"><input class='button-primary' type='submit' name='update_system_wide' value='<?php _e("Save Settings", 'pinterest_master'); ?>' id='submitbutton' /></p>
</fieldset>
</form>
<?php
	}
//CLASS ENDS
}
