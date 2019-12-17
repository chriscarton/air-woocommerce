<?php get_header(); ?>
<div id="Main">
    <?php
    get_template_part('parts/banner');
    get_template_part('parts/menu');
    get_template_part('parts/categories-list');
    
    if ( have_posts() ) : 
        while ( have_posts() ) : the_post();
            get_template_part('parts/post-full');
        endwhile; 
    endif;
    ?>
</div>
<?php get_footer(); ?>