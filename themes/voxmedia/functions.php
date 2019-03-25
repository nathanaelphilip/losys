<?php

  // Strip

  remove_action( 'wp_head', 'wp_generator' ) ;
  remove_action( 'wp_head', 'wlwmanifest_link' ) ;
  remove_action( 'wp_head', 'rsd_link' ) ;
  remove_action( 'wp_head', 'feed_links', 2 );
  remove_action( 'wp_head', 'feed_links_extra', 3 );

  define( 'WP_POST_REVISIONS', 3);

  define( 'AUTOSAVE_INTERVAL', 120 );
