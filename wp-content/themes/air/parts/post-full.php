<div class="post">
    <div class="post-left">
        <?= the_post_thumbnail(); ?>
    </div>
    <div class="post-right">
        <h2>
            <a 
            href="<?php the_permalink() ?>">
            <?= the_title() ?>
        </a>
        </h2>
        <div>
            <?php the_content(); ?>
        </div>
        <div class="right-align">
            <div>
                Par <i><?php the_author() ?></i>,<br>
                Le <i><?php the_date() ?></i>
            </div>
        </div>
    </div>
</div>