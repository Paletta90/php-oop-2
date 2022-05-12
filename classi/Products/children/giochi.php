<?php 

// include __DIR__ . './../products.php';
class Giochi extends Products {
    protected $size;
    protected $materiale;

    // Costruttore
    public function __construct($_name, $_price, $_quantità, $_size, $_materiale) {

        // Setter padre
        parent:: __construct($_name, $_price);

        // Setter figlio
        $this ->setSize($_size);
        $this ->setMateriale($_materiale);
        $this -> setQuantità($_quantità);
    }

    // Setter
    public function setSize($_size) {
        $this -> size = $_size;
    }
    public function setMateriale($_materiale) {
        $this -> materiale = $_materiale;
    }

    // Getter
    public function getSize() {
        return $this -> size;
    }
    public function getMateriale() {
        return $this -> materiale;
    }
}

?>