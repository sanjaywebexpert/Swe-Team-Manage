<?php

/**
 * Fired during plugin activation
 *
 * @link       http://sanjaywebexpert.com
 * @since      1.0.0
 *
 * @package    Swe_Team_Management
 * @subpackage Swe_Team_Management/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Swe_Team_Management
 * @subpackage Swe_Team_Management/includes
 * @author     Sanjay Sharma <sanjayraghusharma@gmail.com>
 */
class Swe_Team_Management_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public function activate() {
		
		$team_layout_option_name = array(
			'carousel_loop_0' => 'true',
			'pagination_1' => 'true',
			'navigation_2' => 'true',
			'navigation_position_3' => 'Bottom Right',
			'autoplay_4'=>'true',
			'autoplay_pause_on_hover_6'=>'true',
			'autoplay_timeout_7'=>'5000',
			'margin_8'=>'15',
			'columns_in_desktop_9'=>'4',
			'columns_in_table_10'=>'2',
			'columns_in_mobile_11'=>'1',
			'show_team_name_12'=>'true',
			'show_team_designation_13'=>'true',
			'show_team_short_description'=>'true',
			'team_short_description_limit_14'=>'100',
			'show_hide_social_connection_15'=>'true',
			'social_link_target_16'=>'true',
			'team_name_font_size_17'=>'20',
			'team_name_font_weight_19'=>'400',
			'hover_overlay_color_20'=>'rgba(0,0,0,0.75)',
			'theme_color_21'=>'#fb8800',
		);
		
		if ( ! get_option('team_layout_option_name') ){	
			update_option('team_layout_option_name', $team_layout_option_name);
		}
	}

}
