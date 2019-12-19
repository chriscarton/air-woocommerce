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


        //Faut que je documente ceci... 
        if ($query->have_posts()) : 
            while ($query->have_posts() ) : $query->the_post();

                ?>
                <div class="item">
                    <h2><?php the_title(); ?></h2>
                    <div class="the_content">
                        <?php the_content(); ?>
                    </div>
                </div>
                <?php

            endwhile; 
        else:
            echo '<p>no posts!</p>';
        endif;
        ?>
    </div>
</section>