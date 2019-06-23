<?php get_header() ?>
<div class="row justify-content-center">
    <h1 class="rdv-main-title">Publicaciones en la categoría <?php  ?></h1>
</div>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="row justify-content-center">
                <p><a id="rdv-enlaces-categoria" href="<?php the_permalink() ?>"><?php the_title() ?></a></p>
        </div>
        <?php endwhile; else : ?>
        <p><?php esc_html_e( 'No se ha encontrado ningún resultado.', 'rdv' ); ?></p>
<?php endif; ?>

<?php get_footer() ?>