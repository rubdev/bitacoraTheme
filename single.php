<?php get_header() ?> 
<div class="row"> 
    <h1 class="text-center"><?php the_title() ?></h1>
</div>
<div class="row">
    <p>Categorías: <?php the_category() ?></p><br>
    <p>Etiquetas: <?php the_tags() ?></p>
</div>
<div class="row">
    <p><?php the_excerpt() ?></p>
</div>
<?php get_footer() ?>