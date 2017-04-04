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
        <h3 class="text-muted">WPtenta</h3>

        <nav class="navbar navbar-light bg-faded rounded mb-3">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-toggleable-md" id="navbarCollapse">
            <ul class="nav navbar-nav text-md-center justify-content-md-between">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Blogg</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Övrigt</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Kontakt</a>
              </li>                       
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </div>  

</div> <!-- /container -->
