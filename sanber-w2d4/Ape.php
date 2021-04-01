<?php
    require_once('animal.php');

    class Ape extends Animal{
        public function __construct($name, $legs=2){
            parent::__construct($name=$name);

            $this->legs = $legs;
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

        public function yell(){
            return "Auooo<br>";
        }

        public function __destruct(){
            
        }
    }
?>