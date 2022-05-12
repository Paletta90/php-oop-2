<?php 

// include __DIR__ . './../products.php';
class Giochi extends Products {
    public $size;

    // Costruttore
    public function __construct($_name, $_price, $_size) {

        // Setter padre
        parent:: __construct($_name, $_price);

        // Setter figlio
        $this ->setSize($_size);
    }

    // Setter
    public function setSize($_size) {
        $this ->size=$_size;
    }

    // Getter
    public function getSize() {
        return $this -> size;
    }
}

?>