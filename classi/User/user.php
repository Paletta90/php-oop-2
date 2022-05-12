<?php class User {
    protected $name;
    protected $sign;
    protected $sconto;

    // Costruttore
    public function __construct($_name, $_sign) {
        $this ->setName($_name);
        $this ->setSign($_sign);
        $this ->setSconto();
    }

    // Setter
    public function setName($_name) {
        $this ->name=$_name;
    }

    public function setSign($_sign) {
        // Controllo se è un booleano
        if(is_bool($_sign)) {
            $this ->sign=$_sign;
        }

        else {
            throw new Exception("Inserire un booleano se iscritto o no");
        }

    }

    public function setSconto() {

        // Se l'user iscritto sconto del 20%
        if($this -> sign==true) {
            $this ->sconto=0.2;
        }

    }

    // Getter
    public function getName() {
        return $this ->name;
    }

    public function getSign() {

        return $this -> sign;

    }

    public function getSconto() {
        return $this ->sconto;
    }

}


?>