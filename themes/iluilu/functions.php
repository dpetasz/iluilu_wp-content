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

function iluilu_post_types()
{
    register_post_type('slider', array(
        'public' => true,

        'labels' => array(
            'name' => 'Slider',
            'add_new_item' => 'Dodaj nowy slider',
            'edit_item' => 'Edytuj slider', //gdy wejdziemy do utworzonego wydarzenia to będziemy widzieć ten tytuł
            'all_items' => 'Wszystkie sliders', //na pasku zmienia domyślne Wydarzenia na to co podajemy
            'singular_name' => 'Slider',
        ),
        'menu_icon' => 'dashicons-slides',
    ));
}

add_action('init', 'iluilu_post_types');
