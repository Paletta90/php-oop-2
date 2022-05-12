<?php 

    // include __DIR__ . './../products.php';

    class Food extends Products{
        protected $expiryDate;
        protected $calorie;
        protected $disponibilità;

        // Costruttore
        public function __construct($_name, $_price, $_expiryDate, $_calorie){
            
            // Setter padre
            parent:: __construct($_name, $_price);

            // Setter figlio
            $this -> setExpiryDate($_expiryDate);
            $this -> setCalorie($_calorie);
            $this -> setDisponibilità();
        }

        // Setter
        public function setExpiryDate($_expiryDate){
             $this -> expiryDate = $_expiryDate;
        }
        public function setCalorie($_calorie){
             $this -> calorie = $_calorie;
        }
        public function setDisponibilità(){
            // Disponibilità solo tra Maggio e Settembre
             if(date('m') >= '05' && date('m') <= '09'){
                 $this -> disponibilità = 'Si';
             }else{
                 $this -> disponibilità = 'No';
             }
        }

        // Getter
        public function getExpiryDate(){
            return $this -> expiryDate;
        }
        public function getCalorie(){
            return $this -> calorie;
        }
        public function getDisponibilità(){
            return $this -> disponibilità;
        }
    }

?>