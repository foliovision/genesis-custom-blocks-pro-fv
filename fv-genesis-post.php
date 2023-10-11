<?php

/*
Plugin Name: FV Genesis Post
Plugin URI: http://foliovision.com/
Description: Replace Genesis post block behaviour
Version: 7.5.40.727
Author: Foliovision
Author URI: http://foliovision.com/
*/

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

function fv_genesis_post() {
  wp_register_script( 'fv-genesis-post', 
    plugins_url( 'build/index.js', __FILE__ ),
    array( 'wp-blocks', 'wp-element','wp-editor', 'wp-components', 'wp-i18n', 'wp-dom-ready'), 
    filemtime( __DIR__.'/build/index.js' ) 
  );

  wp_enqueue_script( 'fv-genesis-post' );
}

add_action( 'init', 'fv_genesis_post' );