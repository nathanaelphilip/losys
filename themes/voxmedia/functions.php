<?php

  // Strip

  remove_action( 'wp_head', 'wp_generator' ) ;
  remove_action( 'wp_head', 'wlwmanifest_link' ) ;
  remove_action( 'wp_head', 'rsd_link' ) ;
  remove_action( 'wp_head', 'feed_links', 2 );
  remove_action( 'wp_head', 'feed_links_extra', 3 );

  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );

  define( 'WP_POST_REVISIONS', 3);

  define( 'AUTOSAVE_INTERVAL', 120 );
