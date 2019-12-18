<?php 
# From Smashing Magazine (copy)
class My_Custom_Walker extends Walker
{
    public $tree_type = 'category';

    public $db_fields = array ('parent' => 'parent', 'id' => 'term_id');

    public function start_lvl( &$output, $depth = 0, $args = array() ) {
        $output .= "<ul class='children'>\n";
    }

    public function end_lvl( &$output, $depth = 0, $args = array() ) {
        $output .= "</ul>\n";
    }

    public function start_el( &$output, $category, $depth = 0, $args = array(), $current_object_id = 0 ) {
        $output .= "<li>" . $category->name . "\n";
    }

    public function end_el( &$output, $category, $depth = 0, $args = array() ) {
        $output .= "</li>\n";
    }
}
?>