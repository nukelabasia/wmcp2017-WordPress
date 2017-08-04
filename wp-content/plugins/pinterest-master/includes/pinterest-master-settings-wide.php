<?php
function pinterest_master_load_system_wide() {
global $wpdb, $blog_id;
	if(is_multisite()){
		$pinterest_master_system_wide = get_blog_option($blog_id, 'pinterest_master_system_wide');
		if ($pinterest_master_system_wide == "true"){
			$pinterest_master_system_wide_size = get_blog_option($blog_id, 'pinterest_master_system_wide_size');
			$pinterest_master_system_wide_shape = get_blog_option($blog_id, 'pinterest_master_system_wide_shape');
			$pinterest_master_system_wide_hover = get_blog_option($blog_id, 'pinterest_master_system_wide_hover');
			if ($pinterest_master_system_wide_hover == "true" ){
				if ($pinterest_master_system_wide_shape == "pinterest_master_system_wide_shape_circular" ){
					$buttonpinitshape_create = 'data-pin-round="true"';
					$buttonpinitsave_create = 'data-pin-save="false"';
					if ($pinterest_master_system_wide_size == "pinterest_master_system_wide_size_small" ){
						$buttonpinitsize_create = '';
					}
					if ($pinterest_master_system_wide_size == "pinterest_master_system_wide_size_large" ){
						$buttonpinitsize_create = 'data-pin-tall="true"';
					}
				}
				if ($pinterest_master_system_wide_shape == "pinterest_master_system_wide_shape_rectangular" ){
					$buttonpinitshape_create = '';
					$buttonpinitsave_create = 'data-pin-save="true"';
					if ($pinterest_master_system_wide_size == "pinterest_master_system_wide_size_small" ){
						$buttonpinitsize_create = '';
					}
					if ($pinterest_master_system_wide_size == "pinterest_master_system_wide_size_large" ){
						$buttonpinitsize_create = 'data-pin-tall="true"';
					}
				}
			$pinterest_master_system_wide_create = '<script async defer data-pin-hover="true" '.$buttonpinitsave_create.' '.$buttonpinitsize_create.' '.$buttonpinitshape_create.' src="//assets.pinterest.com/js/pinit.js"></script>';
			}
			else{
				$pinterest_master_system_wide_create = '<script async defer src="//assets.pinterest.com/js/pinit.js"></script>';
			}
		echo $pinterest_master_system_wide_create;
		}
	}
	else{
		$pinterest_master_system_wide = get_option('pinterest_master_system_wide');
		if ($pinterest_master_system_wide == "true"){
			$pinterest_master_system_wide_size = get_option('pinterest_master_system_wide_size');
			$pinterest_master_system_wide_shape = get_option('pinterest_master_system_wide_shape');
			$pinterest_master_system_wide_hover = get_option('pinterest_master_system_wide_hover');
			if ($pinterest_master_system_wide_hover == "true" ){
				if ($pinterest_master_system_wide_shape == "pinterest_master_system_wide_shape_circular" ){
					$buttonpinitshape_create = 'data-pin-round="true"';
					$buttonpinitsave_create = 'data-pin-save="false"';
					if ($pinterest_master_system_wide_size == "pinterest_master_system_wide_size_small" ){
						$buttonpinitsize_create = '';
					}
					if ($pinterest_master_system_wide_size == "pinterest_master_system_wide_size_large" ){
						$buttonpinitsize_create = 'data-pin-tall="true"';
					}
				}
				if ($pinterest_master_system_wide_shape == "pinterest_master_system_wide_shape_rectangular" ){
					$buttonpinitshape_create = '';
					$buttonpinitsave_create = 'data-pin-save="true"';
					if ($pinterest_master_system_wide_size == "pinterest_master_system_wide_size_small" ){
						$buttonpinitsize_create = '';
					}
					if ($pinterest_master_system_wide_size == "pinterest_master_system_wide_size_large" ){
						$buttonpinitsize_create = 'data-pin-tall="true"';
					}
				}
			$pinterest_master_system_wide_create = '<script async defer data-pin-hover="true" '.$buttonpinitsave_create.' '.$buttonpinitsize_create.' '.$buttonpinitshape_create.' src="//assets.pinterest.com/js/pinit.js"></script>';
			}
			else{
				$pinterest_master_system_wide_create = '<script async defer src="//assets.pinterest.com/js/pinit.js"></script>';
			}
		echo $pinterest_master_system_wide_create;
		}
	}
}
add_action( 'wp_footer', 'pinterest_master_load_system_wide' );
//add_action( 'admin_head', 'pinterest_master_load_system_wide' );
