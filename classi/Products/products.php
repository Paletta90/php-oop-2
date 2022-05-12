<?php 

    class Products{
        public $name;
        public $price;

        // Costruttore
        public function __construct($_name, $_price){
            $this -> setName($_name);
            $this -> setPrice($_price);
        }

        // Setter
        public function setName($_name){
            return $this -> name = $_name;
        }
        public function setPrice($_price){
            return $this -> price = $_price;
        }

        // Getter
        public function getName(){
            return $this -> name;
        }
        public function getPrice(){
            return $this -> price;
        }
    }


?>