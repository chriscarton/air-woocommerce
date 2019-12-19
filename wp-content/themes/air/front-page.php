<?php get_header(); ?>
<main id="Main">
    <?php 
    get_template_part('parts/banner'); 
    get_template_part('parts/menu'); 
    get_template_part('parts/categories-list'); 
    ?>
    <div class="the_page">
        <?php
        require_once('QueryBuilder/CartonQueryBuilder.php');
        $queryBuilder = new CartonQueryBuilder();
        
        $queryBuilder->setArgs([
            'p'=>null,
            'post_type'=>'post',
            'post_status'=>'publish',
        ]);
        
        $queryBuilder->buildQuery();
        $query = $queryBuilder->getQuery();

        if ($query->have_posts()) : 
            while ($query->have_posts() ) : $query->the_post();
                get_template_part('parts/post');
            endwhile; 
            set_query_var('query',$query);
            get_template_part('parts/pagination'); 
            
        else:
            echo '<p>no posts!</p>';
        endif;

        wp_reset_query();
        ?>
    </div>
    
    <?php 
        get_template_part('parts/services');
        get_template_part('parts/footer');
    ?>
</main>
<?php get_footer(); ?>