<?php

// Load Custom scripts
add_action('wp_enqueue_scripts', 'enqueue_scripts');
function enqueue_scripts()
{
  wp_register_script(
    'Webpack-hook-cust-Scripts', // handle name
    get_stylesheet_directory_uri() . '/dist/js/scripts.bundle.js', // the URL of the script
    array('jquery'), // an array of dependent scripts
    filemtime(get_stylesheet_directory() . '/dist/js/scripts.bundle.js'),
    true // In footer?
  );
  wp_enqueue_script('Webpack-hook-cust-Scripts');
  wp_register_script(
    'Webpack-hook-cust-jQuery', // handle name
    get_stylesheet_directory_uri() . '/dist/js/jQuery.bundle.js', // the URL of the script
    array('jquery'), // an array of dependent scripts
    filemtime(get_stylesheet_directory() . '/dist/js/jQuery.bundle.js'),
    true // In footer?
  );
  wp_enqueue_script('Webpack-hook-cust-jQuery');
}

// Load Custom styles
add_action('wp_enqueue_scripts', 'enqueue_cust_styles', 11);
function enqueue_cust_styles()
{
  wp_register_style(
    'cust-styles', // handle name
    get_stylesheet_directory_uri() . '/dist/css/cust.styles.min.css', // the URL of the stylesheet
    array(), // an array of dependent styles
    filemtime(get_stylesheet_directory() . '/dist/css/cust.styles.min.css') // CacheBuster version number - https://stackoverflow.com/questions/46373184/why-does-home-url-not-work-with-filemtime-in-wordpress
    // CSS media type
  );
  wp_enqueue_style('cust-styles');
}


// Thumbnail Sizes
add_theme_support('post-thumbnails');
add_image_size('logo-large', 350, 75);
add_image_size('logo-regular', 235, 50);


if (function_exists('acf_add_options_page')) {

  acf_add_options_page(array(
    'page_title' => 'Global Settings',
    'menu_title' => 'Global Settings',
    'menu_slug' => 'global-settings',
    'capability' => 'edit_posts',
    'redirect' => false
  ));
}
 