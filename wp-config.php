<?php

  require_once(__DIR__ . '/vendor/autoload.php');

  $dotenv = Dotenv\Dotenv::create(__DIR__);
  $dotenv->load();

  $table_prefix  = getenv('DB_PREFIX');

  define('DB_NAME', getenv('DB_NAME'));
  define('DB_USER', getenv('DB_USER'));
  define('DB_PASSWORD', getenv('DB_PASSWORD'));
  define('DB_HOST', getenv('DB_HOST'));

  define('DB_CHARSET', 'utf8');
  define('DB_COLLATE', '');

  define( 'WPMDB_LICENCE', getenv('WPMDB_LICENSE') );

  define('ENV_TYPE', getenv('ENV_TYPE') );
  define('SCRIPT_DEBUG', getenv('SCRIPT_DEBUG') );
  define('SAVEQUERIES', getenv('SAVEQUERIES') );
  define('WP_DEBUG', getenv('WP_DEBUG') );
  define('WP_DEBUG_LOG', getenv('WP_DEBUG_LOG') );
  define('WP_DEBUG_DISPLAY', getenv('WP_DEBUG_DISPLAY') );

  define('WP_DEFAULT_THEME', getenv('WP_DEFAULT_THEME'));

  define('AUTH_KEY', getenv('AUTH_KEY') );
  define('SECURE_AUTH_KEY', getenv('SECURE_AUTH_KEY') );
  define('LOGGED_IN_KEY', getenv('LOGGED_IN_KEY') );
  define('NONCE_KEY', getenv('NONCE_KEY') );
  define('AUTH_SALT', getenv('AUTH_SALT') );
  define('SECURE_AUTH_SALT', getenv('SECURE_AUTH_SALT') );
  define('LOGGED_IN_SALT', getenv('LOGGED_IN_SALT') );
  define('NONCE_SALT', getenv('NONCE_SALT') );

  define('WP_HOME_DIR', dirname(__FILE__) );

  define('WP_PLUGIN_DIR', dirname(__FILE__) . '/extensions' );
  define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/cms');
  define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '');
  define('WP_CONTENT_DIR', dirname(__FILE__) . '/media');
  define('WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/media');

  define('WPMU_PLUGIN_DIR', dirname(__FILE__) . '/mu-extensions' );
  define('WPMU_PLUGIN_URL', dirname(__FILE__) . '/mu-extensions' );

  define( 'DISALLOW_FILE_EDIT', true );

  /** Absolute path to the WordPress directory. */
  if ( !defined('ABSPATH') )
  	define('ABSPATH', dirname(__FILE__) . '/');

  /** Sets up WordPress vars and included files. */
  require_once(ABSPATH . 'wp-settings.php');
