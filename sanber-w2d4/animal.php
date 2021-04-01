<?php
    class Animal {
        protected $name;
        protected $legs = 4;
        protected $cold_blooded = "no";

        public function __construct($name){
            $this->name = $name;
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

        public function __destruct(){

        }
    }
?>