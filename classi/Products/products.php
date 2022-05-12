<?php class Products {
    protected $price;
    protected $quantità;

    // Uso il trait Dati
    use Dati;

    // Costruttore
    public function __construct($_name, $_price) {
        $this ->setName($_name);
        $this ->setPrice($_price);
    }

    // Setter
    public function setPrice($_price) {

        // Il dato da inserire deve essere un numero
        if(is_numeric($_price)) {

            // Il numero deve essere maggiore di zero
            if($_price > 0) {

                $this ->price=$_price;

            }

            else {
                throw new Exception('Inserire un prezzo maggiore di zero');

            }

        }

        else {
            throw new Exception('Non è stato inserito un prezzo corretto');
        }

    }

    public function setQuantità($_quantità) {

        // Il dato da inserire deve essere un numero
        if(is_numeric($_quantità)) {

            // Il numero deve essere maggiore di zero
            if($_quantità > 0) {

                $this ->quantità=$_quantità;

            }

            else {
                throw new Exception('Inserire una quantità maggiore di zero');
            }

        }

        else {
            throw new Exception('Non è stato inserita una quantità corretta');
        }

    }

    // Getter
    public function getPrice() {
        return $this ->price;
    }

    public function getQuantità() {
        return $this ->quantità;
    }

}


?>