<?php

// Add a dynamic title tag support
add_theme_support('title-tag');
// add_theme_support('custom-logo');

function themeStyles()
{
  wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css');
  wp_enqueue_style('fontAwesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css');
  wp_enqueue_style('mainStyle', get_template_directory_uri() . "/style.css", array('bootstrap'));
  wp_enqueue_script('bootstrapJS', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js', array(), false, true);
  wp_enqueue_script('bootstrapJquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), false, true);
  wp_enqueue_script('stackpath', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), false, true);
  wp_enqueue_script('mainJs', get_template_directory_uri() . "/assets/js/main.js", array(), false, true);
}

add_action('wp_enqueue_scripts', 'themeStyles');


// Menus
function addMenus()
{
  $locations = array(
    'primary' => 'Desktop Primary Menu',
    'footer' => 'Footer Menu',
  );

  register_nav_menus($locations);
}

add_action('init', 'addMenus');

function themename_custom_logo_setup()
{
  $defaults = array(
    'height'               => 100,
    'width'                => 200,
    'flex-height'          => true,
    'flex-width'           => true,
    'header-text'          => array('site-title', 'site-description'),
    'unlink-homepage-logo' => true,
  );
  add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'themename_custom_logo_setup');
