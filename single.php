<?php get_header() ?> 
<div class="row"> 
    <div class="col">
        <h1><?php the_title() ?></h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <p>Publicado el <?php the_time('j \d\e\ F \d\e\ Y \|\ H:i ') ?></p>
        <p>Categorías: <?php the_category() ?></p>
        <p>Etiquetado en: <?php the_tags() ?></p>
    </div>
</div>
<div class="row">
    <div class="col">
        <p><?php the_excerpt() ?></p>
    </div>
</div>
<div class="row">
    <div class="col">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content() ?>
        <?php endwhile; else : ?>
                <p><?php esc_html_e( 'No se ha encontrado ningún resultado.', 'rdv' ); ?></p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer() ?>