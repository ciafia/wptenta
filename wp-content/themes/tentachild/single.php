<?php
get_header();
?>

<div class="container">
  <div class="row">
    <div class="col-md-8">

<?php //Om det finns inlägg annars skriv "sorry, no posts...."
    if ( have_posts() ) : 
      while ( have_posts() ) :
        the_post();
        ?>
          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
        <?php
      endwhile;
    else :
        _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
    endif;
?>
  </div> <!--/col-md-8 -->

  <div class="col-md-4">

<?php
 get_sidebar();
?>

    </div> <!--/col-md-4 -->
  </div> <!--/row -->
</div> <!--/container -->

<?php
get_footer();
?>