<?php
$queryBuilder = new CartonQueryBuilder();
        
$queryBuilder->setArgs([
    'p'=>null,
    'post_type'=>'product',
    'post_status'=>'publish',
]);
        
$queryBuilder->buildQuery();
$query = $queryBuilder->getQuery();

if ($query->have_posts()) : 
    ?>
    <div class="products">
        <?php
        while ($query->have_posts() ) : $query->the_post();
            ?>

            <div class="product">

                <h2><?php the_title(); ?></h2>
                <div class="the_post_thumbnail">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="the_excerpt">
                    <?php the_excerpt(); ?>
                </div>
                <a
                    href="<?php the_permalink();?>"
                >
                    <?php the_permalink();?>
                </a>

            </div>
            <?php
        endwhile; 
        ?>
    </div>
    <?php
    set_query_var('query',$query);
    get_template_part('parts/pagination'); 
            
else:
    echo '<p>no products!</p>';
endif;

wp_reset_query();
?>