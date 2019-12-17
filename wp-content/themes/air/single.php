<?php get_header(); ?>
<div id="Main">
    <div class="the_page">

        <?php
        get_template_part('parts/banner');
        
        if ( have_posts() ) : 
            while ( have_posts() ) : the_post();
                get_template_part('parts/post-full');
            endwhile; 
        endif;
        ?>
    </div>
</div>
<?php get_footer(); ?>