<nav class="navbar navbar-expand-lg navbar-light bg-faded justify-content-end rdv-navbar">
  <div class="container">
    <div class="row">
      <div class="col">
      <a id="rdv-texto-navbar"class="navbar-brand" href="<?php home_url('/') ?>"><?php bloginfo( 'name' )?></a>
      <p id="rdv-texto-navbar"><?php bloginfo( 'description' ) ?></p>
      </div>
      <div class="col">
        <button class="navbar-toggler" id="rdv-btn-nav" type="button" data-toggle="collapse" data-target="#nav-main" aria-controls="nav-main" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <?php
        wp_nav_menu([
          'menu'            => 'top',
          'theme_location'  => 'top',
          'container'       => 'div',
          'container_id'    => 'nav-main',
          'container_class' => 'collapse navbar-collapse rdv-nav-collpase',
          'menu_id'         => false,
          'menu_class'      => 'navbar-nav ml-auto mr-1',
          'depth'           => 2,
          'fallback_cb'     => 'bs4navwalker::fallback',
          'walker'          => new bs4navwalker()
        ]);
        ?>
      </div>
    </div>
  </div> 
</nav>