<?php
    require_once('animal.php');

    class Frog extends Animal{
        public function __construct($name){
            parent::__construct($name);
        }

        public function getName(){
            return $this->name;
        }

        public function getLegs(){
            return $this->legs;
        }

        public function getBlood(){
            return $this->cold_blooded;
        }

        public function jump(){
            return "Hop Hop<br>";
        }

        public function __destruct(){
            
        }
    }
?>