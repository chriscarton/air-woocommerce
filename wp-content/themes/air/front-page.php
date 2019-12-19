<?php get_header(); ?>
<main id="Main">
    <?php 
    get_template_part('parts/banner'); 
    get_template_part('parts/menu'); 
    
    //Ça ça marche mais il faudrait le refaire avec un walker perso
    //get_template_part('parts/categories-list'); 
    ?>
    <div class="the_page">
        <?php
        
        get_template_part('loops/all_products');
        //get_template_part('loops/all_posts');
        ?>
    </div>
    
    <?php 
        get_template_part('parts/services');
        get_template_part('parts/footer');
    ?>
</main>
<?php get_footer(); ?>