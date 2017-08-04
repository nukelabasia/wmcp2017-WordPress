<?php
//Hook Widget
add_action( 'widgets_init', 'pinterest_master_widget_buttons' );
//Register Widget
function pinterest_master_widget_buttons() {
register_widget( 'pinterest_master_widget_buttons' );
}

class pinterest_master_widget_buttons extends WP_Widget {
	function __construct(){
	$widget_ops = array( 'classname' => 'Pinterest Master Buttons', 'description' => __('Advanced Follow me on Pinterest button, Pin It button in red or grey variant, Pin It hover wordpress photos button in red or grey variant. Check all the advanced options.', 'pinterest_master') );
	$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'pinterest_master_widget_buttons' );
	parent::__construct( 'pinterest_master_widget_buttons', __('Pinterest Master Buttons', 'pinterest_master'), $widget_ops, $control_ops );
	}
	
	function widget( $args, $instance ) {
	global $wpdb, $blog_id;
		extract( $args );
		//Our variables from the widget settings.
		$pinterest_title = isset( $instance['pinterest_title'] ) ? $instance['pinterest_title'] :false;
		$pinterest_title_new = isset( $instance['pinterest_title_new'] ) ? $instance['pinterest_title_new'] :false;
		$pinterestspacer ="'";
		$show_pinterestfollow = isset( $instance['show_pinterestfollow'] ) ? $instance['show_pinterestfollow'] :false;
		$pinterestusername = $instance['pinterestusername'];
		$show_pinterestpin = isset( $instance['show_pinterestpin'] ) ? $instance['show_pinterestpin'] :false;
		echo $before_widget;
		
		// Display the widget title
	if ( $pinterest_title ){
		if (empty ($pinterest_title_new)){
			$pinterest_title_new = constant('PINTEREST_MASTER_NAME');
			echo $before_title . $pinterest_title_new . $after_title;
		}
		else{
			echo $before_title . $pinterest_title_new . $after_title;
		}
	}
	else{
	}
	//Display Pinterest Follow Me Button
	if ( $show_pinterestfollow ){
		if(empty($pinterestusername)){
			$show_pinterestfollow_create = '<div style="padding-left:15px;"><font color="red">You forgot to Insert your Pinterest Username for the follow button.</font></div>';
		}
		else{
			$show_pinterestfollow_create = '<div style="padding-left:5px;"><a data-pin-do="buttonFollow" href="https://pinterest.com/'.$pinterestusername.'/">Pinterest</a></div>';
		}
	}
	else{
		$show_pinterestfollow_create = false;
	}
	//Display Pinterest Pin It Button
	if ( $show_pinterestpin ){
		if(is_multisite()){
			$pinterest_master_system_wide = get_blog_option($blog_id, 'pinterest_master_system_wide');
				if($pinterest_master_system_wide == "false"){
					echo '<font color="red">Go to Pinterest Master Settings page and Activate TechGasp Pinterest System.</font>';
				}
			$pinterest_master_system_wide_shape = get_blog_option($blog_id, 'pinterest_master_system_wide_shape');
			$pinterest_master_system_wide_size = get_blog_option($blog_id, 'pinterest_master_system_wide_size');
			if ($pinterest_master_system_wide_shape == "pinterest_master_system_wide_shape_circular" ){
				$buttonpinitshape_create = 'data-pin-round="true"';
				$buttonpinitsave_create = 'data-pin-save="false"';
				if ($pinterest_master_system_wide_size == "pinterest_master_system_wide_size_small" ){
					$buttonpinitsize_create = '';
					$buttonpinitsize_px = '';
				}
				if ($pinterest_master_system_wide_size == "pinterest_master_system_wide_size_large" ){
					$buttonpinitsize_create = 'data-pin-tall="true"';
					$buttonpinitsize_px = '';
				}
			}
			if ($pinterest_master_system_wide_shape == "pinterest_master_system_wide_shape_rectangular" ){
				$buttonpinitshape_create = '';
				$buttonpinitsave_create = 'data-pin-save="true"';
				if ($pinterest_master_system_wide_size == "pinterest_master_system_wide_size_small" ){
					$buttonpinitsize_create = '';
					$buttonpinitsize_px = '<img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_round_red_16.png" />';	
				}
				if ($pinterest_master_system_wide_size == "pinterest_master_system_wide_size_large" ){
					$buttonpinitsize_create = 'data-pin-tall="true"';
					$buttonpinitsize_px = '<img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_round_red_32.png" />';
				}
			}
		}
		else{
			$pinterest_master_system_wide = get_option('pinterest_master_system_wide');
				if($pinterest_master_system_wide == "false"){
					echo '<font color="red">Go to Pinterest Master Settings page and Activate TechGasp Pinterest System.</font>';
				}
			$pinterest_master_system_wide_shape = get_option('pinterest_master_system_wide_shape');
			$pinterest_master_system_wide_size = get_option('pinterest_master_system_wide_size');
			if ($pinterest_master_system_wide_shape == "pinterest_master_system_wide_shape_circular" ){
					$buttonpinitshape_create = 'data-pin-round="true"';
					$buttonpinitsave_create = 'data-pin-save="false"';
					if ($pinterest_master_system_wide_size == "pinterest_master_system_wide_size_small" ){
						$buttonpinitsize_create = '';
						$buttonpinitsize_px = '';
					}
					if ($pinterest_master_system_wide_size == "pinterest_master_system_wide_size_large" ){
						$buttonpinitsize_create = 'data-pin-tall="true"';
						$buttonpinitsize_px = '';
					}
			}
			if ($pinterest_master_system_wide_shape == "pinterest_master_system_wide_shape_rectangular" ){
				$buttonpinitshape_create = '';
				$buttonpinitsave_create = 'data-pin-save="true"';
				if ($pinterest_master_system_wide_size == "pinterest_master_system_wide_size_small" ){
					$buttonpinitsize_create = '';
					$buttonpinitsize_px = '<img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_round_red_16.png" />';	
				}
				if ($pinterest_master_system_wide_size == "pinterest_master_system_wide_size_large" ){
					$buttonpinitsize_create = 'data-pin-tall="true"';
					$buttonpinitsize_px = '<img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_round_red_32.png" />';
				}
			}
		}
	$show_pinterestpin_create = '<a data-pin-do="buttonPin" '.$buttonpinitsize_create.' '.$buttonpinitshape_create.' '.$buttonpinitsave_create.' href="https://www.pinterest.com/pin/create/button/">'.$buttonpinitsize_px.'</a>';
	}
	else{
	$show_pinterestpin_create = false;
	}

	echo '<div style="display:flex;"><div>' . $show_pinterestpin_create . '</div>' . $show_pinterestfollow_create . '</div>' .
		$after_widget;
	}
	//Update the widget
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		//Strip tags from title and name to remove HTML
		$instance['pinterest_title'] = strip_tags( $new_instance['pinterest_title'] );
		$instance['pinterest_title_new'] = $new_instance['pinterest_title_new'];
		$instance['show_pinterestfollow'] = $new_instance['show_pinterestfollow'];
		$instance['pinterestusername'] = $new_instance['pinterestusername'];
		$instance['show_pinterestpin'] = $new_instance['show_pinterestpin'];
		return $instance;
	}
	function form( $instance ) {
	$plugin_master_name = constant('PINTEREST_MASTER_NAME');
	//Set up some default widget settings.
	$defaults = array( 'pinterest_title_new' => __('Pinterest Master', 'pinterest_master'), 'pinterest_title' => true, 'pinterest_title_new' => false, 'show_pinterestfollow' => false, 'pinterestusername' => false, 'show_pinterestpin' => false );
	$instance = wp_parse_args( (array) $instance, $defaults );
	?>
		<br>
		<b>Check the buttons to be displayed:</b>
	<p>
	<img src="<?php echo plugins_url('images/techgasp-minilogo-16.png', dirname(__FILE__)); ?>" style="float:left; height:18px; vertical-align:middle;" />
	&nbsp;
	<input type="checkbox" <?php checked( (bool) $instance['pinterest_title'], true ); ?> id="<?php echo $this->get_field_id( 'pinterest_title' ); ?>" name="<?php echo $this->get_field_name( 'pinterest_title' ); ?>" />
	<label for="<?php echo $this->get_field_id( 'pinterest_title' ); ?>"><b><?php _e('Display Widget Title', 'pinterest_master'); ?></b></label></br>
	</p>
	<p>
	<label for="<?php echo $this->get_field_id( 'pinterest_title_new' ); ?>"><?php _e('Change Title:', 'pinterest_master'); ?></label>
	<br>
	<input id="<?php echo $this->get_field_id( 'pinterest_title_new' ); ?>" name="<?php echo $this->get_field_name( 'pinterest_title_new' ); ?>" value="<?php echo $instance['pinterest_title_new']; ?>" style="width:auto;" />
	</p>
<div style="background: url(<?php echo plugins_url('images/techgasp-hr.png', dirname(__FILE__)); ?>) repeat-x; height: 10px"></div>
	<p>
	<img src="<?php echo plugins_url('images/techgasp-minilogo-16.png', dirname(__FILE__)); ?>" style="float:left; height:18px; vertical-align:middle;" />
	&nbsp;
	<input type="checkbox" <?php checked( (bool) $instance['show_pinterestfollow'], true ); ?> id="<?php echo $this->get_field_id( 'show_pinterestfollow' ); ?>" name="<?php echo $this->get_field_name( 'show_pinterestfollow' ); ?>" />
	<label for="<?php echo $this->get_field_id( 'show_pinterestfollow' ); ?>"><b><?php _e('Display Follow Me Button', 'pinterest_master'); ?></b></label></br>
	</p>
	<p>
	<label for="<?php echo $this->get_field_id( 'pinterestusername' ); ?>"><?php _e('Pinterest Username:', 'pinterest_master'); ?></label></br>
	<input id="<?php echo $this->get_field_id( 'pinterestusername' ); ?>" name="<?php echo $this->get_field_name( 'pinterestusername' ); ?>" value="<?php echo $instance['pinterestusername']; ?>" style="width:auto;" />
	</p>
<div style="background: url(<?php echo plugins_url('images/techgasp-hr.png', dirname(__FILE__)); ?>) repeat-x; height: 10px"></div>
	<p>
	<img src="<?php echo plugins_url('images/techgasp-minilogo-16.png', dirname(__FILE__)); ?>" style="float:left; height:18px; vertical-align:middle;" />
	&nbsp;
	<input type="checkbox" <?php checked( (bool) $instance['show_pinterestpin'], true ); ?> id="<?php echo $this->get_field_id( 'show_pinterestpin' ); ?>" name="<?php echo $this->get_field_name( 'show_pinterestpin' ); ?>" />
	<label for="<?php echo $this->get_field_id( 'show_pinterestpin' ); ?>"><b><?php _e('Display Pin It Button', 'pinterest_master'); ?></b></label></br>
	</p>
	<p>
	<div class="description">Remember to visit the Pinterest Master Settings page to set pin-it / save button size, shape or automatic hover in all website photos.</div>
	</p>
	<p>
	<img src="<?php echo plugins_url('images/techgasp-minilogo-16.png', dirname(__FILE__)); ?>" style="float:left; width:18px; vertical-align:middle;" />
	&nbsp;
	<b><?php echo $plugin_master_name; ?> Website</b>
	</p>
	<p><a class="button-secondary" href="https://wordpress.techgasp.com/pinterest-master/" target="_blank" title="<?php echo $plugin_master_name; ?> Info Page">Info Page</a> <a class="button-secondary" href="https://wordpress.techgasp.com/pinterest-master-documentation/" target="_blank" title="<?php echo $plugin_master_name; ?> Documentation">Documentation</a> <a class="button-primary" href="https://wordpress.techgasp.com/pinterest-master/" target="_blank" title="Visit Website">Get Add-ons</a></p>
	<?php
	}
}
?>
