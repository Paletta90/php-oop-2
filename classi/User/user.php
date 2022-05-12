<?php 

    class User {
        public $name;
        public $sign;
        public $expiryCard;
        public $sconto;

        // Costruttore
        public function __construct($_name, $_sign, $_expiryCard) {
            $this -> setName($_name);
            $this -> setSign($_sign);
            $this -> setExpiryCard($_expiryCard);
            $this -> setSconto();
        }
            // Setter
            public function setName($_name) {
                return $this -> name = $_name;
            }

            public function setSign($_sign) {
                return $this -> sign = $_sign;
            }

            public function setExpiryCard($_expiryCard) {
                return $this -> expiryCard = $_expiryCard;
            }

            public function setSconto() {
                // Se l'user iscritto sconto del 20%
                if($this -> sign == true){
                    $this -> sconto = 0.2;
                }else{
                    $this -> sconto = '';
                }

            }

            // Getter
            public function getName() {
                return $this -> name;
            }

            public function getSign() {

                if($this -> sign == true){
                    return 'Utente inscritto';
                }else{
                    return 'Utente non inscritto';
                }

            }

            public function getExpiryCard() {
                return $this -> expiryCard;
            }

            public function getSconto() {
                return $this -> sconto;
            }
        
    }


?>