<?php 
class CartonApp{

    public $stylesheets = [];
    public $scripts = [];

    public function setStyles($stylesheets){
        $this->stylesheets = $stylesheets;
    }

    public function setScripts($scripts){
        $this->scripts = $scripts;
    }

    public function loadStyles(){
        if(!empty($this->stylesheets) && is_array($this->stylesheets)){
            foreach($this->stylesheets as $stylesheet){
                wp_register_style(
                    $stylesheet,
                    get_template_directory_uri().'/'.$stylesheet.'.css',
                    '',
                    1,
                    'all'
                );
                wp_enqueue_style($stylesheet);
            }
        }
    }

    public function loadScripts(){
        if(!empty($this->scripts) && is_array($this->scripts)){
            foreach($this->scripts as $script){
                //Ma fonction wp
                wp_register_script(
                    $script,
                    get_template_directory_uri().'/'.$script.'.js',
                    'jquery',
                    1,
                    true
                );
                wp_enqueue_script('custom');
            }
        }
    }

}
?>