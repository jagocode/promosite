<?php 

function images($images){
    echo get_template_directory_uri().'/images/'.$images;
}


function promo_scripts(){
    
    //add boostrap style
    wp_enqueue_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css');
    //add style to wordpress
    wp_enqueue_style('stylecss',get_stylesheet_uri());
    
}
add_action('wp_enqueue_scripts','promo_scripts');
?>