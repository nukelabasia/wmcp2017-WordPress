<?php
function pinterest_master_load_system_wide() {
global $wpdb, $blog_id;
	if(is_multisite()){
		if (get_blog_option($blog_id, 'pinterest_master_system_wide') == "true" ){
			if (get_blog_option($blog_id, 'pinterest_master_system_wide_size') == "pinterest_master_system_wide_size_small" ){
				$pinterest_master_system_wide_size_create = '';
			}
			if (get_blog_option($blog_id, 'pinterest_master_system_wide_size') == "pinterest_master_system_wide_size_large" ){
				$pinterest_master_system_wide_size_create = 'data-pin-height="28"';
			}
			else{
				$pinterest_master_system_wide_size_create = '';
			}
			if (get_blog_option($blog_id, 'pinterest_master_system_wide_shape') == "pinterest_master_system_wide_shape_rectangular" ){
				$pinterest_master_system_wide_shape_create = '';
			}
			if (get_blog_option($blog_id, 'pinterest_master_system_wide_shape') == "pinterest_master_system_wide_shape_circular" ){
				$pinterest_master_system_wide_shape_create = 'data-pin-shape="round"';
			}
			else{
				$pinterest_master_system_wide_shape_create = '';
			}
	//		if (get_blog_option($blog_id, 'pinterest_master_system_wide_color') == "pinterest_master_system_wide_color_gray" ){
	//			$pinterest_master_system_wide_color_create = '';
	//		}
			if (get_blog_option($blog_id, 'pinterest_master_system_wide_color') == "pinterest_master_system_wide_color_red" ){
				$pinterest_master_system_wide_color_create = 'data-pin-color="red"';
			}
			if (get_blog_option($blog_id, 'pinterest_master_system_wide_color') == "pinterest_master_system_wide_color_white" ){
				$pinterest_master_system_wide_color_create = 'data-pin-color="white"';
			}
			else{
				$pinterest_master_system_wide_color_create = 'data-pin-color="red"';
			}
			if (get_blog_option($blog_id, 'pinterest_master_system_wide_hover') == "true" ){
				$pinterest_master_system_wide_hover_create = 'data-pin-hover="true"';
			}
			else{
				$pinterest_master_system_wide_hover_create = '';
			}
		$pinterest_master_system_wide_create = '<script type="text/javascript" async '.$pinterest_master_system_wide_color_create.' '.$pinterest_master_system_wide_shape_create.' '.$pinterest_master_system_wide_size_create.' '.$pinterest_master_system_wide_hover_create.' src="//assets.pinterest.com/js/pinit.js"></script>';
		}
		else{
		$pinterest_master_system_wide_create = '';
		}
	}
	else {
		if (get_option('pinterest_master_system_wide') == "true" ){
			if (get_option('pinterest_master_system_wide_size') == "pinterest_master_system_wide_size_small" ){
				$pinterest_master_system_wide_size_create = '';
			}
			if (get_option('pinterest_master_system_wide_size') == "pinterest_master_system_wide_size_large" ){
				$pinterest_master_system_wide_size_create = 'data-pin-height="28"';
			}
			else{
				$pinterest_master_system_wide_size_create = '';
			}
			if (get_option('pinterest_master_system_wide_shape') == "pinterest_master_system_wide_shape_rectangular" ){
				$pinterest_master_system_wide_shape_create = '';
			}
			if (get_option('pinterest_master_system_wide_shape') == "pinterest_master_system_wide_shape_circular" ){
				$pinterest_master_system_wide_shape_create = 'data-pin-shape="round"';
			}
			else{
				$pinterest_master_system_wide_shape_create = '';
			}
	//		if (get_option('pinterest_master_system_wide_color') == "pinterest_master_system_wide_color_gray" ){
	//			$pinterest_master_system_wide_color_create = '';
	//		}
			if (get_option('pinterest_master_system_wide_color') == "pinterest_master_system_wide_color_red" ){
				$pinterest_master_system_wide_color_create = 'data-pin-color="red"';
			}
			if (get_option('pinterest_master_system_wide_color') == "pinterest_master_system_wide_color_white" ){
				$pinterest_master_system_wide_color_create = 'data-pin-color="white"';
			}
			else{
				$pinterest_master_system_wide_color_create = 'data-pin-color="red"';
			}
			if (get_option('pinterest_master_system_wide_hover') == "true" ){
				$pinterest_master_system_wide_hover_create = 'data-pin-hover="true"';
			}
			else{
				$pinterest_master_system_wide_hover_create = '';
			}
		$pinterest_master_system_wide_create = '<script type="text/javascript" async '.$pinterest_master_system_wide_color_create.' '.$pinterest_master_system_wide_shape_create.' '.$pinterest_master_system_wide_size_create.' '.$pinterest_master_system_wide_hover_create.' src="//assets.pinterest.com/js/pinit.js"></script>';
		}
		else{
		$pinterest_master_system_wide_create = '';
		}
	}
echo $pinterest_master_system_wide_create;
}
add_action( 'wp_footer', 'pinterest_master_load_system_wide' );
add_action( 'admin_head', 'pinterest_master_load_system_wide' );
