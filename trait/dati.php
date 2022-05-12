<?php 

    trait Dati{
        public $name;

        // Setter
        public function setName($_name){
            $this -> name = $_name;
        }

        // Getter
        public function getName(){
            return $this -> name;
        }
        
    }

?>