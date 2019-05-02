<?php
/**
 * Plugin Name: Testimonial Elements for Avada
 * Description: This plugin is built for avada theme. 
 * @package Testimonial-elements-avada
 */


// Plugin Folder Path.
if ( ! defined( 'TEA_ADDON_PLUGIN_DIR' ) ) {
	define( 'TEA_ADDON_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
}




include_once wp_normalize_path( TEA_ADDON_PLUGIN_DIR . '/inc/class-testimonial.php' );



add_action( 'wp_loaded', 'TEA_addon_activate', 10 );


function TEA_addon_activate() {

 
	
	testimonial_elements_FB::get_instance();


}


/**
 * Include options from options folder.
 *
 * @access public
 * @since 1.1
 * @return void
 */
function fea_init_loader() {


	
	require_once 'elements/testimonial-maping.php';
	require_once 'inc/functions.php';

}

add_action( 'fusion_builder_before_init', 'fea_init_loader', 1 );



  