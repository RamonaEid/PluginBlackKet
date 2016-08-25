<?php

/*
Plugin Name: Blackkettle Ranch Plugin by Ramona Eid
Plugin URI: http://www.checklistme.com/Bio.html
Description: Do NOT deactivate or delete.  Necessary plugin for Tina Huston's Websites functionality.
Version: 0.0.9
Author: Ramona Eid
Author URI: http://www.checklistme.com/Bio.html
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages
Test Domain: my-toolset

Blackkettle Ranch Plugin is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Blackkettle Ranch Plugin is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Blackkettle Ranch Plugin. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
 */

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

add_action( 'init', 'blackkettle_init' );

function blackkettle_init() {
    include( plugin_dir_path(__FILE__) . 'admin/blackkettle-admin.php' );
    include( plugin_dir_path(__FILE__) . 'shortcodes/shortcodes.php' );

    
    /*wp_register_script($id, $path, $dependencies, $version, $in_footer);*/
    wp_register_script( 'blackkettle-full', plugins_url('js/blackkettle_full.js', __FILE__), array('jquery'), '082216', true );
    wp_register_script( 'jquery-ui-tabs', '/wp-includes/js/jquery/ui/jquery.ui.tabs.min.js', array('jquery') );

    add_action( 'wp_enqueue_scripts', 'blackkettle_enqueue_scripts' );
    add_action( 'wp_enqueue_scripts', 'blackkettle_check_unsemantic', 99999 );
    add_action( 'wp_enqueue_scripts', 'blackkettle_check_fontawesome', 99999 );

    add_shortcode('black-kettle-form', 'create_blackkettle_form');

    add_filter('upload_mimes', 'custom_upload_mimes');
    
    include_once( 'github-plugin-updater/updater.php' );

    define( 'WP_GITHUB_FORCE_UPDATE', true );

    if ( is_admin() ) {
        
        $config = array(
            'slug'                  => plugin_basename( __FILE__ ),
            'proper_folder_name'    => 'blackkettle-necessary',
            'api_url'               => 'https://api.github.com/repos/RamonaEid/PluginBlackKet',
            'raw_url'               => 'https://raw.github.com/RamonaEid/PluginBlackKet/master',
            'github_url'            => 'https://github.com/RamonaEid/PluginBlackKet',
            'zip_url'               => 'https://github.com/RamonaEid/PluginBlackKet/zipball/master',
            'sslverify'             => true,
            'requires'              => '3.0',
            'tested'                => '3.3',
            'readme'                => 'README.md',
            'access_token'          => ''
        );
        
        new WP_GitHub_Updater( $config );
        
    }

}

function blackkettle_enqueue_scripts() {
    wp_enqueue_style( 'jquery-style', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css' );
    //https://developer.wordpress.org/reference/functions/wp_enqueue_script/
    //wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer ); $handle(reuired) > all others optiuonal
    wp_enqueue_script( 'jquery-ui-tabs', array('jquery') );
    //wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
    wp_enqueue_script( 'blackkettle-full', plugins_url('js/blackkettle_full.js', __FILE__), array('jquery'), '082216', true );

}

?>