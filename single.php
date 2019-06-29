<?php get_header() ?> 
<div class="row justify-content-center"> 
    <h1 class="rdv-main-title"><?php the_title() ?></h1>
</div>
<div id="rdv-info-post-top" class="row justify-content-center rdv-info-post">
    <p>Publicado el <?php the_time('j \d\e\ F \d\e\ Y \|\ H:i ') ?></p>
</div>
<div id="rdv-info-post-bottom" class="row justify-content-center rdv-info-post">
    <p>Categorías: <?php echo get_the_category_list( ', ' ) ?></p>
</div>
<div class="row justify-content-center">
    <div class="col">
        <div class="rdv-contenido-post">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php the_content() ?>
            <?php endwhile; else : ?>
                    <p><?php esc_html_e( 'No se ha encontrado ningún resultado.', 'rdv' ); ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col">
        <?php comments_template() ?>
    </div>
</div>
<?php get_footer() ?>