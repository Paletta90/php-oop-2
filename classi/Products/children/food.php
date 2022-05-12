<?php 

    // include __DIR__ . './../products.php';

    class Food extends Products{
        public $expiryDate;
        public $calorie;

        // Costruttore
        public function __construct($_name, $_price, $_expiryDate, $_calorie){
            
            // Setter padre
            parent:: __construct($_name, $_price);

            // Setter figlio
            $this -> setExpiryDate($_expiryDate);
            $this -> setCalorie($_calorie);
        }

        // Setter
        public function setExpiryDate($_expiryDate){
            return $this -> expiryDate = $_expiryDate;
        }
        public function setCalorie($_calorie){
            return $this -> calorie = $_calorie;
        }

        // Getter
        public function getExpiryDate(){
            return $this -> expiryDate;
        }
        public function getCalorie(){
            return $this -> calorie;
        }
    }

?>