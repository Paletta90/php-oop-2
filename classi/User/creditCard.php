<?php 

    include __DIR__ . './../../trait/dati.php';

    class CreditCard{
        protected $number;
        protected $expiryCard;
        protected $money;

        // Uso il trait Dati
        use Dati;

        public function __construct($_name, $_number, $_expiryCard, $_money){

            $this -> setName($_name);
            $this -> setNumber($_number);
            $this -> setExpiryCard($_expiryCard);
            $this -> setMoney($_money);

        }

        // Setter
        public function setNumber($_number){
            $this -> number = $_number;
        }
        public function setExpiryCard($_expiryCard){
            $this -> expiryCard = $_expiryCard;
        }
        public function setMoney($_money){
            $this -> money = $_money;
        }


        // Getter
        public function getNumber(){
            return $this -> number;
        }
        public function getExpiryDate(){
            return $this -> expiryCard;
        }
        public function getMoney(){
            return $this -> money;
        }
    }

?>