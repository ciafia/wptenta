<?php

//Så att rullmenyn fungerar
require_once('wp-bootstrap-navwalker.php');

require_once("shortcodes.php");


function tentachild_setup(){
//huvudmeny
  register_nav_menu('header-menu', 'Header Menu');
}

add_action('after_setup_theme', 'tentachild_setup');

//registrera en sidebar
function tentachild_sidebars(){
	register_sidebar(array(
    'id'    => 'blog-sidebar',
		'name'	=> 'Blog Sidebar',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
	));
}
add_action('widgets_init', 'tentachild_sidebars');


add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {

//Ladda in bootstrap 4
	wp_enqueue_style( 'bootstrap4', "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css", 
  		'4.0.0-alpha.6');

//Ladda in egna styles
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/css/site.css', array('bootstrap4'), '20170317', 'all' );
   
 
//Ta bort gammal versionen först
  wp_deregister_script('jquery'); 
     
//Ladda in jquery   
  wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.1.1.slim.min.js',array (), '3.1.1', true);
 
//Ladda in tether
  wp_enqueue_script( 'tether', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.js', array ('jquery'), true);

//Ladda in bootstrap
  wp_enqueue_script( 'bootstrap4', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js', array ('jquery', 'tether'), true);

}

/**
 * Filter the "read more" excerpt string link to the post.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function tentachild_excerpt_more( $more ) {
    return sprintf( '<br><a class="read-more btn btn-primary" href="%1$s">%2$s</a>',
        get_permalink( get_the_ID() ),
        __( 'Read More', 'tentachild' )
    );
}
add_filter( 'excerpt_more', 'tentachild_excerpt_more' );


?>
