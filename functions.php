<?php
function my_theme_assets(){
$themepath = get_template_directory_uri();

wp_enqueue_style('main-style', $themepath . '/assets/css/output.css', array(), filemtime(get_template_directory() . '/assets/css/output.css'));
}

add_action('wp_enqueue_scripts', 'my_theme_assets');

function my_theme_setup(){
    register_nav_menus([
        'primary' => 'Primary Menu',
        'footer' => 'Footer Menu',
        'order online' => 'Order online',
        'rewards' => 'Rewards'
    ]);

    add_theme_support('post-thumbnails');
//custom header
    add_theme_support('custom-header' , [
        "width" => 1920,
        "height" => 1080,
        "flex-width" => true,
        "flex-height" => true
    ]);

    //custom logo

    add_theme_support('custom-logo', [
        "width" => 50,
        "height" => 50,
        "flex-height" => true,
        "flex-width" => true
    ]);
}
add_action('after_setup_theme', 'my_theme_setup');

function my_theme_widgets(){
    register_sidebar([
        'name' => 'Main Sidebar',
        'id' => 'main-sidebar',
        'description' => 'Main sidebar widget area',
        'before_widget' => '<div class="mb-6">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="mb-3 text-xl font-bold">',
        'after_title' => '</h3>',
    ]);
}

add_action('widgets_init', 'my_theme_widgets');
?>