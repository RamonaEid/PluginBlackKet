<?php

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

function blackkettle_check_unsemantic() {
    global $wp_styles;
    $srcs = array_map('basename', (array) wp_list_pluck($wp_styles->registered, 'src') );
    if ( in_array('unsemantic-grid.min.css', $srcs) || in_array('unsemantic-grid.css', $srcs) ) {
        /* echo 'unsemantic-grid registered */
    } else {
        wp_enqueue_style( 'unsemantic-grid', plugins_url('css/unsemantic-grid.min.css', dirname(__FILE__) ), array(), '081316' );
    }
}

function blackkettle_check_fontawesome() {
    global $wp_styles;
    $srcs = array_map('basename', (array) wp_list_pluck($wp_styles->registered, 'src') );
    if ( in_array('font-awesome.min.css', $srcs) || in_array('font-awesome.css', $srcs) || in_array('fontawesome.min.css', $srcs) || in_array('fontawesome.css', $srcs) ) {
        /* echo 'font-awesome registered */
    } else {
        wp_enqueue_style( 'font-awesome', plugins_url('css/font-awesome.min.css', dirname(__FILE__) ), array(), '081316' );
    }
}

function custom_upload_mimes ( $existing_mimes=array() ) {
	// add your extension to the array
	$existing_mimes['vcf'] = 'text/x-vcard';
	return $existing_mimes;
}


?>