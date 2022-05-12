<?php 

    class User {
        protected $name;
        protected $sign;
        protected $sconto;

        // Costruttore
        public function __construct($_name, $_sign) {
            $this -> setName($_name);
            $this -> setSign($_sign);
            $this -> setSconto();
        }
            // Setter
            public function setName($_name) {
                return $this -> name = $_name;
            }

            public function setSign($_sign) {
                return $this -> sign = $_sign;
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
                    return 'Utente inscritto - ha diritto a 20% di sconto';
                }else{
                    return 'Utente non inscritto - non ha diritto allo sconto';
                }

            }
            public function getSconto() {
                return $this -> sconto;
            }
        
    }


?>