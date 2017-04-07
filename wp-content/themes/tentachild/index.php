<?php
get_header();
?>

<div class="container">
  <div class="row">
    <div class="col-md-8">

    <?php
      if (have_posts()) {
        while (have_posts()) {
          the_post();
    ?>

      <article class="post">
        <header>
          <h1 class="the_title"><?php the_title(); ?></h1>

          <?php
            // check if the post or page has a Featured Image assigned to it.
          if ( has_post_thumbnail() ) {
              the_post_thumbnail();
            }
          ?>
        </header>

          <main class="the-content"> <!-- /textinnehåll --> 
            <?php the_excerpt(); ?>        
          </main>

      </article>

<?php
}

  } else {
    _e( 'Sorry, no posts matched your criteria.', 'tentachild' );
  }  
?>
 
    </div>
    
    <div class="col-md-4">

      <?php
          get_sidebar();
      ?>

    </div><!-- /col-md-4 -->
  </div><!-- /row -->
</div><!-- /container -->

<?php
get_footer();
?>

  

   