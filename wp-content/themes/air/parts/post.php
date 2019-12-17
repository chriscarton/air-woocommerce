<div class="post">
    <div class="post-left">
        <?= the_post_thumbnail(); ?>
    </div>
    <div class="post-right">
        <h2>
            <a 
                href="<?php the_permalink() ?>"
            >
                <?= the_title() ?>
            </a>
            <span class="the_category">/ <?php the_category(); ?></span>
        </h2>
        <div>
            <?php the_excerpt(); ?>
        </div>
        <div class="post-infos">
            
            <a 
                href="<?php the_permalink() ?>"
                class="read-next">
                Lire la suite
            </a>
            
        </div>
    </div>
</div>