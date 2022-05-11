<?php 

    include __DIR__ . './../index.php';

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

    $crocchette = new Food('Crocchette per cani', 25, '05-2023', 1200);

    echo '<p>Nome prodotto: ' . $crocchette -> getName() . '</p>';
    echo '<p>Prezzo: ' . $crocchette -> getPrice() . '$</p>';
    echo '<p>Scadenza: ' . $crocchette -> getExpiryDate() . '</p>';
    echo '<p>Consumo: ' . $crocchette -> getCalorie() . 'Kcal</p>';

?>