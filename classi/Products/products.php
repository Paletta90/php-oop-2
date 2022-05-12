<?php 

    include __DIR__ . './../../trait/dati.php';

    class Products{
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
        public function setPrice($_price){

            // Il dato da inserire deve essere un numero
            if(is_numeric($_price)){

                // Il numero deve essere maggiore di zero
                if($_price > 0){

                    $this -> price = $_price;

                }else{
                    throw new Exception('Inserire un numero maggiore di zero');

                }

            }else{
                throw new Exception('Non è stato inserito un numero');
            }
             
        }
        public function setQuantità($_quantità){
            $this -> quantità = $_quantità;
        }

        // Getter
        public function getPrice(){
            return $this -> price;
        }
        public function getQuantità(){
            return $this -> quantità;
        }
    }


?>