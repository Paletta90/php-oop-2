<?php 

    include __DIR__ . './../../trait/dati.php';

    class Products{
        // protected $name;
        protected $price;
        protected $quantità;

        // Uso il trait Dati
        use Dati;

        // Costruttore
        public function __construct($_name, $_price){
            $this -> setName($_name);
            $this -> setPrice($_price);
        }

        // Setter
        // public function setName($_name){
        //      $this -> name = $_name;
        // }
        public function setPrice($_price){
             $this -> price = $_price;
        }
        public function setQuantità($_quantità){
            $this -> quantità = $_quantità;
        }

        // Getter
        // public function getName(){
        //     return $this -> name;
        // }
        public function getPrice(){
            return $this -> price;
        }
        public function getQuantità(){
            return $this -> quantità;
        }
    }


?>