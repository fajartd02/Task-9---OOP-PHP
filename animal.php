<?php
    class Animal{
        public $name;
        public function __construct($name){
            $this->name = $name;
        }
        public $legs = 2;
        public $cold_blooded = false;
    }
?>