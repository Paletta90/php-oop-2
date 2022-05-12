<?php class CreditCard {
    protected $number;
    protected $expiryCard;
    protected $money;

    // Uso il trait Dati
    use Dati;

    public function __construct($_name, $_number, $_expiryCard, $_money) {

        $this ->setName($_name);
        $this ->setNumber($_number);
        $this ->setExpiryCard($_expiryCard);
        $this ->setMoney($_money);

    }

    // Setter
    public function setNumber($_number) {
        $this ->number=$_number;
    }

    public function setExpiryCard($_expiryCard) {
        $this ->expiryCard=$_expiryCard;
    }

    public function setMoney($_money) {

        // Il dato da inserire deve essere un numero
        if(is_numeric($_money)) {

            // Il numero deve essere maggiore di zero
            if($_money > 0) {

                $this ->money=$_money;

            }

            else {
                throw new Exception('Inserire un saldo maggiore di zero');

            }

        }

        else {
            throw new Exception('Non è stato inserito un saldo corretto');
        }

    }


    // Getter
    public function getNumber() {
        return $this ->number;
    }

    public function getExpiryCard() {
        return $this ->expiryCard;
    }

    public function getMoney() {
        return $this ->money;
    }

    // Funzioni
    public function isValid() {

        // Controllo se la carta è ancora valida
        if($this -> expiryCard > date('m-y')) {
            return true;
        }

        else {
            return false;
        }
    }

    public function enoughMoney($_bill) {

        // Controllo se ho abbastanza soldi sul conto
        if(is_numeric($_bill)) {

            if($_bill > 0) {

                if($this-> money > $_bill) {
                    return true;
                }

                else {
                    return false;
                }
                
            }

            else {
                throw new Exception('Inserire un conto da pagare maggiore di zero');
            }
        }

        else {
            throw new Exception('Inserire un conto corretto');
        }
    }

    public function pay($_bill){

    }
}

?>