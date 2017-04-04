<?php

function tentachild_setup(){
  //huvudmeny
  register_nav_menu('header-menu', 'Header Menu');
}

add_action('after_setup_theme', 'tentachild_setup');

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

	wp_enqueue_style( 'bootstrap4', "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css", 
  		'4.0.0-alpha.6');


    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css', array('bootstrap4'), '20170317' );


     wp_deregister_script( 'jquery');


  wp_deregister_script('jquery'); //ta bort gammal version
     
  wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.1.1.slim.min.js',array (), '3.1.1', true);
 
  wp_enqueue_script( 'tether', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.js', array ('jquery'), true);

  wp_enqueue_script( 'bootstrap4', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js', array ('jquery', 'tether'), true);

}
?>
