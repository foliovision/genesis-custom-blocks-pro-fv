<?php

/*
Plugin Name: Genesis Custom Blocks Pro - FV Tweaks
Plugin URI: http://foliovision.com/
Description: Improve Genesis Custom Blocks "Post" field behaviour to not forget the selected post when the post title has changed and you clicked into the field.
Version: 0.1
Author: Foliovision
Author URI: http://foliovision.com/
*/

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

function fv_genesis_custom_blocks_post_field_init() {
  wp_register_script( 'fv-genesis-custom-blocks-post-field', 
    plugins_url( 'build/index.js', __FILE__ ),
    array( 'wp-blocks', 'wp-element','wp-editor', 'wp-components', 'wp-i18n', 'wp-dom-ready'), 
    filemtime( __DIR__.'/build/index.js' ) 
  );

  wp_enqueue_script( 'fv-genesis-custom-blocks-post-field' );
}

add_action( 'init', 'fv_genesis_custom_blocks_post_field_init' );