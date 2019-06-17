<!-- Carga el header -->
<?php get_header() ?>
<!-- título -->
<div class="row"> 
    <h1 class="rdv-main-title">Post publicados 📖🤓</h1>
</div>
<!-- Carga los post init -->

<?php
    if ( have_posts() ) : while ( have_posts() ) : the_post(); 
?>
    <div class="row">
        <div class="col-sm-8">
            <div class="card">
            <div class="card-body rdv-card">
                <h5 class="card-title">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h5>
                <p class="card-text">
                    <?php the_excerpt() ?>
                </p>
                <a href="<?php the_permalink(); ?>" class="btn btn-primary rdv-button-post">Seguir leyendo</a>
            </div>
            </div>
        </div>
    </div>
    <!-- Paginación -->

    <?php endwhile; else : ?>    
    <p><?php esc_html_e( 'No se ha encontrado ningún resultado.', 'rdv' ); ?></p>
<?php endif; ?>
<!-- Carga los post end -->
<!-- Carga el footer -->
<?php get_footer() ?>