<nav class="navbar navbar-expand-md navbar-light bg-faded justify-content-end">
  <div class="container">
    <a class="navbar-brand" href="<?php get_home_url( ) ?>"><?php bloginfo( 'name' )?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-main" aria-controls="nav-main" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <?php
    wp_nav_menu([
      'menu'            => 'top',
      'theme_location'  => 'top',
      'container'       => 'div',
      'container_id'    => 'nav-main',
      'container_class' => 'collapse navbar-collapse',
      'menu_id'         => false,
      'menu_class'      => 'navbar-nav ml-auto mr-1',
      'depth'           => 2,
      'fallback_cb'     => 'bs4navwalker::fallback',
      'walker'          => new bs4navwalker()
    ]);
    ?>
  </div> 
</nav>