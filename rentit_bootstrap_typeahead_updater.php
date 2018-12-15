<?php
/**
 * @package Rentit_Bootstrap_3_Typeahead_Updater
 * @version 1.0
 */
/*
Plugin Name: Rentit Bootstrap 3 Typeahead Updater (ok)
Plugin URI: https://wordpress.org/plugins/hello-dolly/
Description: Compatible with Bootstrap 3
Version: 1.0
Author URI: https://ma.tt/
Text Domain: Rentit_Bootstrap_3_Typeahead_Updater
*/
//SOURCE v bootstrap 3:https://github.com/bassjobsen/Bootstrap-3-Typeahead  =>>>>> we use edited version a small edit
//SOURCE v bootstrap 4:https://github.com/bassjobsen/typeahead.js-bootstrap4-css

//
/* add forntend */
add_action( 'wp_enqueue_scripts', 'Rentit_Bootstrap_3_Typeahead_Updater_dequeue_scripts', 400 );
add_action( 'wp_enqueue_scripts', 'Rentit_Bootstrap_3_Typeahead_Updater_enqueue_scripts', 400 );
/* add backend */
add_action( 'admin_enqueue_scripts', 'Rentit_Bootstrap_3_Typeahead_Updater_dequeue_scripts', 400 );
add_action( 'admin_enqueue_scripts', 'Rentit_Bootstrap_3_Typeahead_Updater_enqueue_scripts', 400 );
/******************************************/
//Updating scripts
/******************************************/
function Rentit_Bootstrap_3_Typeahead_Updater_dequeue_scripts() {
	wp_deregister_script( 'renita_bootstrap-typeahead' );
}
function Rentit_Bootstrap_3_Typeahead_Updater_enqueue_scripts() {
	wp_enqueue_script( 'renita_bootstrap-typeahead',plugins_url("Bootstrap-3-Typeahead/bootstrap3-typeahead-MYEDIT.js",__FILE__ ), array( 'renita_moment-with-locales' ), '4.0.2', true);
}
/*************************************
*************************************/
/* add backend */
add_action( 'admin_enqueue_scripts', 'Rentit_Bootstrap_3_Typeahead_Updater_dequeue_styles', 400 );
add_action( 'admin_enqueue_scripts', 'Rentit_Bootstrap_3_Typeahead_Updater_enqueue_styles', 400 );
/* add forntend */
/******************************************/
//Updating styles
/******************************************/
add_action( 'wp_enqueue_scripts', 'Rentit_Bootstrap_3_Typeahead_Updater_dequeue_styles', 400 );
add_action( 'wp_enqueue_scripts', 'Rentit_Bootstrap_3_Typeahead_Updater_enqueue_styles', 400 );
function Rentit_Bootstrap_3_Typeahead_Updater_dequeue_styles() {}
function Rentit_Bootstrap_3_Typeahead_Updater_enqueue_styles() {}


