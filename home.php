<!-- Carga el header -->
<?php get_header() ?>
<!-- título -->
<div class="row justify-content-center">
    <h1 class="rdv-main-title">Últimas publicaciones 📖🤓</h1>
</div>
<!-- Carga los post init -->
<?php
    if ( have_posts() ) : while ( have_posts() ) : the_post(); 
?>
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="card">
            <div class="card-body rdv-card">
                <h5 class="card-title">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h5>
                <p id="rdv-fecha-post">Publicado el <?php the_time('j \d\e\ F \d\e\ Y \|\ H:i ') ?></p>
                <p class="card-text">
                    <?php the_excerpt() ?>
                </p>
                <p id="rdv-categorias-post">Categorías: <?php echo get_the_category_list( ', ' ) ?></p>
                <p></p>
                <a href="<?php the_permalink(); ?>" class="btn btn-primary rdv-button-post">Seguir leyendo</a>
            </div>
            </div>
        </div>
    </div>
    <?php endwhile; ?> 
    <div class="row justify-content-center">
        <?php echo rdv_bootstrap_pagination() ?>
    </div>
    <?php  else : ?>
        <?php esc_html_e( 'No se ha encontrado ningún resultado.', 'rdv' ); ?>
<?php endif; ?>
<!-- Carga los post end -->

<!-- Carga el footer -->
<?php get_footer() ?>