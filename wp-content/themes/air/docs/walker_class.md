# Notes Smashing Magazine - Walker Class

Providing the Walker abstract class
Starting with WorPress 2.1

An abstract class does not produce output by itself. 
It has to be extended with a concrete child class that builds the HTML bricks for specific list of items. 

Walker_Category, Walker_Page, and several other Walker classes.

Tree-Like Data Structures

wp_list_categories template tag. 
Executes the Walker_Category class. 
Which actually builds the HTML structure. 

Defining *your own Walker extention*. In your theme's *functions.php*

Now that we've introduced the Walker properties and methods, we can explore one of its possible applications. 

Changing the HTML structure of the navigation menu. 

The **default markup** for **navigation menus** is produced by the **Walker_Nav_Menu** concrete class. 

Bon par defaut, pour utiliser wp_nav_nenu, il y a plein d'arguments 

    $defaults = array(
        'theme_location'     => ’,
        'menu'            => ’,
        'container'       => 'div',
        'container_class' => ’,
        'container_id'    => ’,
        'menu_class'         => 'menu',
        'menu_id'         => ’,
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => ’,
        'after'           => ’,
        'link_before'     => ’,
        'link_after'         => ’,
        'items_wrap'         => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'depth'           => 0,
        'walker'          => ’
    );

    wp_nav_menu($defaults);

Mais je ne sais pas si on va pouvoir les utiliser car on va faire une classe sur-mesure, qui se veut simple. 

# Extending the Walker_Nav_Menu class 

If yoou opt to extend the Walker class, you'll need to define all necessary properties and methods. 

Otherwise, if you choose to extend the concrete child class, you'll just need to define those methods whose output has to be changed. 

Bon avec ça et des **frameworks JS/CSS** comme **Bootstrap**, **Foundation** ou **Materialize**, on peut créer des menus déroulants, responsives, mega...

# Adding Fields to the WordPress Menu Items' Editing Box 

Well, that's a title !

The menu items are considered specific post types, and the values of the menu item's field are stored in the database as hidden custom fields. 

We will : 

    .Register a custom field for the navigation item
    .Save the new custom field's value
    .Set up a new Walker class for the edit menu tree

###### Est-ce que ça va permettre à l'administrateur de choisir son Walker ? 
Pour un menu par exemple ? 

First, we'll have to register a new custom field for the navigation menu item in the *functions.php* file : 

    Voir *sketch.php* (si je l'ai pas effacé depuis)

Just copy and paste the full **Walker_Nav_Menu_Edit** code from the **Trac** into your custom class and add the custom field markup as shown below. 

Mais ça c'est même pas encore le rendu. 

Custom_Foundation_Nav_Menu

The easiest way to proceed is to copy the code from the Walker_Nav_Menu class and paste it in our custom class. Editing it where necessary. 