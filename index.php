<!-- Carga el header -->
<?php get_header() ?>
<!-- título -->
<div class="row"> 
    <h1>Listado de post publicados</h1>
</div>
<!-- contenido -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="row">
        <div class="col-sm-8">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h5>
                <p class="card-text">
                    <?php the_excerpt() ?>
                </p>
                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Seguir leyendo</a>
            </div>
            </div>
        </div>
    </div>
<?php endwhile; else : ?>
        <p><?php esc_html_e( 'No se ha encontrado ningún resultado.', 'rdv' ); ?></p>
<?php endif; ?>
<!-- Carga el footer -->
<?php get_footer() ?>