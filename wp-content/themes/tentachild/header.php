<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

<!-- Ändra namn på sidan i fliken -->
  <title><?php bloginfo( 'name' ); ?></title>

<!-- För att se Wordpress admin menyn -->  
  <?php wp_head(); ?>
   
  </head>

  <body <?php echo body_class();?>>

    <div class="container">

      <div class="masthead">
        
          <nav class="navbar bg-faded rounded mb-3 navbar-toggleable-md">
            <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
              <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>
              <?php
                wp_nav_menu( array(
                  'theme_location'  => 'header-menu',
                  'container'     => 'div',
                  'container_class' => 'collapse navbar-collapse',
                  'container_id'      => 'navbarCollapse',
                  'menu_class'    => 'nav navbar-nav',
                  'fallback_cb'   => '__return_false',
                  'items_wrap'    => '<ul id="%1$s" class="%2$s ml-auto">%3$s</ul>',
                  'depth'       => 2,
                  'walker'      => new bootstrap_4_walker_nav_menu()
                ) );
              ?>
          </nav>
      </div>  

    </div> <!-- /container -->
