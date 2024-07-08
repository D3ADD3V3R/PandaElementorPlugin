<?php
/**
 * Plugin Name: My Flip Card Plugin
 * Description: A plugin that adds a flip card widget to Elementor.
 * Version: 1.0.0
 * Author: Your Name
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

// Define constants
define( 'MY_FLIP_CARD_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'MY_FLIP_CARD_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

// Include the widget file
require_once MY_FLIP_CARD_PLUGIN_PATH . 'includes/widget-flip-card.php';

// Register widget
function register_flip_card_widget( $widgets_manager ) {
    require_once MY_FLIP_CARD_PLUGIN_PATH . 'includes/widget-flip-card.php';
    $widgets_manager->register( new \Elementor\Widget_Flip_Card() );
}
add_action( 'elementor/widgets/register', 'register_flip_card_widget' );

// Enqueue styles and scripts
function enqueue_flip_card_assets() {
    wp_enqueue_style( 'flip-card-style', MY_FLIP_CARD_PLUGIN_URL . 'css/flip-card.css' );
    wp_enqueue_script( 'flip-card-script', MY_FLIP_CARD_PLUGIN_URL . 'js/flip-card.js', array( 'jquery' ), '', true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_flip_card_assets' );
