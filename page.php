<?php get_header() ?> 
<div class="row justify-content-center">
    <div class="col col-sm-8">
        <div class="rdv-page-style">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();       
                        the_content(); 
                    endwhile; 
                endif; 
            ?>
        </div>
    </div>
</div>
<?php get_footer() ?> 