<?php trait Dati {
    public $name;

    // Setter
    public function setName($_name) {

        // Levo tutti gli spazi e controllo se sono stati utilizzati solo caratteri alfabetici
        if(ctype_alpha(str_replace(' ', '', $_name))) {
            $this ->name=$_name;
        }else{
            throw new Exception('Inserire nome con soli caratteri alfabetici');
        }

    }

    // Getter
    public function getName() {
        return $this ->name;
    }

}

?>