<?php 

function images($images){
    echo get_template_directory_uri().'/images/'.$images;
}

function promo_setup(){
    //add feed link support
    add_theme_support('automatic-feed-links');
    //add title tag
    add_theme_support('title-tag');
    
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'promosite' ),
    ) );
}
add_action('after_setup_theme','promo_setup');

function promo_scripts(){
    
    //add boostrap style
    wp_enqueue_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css');
    //add general style
    wp_enqueue_style('generalcss',get_template_directory_uri().'/css/general.css');
    //add style to wordpress
    wp_enqueue_style('stylecss',get_stylesheet_uri());
    
    //adding bootstrap script
    wp_enqueue_script('bootstrap',get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'),'2016',true);
    
    // adding my own lovely script
    wp_enqueue_script('myscript',get_template_directory_uri().'/js/script.js',array('jquery'),'2016',true);
}
add_action('wp_enqueue_scripts','promo_scripts');

require_once('navwalker.php');
?>