<?php 

function learningWordPress_resources(){
 

    wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true );
  
    wp_enqueue_style('style', get_stylesheet_uri());





}

add_action('wp_enqueue_scripts', 'learningWordPress_resources');

function learningWordPress_setup(){
    //Add featured image support
    add_theme_support('post-thumbnails');
    

    //Navigation Menus

    register_nav_menus(array(
        'primary' => __( 'Primary Menu'), 
        'footer' => __( 'Footer Menu'),
        'logged-in' => __( 'logged-in'),
    ));    
    
    //Add Post Format Support
    add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image'));
}

add_action('after_setup_theme', 'learningWordPress_setup');

//Customize excerpt word count
function custom_excerpt_length(){
    return 25;
}
add_filter('excerpt_length', 'custom_excerpt_length');
//Takes off the P tags on Images in Blog Posts

function filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

add_filter('the_content', 'filter_ptags_on_images');


function wpb_widgets_init() {
register_sidebar( array(
'name' => 'Header Widget',
'id' => 'header-widget',
'before_widget' => '<div class="hw-widget">',
'after_widget' => '</div>',
'before_title' => '<h2 class="hw-title">',
'after_title' => '</h2>',
) );

}
add_action( 'widgets_init', 'wpb_widgets_init' );

