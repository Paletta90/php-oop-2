<?php 

    class Food extends Products{
        protected $expiryDate;
        protected $calorie;
        protected $meseA;
        protected $meseB;
        protected $disponibilità;


        // Costruttore
        public function __construct($_name, $_price, $_quantità, $_expiryDate, $_calorie, $_meseA, $_meseB){
            
            // Setter padre
            parent:: __construct($_name, $_price);

            // Setter figlio
            $this -> setExpiryDate($_expiryDate);
            $this -> setCalorie($_calorie);
            $this -> setDisponibilità();
            $this -> setMesi($_meseA, $_meseB);
            $this -> setDisponibilità();
            $this -> setQuantità($_quantità);
        }

        // Setter
        public function setExpiryDate($_expiryDate){
             $this -> expiryDate = $_expiryDate;
        }
        public function setCalorie($_calorie){
             $this -> calorie = $_calorie;
        }
        public function setMesi($_meseA, $_meseB){
            $this -> meseA = $_meseA;
            $this -> meseB = $_meseB;
        }
        public function setDisponibilità(){
            // if($this -> meseA < $this -> meseB){
                // Disponibilità solo tra meseA e meseB
                if(date('m') >= $this -> meseA && date('m') <= $this -> meseB){
                    $this -> disponibilità = 'Si';
                }else{
                    $this -> disponibilità = 'No';
                }
            // }else{
                // throw new Exception('Inserire un range corretto');
            // }
           
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
        public function getMeseA(){
            return $this -> meseA;
        }
        public function getMeseB(){
            return $this -> meseB;
        }
    }

?>