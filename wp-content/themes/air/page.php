<?php get_header(); ?>

<div class="row">
    <main id="Main" class="col s12">
        <?php get_template_part('parts/banner'); ?>
        <div class="the_page">
            <?php
            require_once('inc/loop-basic.php'); 
            ?>
        </div>

        <h2>Et voici mes posts :</h2>
        <?php 

        

        //$query = $queryBuilder->buildQuery()->getQuery();


        /*
        $CartonRequest->setArgs(['post_type'=>'post']);
        $posts = $CartonRequest->getSomePosts();
        
        foreach($posts as $post):
            //debug();
            
            debug($post);
            ?>
            <div class="post">
                <h2>
                    <?= $post['title']; ?>
                </h2>
                <div>
                    <?= $post['content']; ?>
                </div>
                <div>
                    <?= $post['excerpt']; ?>
                </div>
                <hr>


                <div class="right-align">
                    <a 
                        href="<?php the_permalink($post['id']) ?>"
                        class="waves-effect waves-light btn-small">
                        LIRE LA SUITE
                    </a>
                </div>

                <br>
                <?= $post['created']; ?>
            </div>
            <?php

            //Bon là j'ai bien post par post...
            
            //var_dump($post);
        endforeach;
        //print_r($posts);
        */

        ?>
    </main>
</div>
<?php get_footer(); ?>