<section id="Services">

    <h3 style="text-align:center;">Services</h3>

    <div class="inner">
        <?php 
        $queryBuilder = new CartonQueryBuilder();
        $queryBuilder->setArgs([
            'p'=>null,
            'post_type'=>'services',
            'post_status'=>'publish',
        ]);
        $queryBuilder->buildQuery();
        $query = $queryBuilder->getQuery();

        if ($query->have_posts()) : 
            while ($query->have_posts() ) : $query->the_post();

                ?>
                <div class="item">
                    <h2><?php the_title(); ?></h2>
                    <div class="the_post_thumbnail">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="the_content">
                        <?php the_content(); ?>
                    </div>
                </div>
                <?php

            endwhile; 
        else:
            echo '<p>no posts!</p>';
        endif;

        wp_reset_query();
        ?>
    </div>
</section>