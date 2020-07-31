<?php

require_once 'index.php';
 class ape extends animal{
    public $yell;
    public function get_name(){
        return 'Kera sakti'. $this->name;
    }

    public function yell(){
        return'Auooo'. $this->yell;
    }
 }
 class frog extends animal{
    public $jump;
    public function get_name(){
        return 'Buduk'. $this->name;
    }
    public function get_legs(){
        return '4'. $this->legs;
    }
    public function jump(){
        return 'Hop Hop'. $this->jump;
    }
}

?>