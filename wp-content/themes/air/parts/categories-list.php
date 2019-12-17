<div id="Categories">
    <?php 
    //bon ça c'est un vieux truc...
    wp_list_categories([
        'hide_empty' => 0
    ]);

    //Pour récupérer même les catégories vides
    /*
    $categories = get_categories([
        'hide_empty' => 0
    ]);
    debug($categories);
    */
    ?>
</div>