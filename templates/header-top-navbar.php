<header class="banner navbar" role="banner">
   <?php if( is_front_page() ) { ?>
  <div class="headerHome">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo home_url(); ?>/"><img class="headerLogo" src="<?php echo get_template_directory_uri(); ?>/assets/img/soarspacewhite.png"></a>
      </div>

      <nav class="pull-right collapse navbar-collapse" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
          endif;
        ?>
      </nav>
    </div>
    <div class="row">
      <div class="container">
        <div class="col-sm-12">
          <div class="welcomeText">
            <h1>simple, crisp, and clean design</h1>
            <h2>elegant and modern development</h2>
            <h3>Personally crafted websites for those who want the best. <a href="#">Learn More</a></h3>
          </div>
          <form class="form-inline" role="form">
            <div class="form-group">
              <label class="sr-only" for="exampleInputEmail2">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
            </div>
            <button type="submit" class="btn ctaButton">Get Quote</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="headerHomeOverlay">
  </div>
  <div class="headerHomeBackground">
  </div>
  <?php } else { ?>
   <div class="headerNonHome">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand tk-sarina" href="<?php echo home_url(); ?>/"><img class="headerLogo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png"></a>
      </div>

      <nav class="pull-right collapse navbar-collapse" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
          endif;
        ?>
      </nav>
    </div>
    </div>

  </div>
    <?php } ?>

  </div>
</header>
