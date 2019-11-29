<?php
    namespace LoSys;

    use LoSys\Boot\Strip;
    use LoSys\Boot\Theme;

    use Timber\Timber;

    class Local
    {
      public static function boot ()
      {
        Strip::boot();
        Theme::boot();

        $timber = new Timber();

        Timber::$dirname = 'views';

        add_action('wp_enqueue_scripts', [__CLASS__, 'scripts']);
        add_action('wp_enqueue_scripts', [__CLASS__, 'styles']);
        add_action('wp_head', [__CLASS__, 'wp_head']);
      }

      public static function scripts ()
      {
        wp_deregister_script('jquery');
        wp_deregister_script( 'wp-embed' );

        wp_register_script('jquery', get_bloginfo('template_directory') . '/dist/vendor.js', '3.4.1', false, true);
        wp_register_script('app', get_bloginfo('template_directory') . '/dist/app.js', ['jquery'], false, true);
        wp_enqueue_script('app');

        wp_localize_script('app', 'LOSYS', ['ajax' => admin_url('admin-ajax.php')]);
      }

      public static function styles ()
      {

        wp_register_style('app', get_bloginfo('template_directory') . '/dist/app.css');
        wp_enqueue_style('app');
      }

      public static function wp_head ()
      {
      }
    }
