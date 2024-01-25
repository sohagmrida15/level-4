<?php
wp_enqueue_style('style-1', get_stylesheet_uri());
wp_enqueue_style('style-boot', get_template_directory_uri().'./assets/css/bootstrap.min.css');
wp_enqueue_script('script-boot-1', get_template_directory_uri().'./assets/js/bootstrap.bundle.min.js', array(), '1.0',true);


add_theme_support('custom-logo');
add_theme_support('title-tag');
add_theme_support('post-thumbnails');


register_nav_menus([
    'TM' => 'primary',
    'FM' => 'footer'
]);


register_sidebar([
    'name' => 'banner',
    'id' => 'ban',
    'before_widget'=> '',
    'after_widget' => ''
]);
register_sidebar([
    'name' => 'sidebar',
    'id' => 'sideimg',
    'before_widget'=> '',
    'after_widget' => ''
]);
?>