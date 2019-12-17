<?php get_header(); ?>
<main id="Main">
    <?php get_template_part('parts/banner'); ?>
    <?php get_template_part('parts/menu'); ?>
    <?php
        if (have_posts()) : 
            while (have_posts()) : the_post();
            ?>
            <div id="thePage">
                <div class="the_post_thumbnail">
                    <?php the_post_thumbnail(); ?>
                </div>
                <h2 class="the_title">
                    <?php the_title(); ?>
                </h2>
                <div class="the_excerpt">
                    <?php the_content(); ?>
                </div>
                <div class="the_author">
                    <?php the_author(); ?>
                </div>
            </div>
            <?php 
            endwhile; 
        endif;
        ?>
    <?php get_template_part('parts/footer'); ?>
</main>
<?php get_footer(); ?>