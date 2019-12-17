<?php 
get_header();
?>
<div id="Main">
    <?php get_template_part('parts/banner'); ?>
    <div class="category-template-header">
        <h1>
            Dans la catégorie : 
            <span class="the_category">
                <?php the_category() ?>
            </span>
        </h1>
    </div>
    <?php
    //Là c'est du classique : 

    if (have_posts()) : 
        while (have_posts() ) : the_post();
        get_template_part('parts/post');
        endwhile; 
        get_template_part('parts/pagination'); 
        
    else:
        echo '<p>no posts!</p>';
    endif;
    ?>
</div>
<?php
get_footer();
?>