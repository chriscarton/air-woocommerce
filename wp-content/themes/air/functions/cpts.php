<?php 
//Est ce que je ferais pas un fichier pour les CPTS

$services_cpt = new CPT([
    'post_type_name' => 'services',
    'singular' => 'Service',
    'plural' => 'Services',
    'slug' => 'service'
],[
    //Pour avoir Gutenberg il faut show_in_rest
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'thumbnail'),
    'publicly_queryable'=>true
]);

# Permet d'utiliser la traduction du thème 
/*
    Et ainsi avoir accès à la bonne traduction dans l'admin. 
    Bon pour l'instant, ma traduction air se limite au fichier CPT.php. 
*/
$services_cpt->set_textdomain('air');

//Pour mettre à jour le CPT si modification
//flush_rewrite_rules();
//Mais il ne faut pas le laisser



?>