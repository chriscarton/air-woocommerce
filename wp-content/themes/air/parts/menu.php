<nav id="Menu">
    <?php 
        //Ah ça je peux rien en faire...
        wp_nav_menu([
            'theme_location'=>'top-menu'
        ]);
        
        /*
        $locations = get_nav_menu_locations();
        debug($locations);
        */
        //$items = wp_get_nav_menu_items('top-menu');
        //debug($items);

        //WALKER CLASS ?

    ?>
</nav>