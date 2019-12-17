<div class="post-full">
    
    <div class="post-full-header">
        <?= the_post_thumbnail(); ?>
    </div>
    
    <div class="post-full-body">
        <h2 class="post-full-title">
            <?= the_title() ?>
        </h2>
        <div>
            <?php the_content(); ?>
        </div>
        <div class="post-full-infos">
                Par <i><?php the_author() ?></i>,<br>
                Le <i><?php the_date() ?></i>
            </div>
        </div>
    </div>


    <?php 
    //Bon là j'utilise pas get_directory_uri ? 
    get_template_part('parts/comments'); 
    ?>


</div>

