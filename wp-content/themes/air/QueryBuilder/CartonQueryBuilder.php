<?php
class CartonQueryBuilder{

    public $args = [];
    public $query = null;

    public function setArgs($args){
        $this->args = $args;
    }

    public function buildQuery(){
        $query = new WP_Query($this->args);
        $this->query = $query;
    }

    public function getQuery(){
        return $this->query;
    }

}
?>