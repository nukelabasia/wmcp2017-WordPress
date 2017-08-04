<?php
/**
Plugin Name: Pinterest Master
Plugin URI: https://wordpress.techgasp.com/pinterest-master/
Version: 5.0.6
Author: TechGasp
Author URI: https://wordpress.techgasp.com
Text Domain: pinterest-master
Description: Pinterest Master adds the follow me on pinterest, pin it button, show pinterest profile and show pinterest board to your wordpress website.
License: GPL2 or later
*/
/*  Copyright 2013 TechGasp  (email : info@techgasp.com)
	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License, version 2, as 
	published by the Free Software Foundation.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
if(!class_exists('pinterest_master')) :
///////DEFINE///////
define( 'PINTEREST_MASTER_VERSION', '5.0.6' );
define( 'PINTEREST_MASTER_NAME', 'Pinterest Master' );

class pinterest_master{
public static function content_with_quote($content){
$quote = '<p>' . get_option('tsm_quote') . '</p>';
	return $content . $quote;
}
//SETTINGS LINK IN PLUGIN MANAGER
public static function pinterest_master_links( $links, $file ) {
if ( $file == plugin_basename( dirname(__FILE__).'/pinterest-master.php' ) ) {
		if( is_network_admin() ){
		$techgasp_plugin_url = network_admin_url( 'admin.php?page=pinterest-master' );
		}
		else {
		$techgasp_plugin_url = admin_url( 'admin.php?page=pinterest-master' );
		}
	$links[] = '<a href="' . $techgasp_plugin_url . '">'.__( 'Settings' ).'</a>';
	}
	return $links;
}

//END CLASS
}
add_filter('the_content', array('pinterest_master', 'content_with_quote'));
add_filter( 'plugin_action_links', array('pinterest_master', 'pinterest_master_links'), 10, 2 );
endif;

// HOOK ADMIN
require_once( dirname( __FILE__ ) . '/includes/pinterest-master-admin.php');
// HOOK ADMIN SETTINGS PAGE
require_once( dirname( __FILE__ ) . '/includes/pinterest-master-admin-settings-wide.php');
// HOOK FRONT SETTINGS WIDE
require_once( dirname( __FILE__ ) . '/includes/pinterest-master-settings-wide.php');
// HOOK ADMIN ADDONS
require_once( dirname( __FILE__ ) . '/includes/pinterest-master-admin-addons.php');
// HOOK ADMIN WIDGETS
require_once( dirname( __FILE__ ) . '/includes/pinterest-master-admin-widgets.php');
// HOOK WIDGET PINTEREST BUTTONS
require_once( dirname( __FILE__ ) . '/includes/pinterest-master-widget-buttons.php');
