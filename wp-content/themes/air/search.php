<?php
/*
Template Name: Search Page
*/
?>

<?php get_header() ?>
    <div id="Main">
        <?php get_template_part('parts/banner'); ?>
        <?php get_template_part('parts/menu'); ?>
        <h1>Recherche</h1>
        <?php get_search_form(); ?>

        <div id="searchResults">
            <?php
            global $wp_query;
            //Ça c'est le nombre de résultats (int)
            $total_results = $wp_query->found_posts;
            ?>

            <div id="searchResultsCount">

                <?php if($total_results>0):?>
                    <p class="lead">Il y a <?= $total_results ?> résultat(s)</p>
                <?php else: ?>
                    <p class="lead">Désolé. Il n'y a pas de résultat.</p>
                <?php endif; ?>
                
            </div>

            <?php 
                //Utiliser la traditionelle boucle avec $wp_query...
                //J'ai cherché quoi ? "minima"
                if($wp_query->have_posts()):
                    while($wp_query->have_posts()): $wp_query->the_post();
                    ?>
                    <div class="single-search-result">
                        <h3>
                            <?php the_title(); ?>
                        </h3>
                        <div>
                            <?php the_excerpt(); ?>
                        </div>
                        <div class="single-search-result-functions">
                            <a 
                                class="single-search-result-btn"
                                href="<?php the_permalink(); ?>">
                                Lire la suite
                            </a>
                        </div>
                    </div>
                    <?php
                    endwhile;
                endif;

                //ah bon j'ai pas 20 lignes c'est que je dois avoir une pagination ? Oh yeah.

            ?>

        </div>
    </div>

<?php get_footer(); ?>

<?php 
# Comment j'accède à cette page ?

//There is also a template file called searchform.php
//Check your WordPress Theme to see if it includes a page.php template file.

//In the Administration Screen go to Pages > Add New.
//In the title field enter Search.

# Using the Page Slug pour linker la page directement...
# <a href="/wordpress/search-page/" title="Search Page">Search Page</a>

//Est-ce qu'il fallait choisir le modèle de page ?
?>