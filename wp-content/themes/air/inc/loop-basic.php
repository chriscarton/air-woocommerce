<?php
if (have_posts()) : 
    while (have_posts()) : the_post();
        ?>
        <div class="the_post_thumbnail">
            <?php the_post_thumbnail(); ?>
        </div>
        <h2 class="the_title">
            <?php the_title(); ?>
        </h2>
        <div class="the_excerpt">
            <?php the_excerpt(); ?>
        </div>
        <div>
            <?php the_author(); ?>
        </div>
        <div class="right-align">
            <a 
                href="<?php the_permalink() ?>"
                class="waves-effect waves-light btn-small">
                LIRE LA SUITE
            </a>
        </div>
        <?php 
    endwhile; 
endif;
?>