<?php
function university_files()
{
    // wp_enqueue_script('main-js', get_theme_file_uri('/js/scripts-bundled.js'), null, microtime(), true);


    wp_enqueue_style('google-font', '//fonts.googleapis.com/css?family=Comfortaa:300,400,700');
    wp_enqueue_style('google-font2', '//fonts.googleapis.com/css?family=Questrial');
    wp_enqueue_style('font-awesom', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('styleCSS', get_stylesheet_uri(), null, microtime());
}
add_action('wp_enqueue_scripts', 'university_files');
