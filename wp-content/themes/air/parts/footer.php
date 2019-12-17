<footer id="Footer">
    <div class="subsection">
        <h3 class="subsection-title">Tags!</h3>
        <?php 
        //Il faudrait mettre une limite...
        $all_tags = get_tags(['hide_empty' => 0]);        
        if(!empty($all_tags)):
            foreach($all_tags as $tag):
                $url = get_tag_link($tag->term_id);
                ?>
                <a
                    class="tag-link" 
                    href="<?= $url ?>"
                >
                    #<?= ucfirst($tag->name) ?>
                </a>
                &nbsp;
                <?php
            endforeach;
        endif;
        ?>
    </div>
    <div class="subsection">
        <h3 class="subsection-title">Catégories!</h3>
        <?php 
        $categories = get_categories([
            'hide_empty' => 0
        ]);
        foreach($categories as $category):
            $url = get_category_link($category->term_id);
            ?>
            <a
                class="category-link" 
                href="<?= $url ?>"
            >
                <?= $category->name ?>
            </a>
            <?php
        endforeach;
        ?>
    </div>
    <div class="subsection"></div>
</footer>