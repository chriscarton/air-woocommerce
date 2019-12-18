<?php
# From Smashing Magazine : 
//https://www.smashingmagazine.com/2015/10/customize-tree-like-data-structures-wordpress-walker-class/
class My_Custom_Walker extends Walker{
    
    public $tree_type = 'category';

    public $db_fields = [
        'parent'=>'parent',
        'id'=>'term_id'
    ];

    public function start_lvl(&$output, $depth=0, $args=[]){
        $output.="<ul class='children'>\n";
    }

    public function end_lvl(&$output,$depth=0,$args=[]){
        $ouput.="</ul>\n";
    }

    public function start_el(&$output,$category,$depth=0,$args=[]){
        $output.="<li>".$category->name."\n";
    }

    public function end_el(&$output,$category,$depth,$args=[]){
        $output.="</li>\n";
    }

}
//Elle est sympa cette custom classe !
//Bref, comment l'utiliser ?

function my_init(){
    add_shortcode('list','my_list');
}
add_action('init','my_list');

function my_list($atts){
    $list = wp_list_categories([
        'echo'=>0, //keeps the result in a variable
        'walker'=>new My_Custom_Walker()
    ]);
    return $list;
}

# The Walker Class is defined in wp-includes/class-wp-walker.php
# Seulement les classes enfant vont produire le markup HTML

//Et là il y en a plein... 
/*
    Walker_Page 
    Walker_PageDropdown
    Walker_Category
    Walker_CategoryDropdown
    Walker_CategoryChecklist
    Walker_Comment
    Walker_Nav_Menu 
    Walker_Nav_Menu_Checklist
    Walker_Nav_Menu_Edit
*/

