<?php 
// Trait
include __DIR__ . '../trait/dati.php';
// Padre Products
include __DIR__ . '../classi/Products/products.php';
// figlio Food
include __DIR__ . '../classi/Products/children/food.php';
// figlio Giochi
include __DIR__ . '../classi/Products/children/giochi.php';
// Padre User
include __DIR__ . '../classi/User/user.php';
// Padre CrediCard
include __DIR__ . '../classi/User/CreditCard.php';


echo '<h4>'. 'Prodotti da acquistare: '. '</h4>';

// Food
$crocchette=new Food('Crocchette per cani', 25, 2, '05-23', 1200, 5, 9);
echo '<h5>'. 'Prodotto 1:  '. '</h5>';
echo '<p>Nome prodotto: '. $crocchette ->getName() . '</p>';
echo '<p>Prezzo al pezzo: '. $crocchette ->getPrice() . '$</p>';
echo '<p>Quantità: '. $crocchette ->getQuantità() . '</p>';
echo '<p>Scadenza: '. $crocchette ->getExpiryDate() . '</p>';
echo '<p>Consumo: '. $crocchette ->getCalorie() . ' Kcal</p>';
echo '<p>Disponibilità: '. $crocchette ->getDisponibilità() . '</p>';


// Giochi
$osso=new Giochi('Osso per cani', 9.99, 3, 'Small', 'Plastic');
echo '<h5>'. 'Prodotto 2:  '. '</h5>';
echo '<p>Nome prodotto: '. $osso ->getName() . '</p>';
echo '<p>Prezzo al pezzo: '. $osso ->getPrice() . '$</p>';
echo '<p>Quantità: '. $osso ->getQuantità() . '</p>';
echo '<p>Dimensione: '. $osso ->getSize() . '</p>';
echo '<p>Materiale: '. $osso ->getMateriale() . '</p>';

// Utente
$utente=new User('Davide', false);
echo '<h4>'. 'Dati acquirente: '. '</h4>';
echo '<p>Nome: '. $utente ->getName() . '</p>';
if($utente ->getSign() == true){
    echo '<p>'. 'L\'utente ha diritto a 20% di sconto' . '</p>';
}else{
    echo '<p>'. 'L\'utente non ha diritto allo sconto' . '</p>';
}

// CreditCard
$masterCard=new CreditCard('Mastercard', '432589284884929', '05-24', 1459);
echo '<h4>'. 'Dati carta di credito: '. '</h4>';
echo '<p>Nome: '. $masterCard ->getName() . '</p>';
echo '<p>Numero carta: '. $masterCard ->getNumber() . '</p>';
echo '<p>Data di scadenza: '. $masterCard ->getExpiryCard() . '</p>';
echo '<p>Saldo: '. $masterCard->getMoney() . '$</p>';


// Spesa totale
$spesaTotale=($crocchette -> getPrice() * $crocchette -> getQuantità())+($osso -> getPrice() * $osso -> getQuantità());
echo '<h5>Totale spesa: '. round($spesaTotale, 2) . '$</h5>';

// Se utente inscritto sconto del 20%
if($utente -> getSign()==true) {
    $spesaTotale=$spesaTotale - $spesaTotale * $utente ->getSconto();
    echo '<h5>Totale scontato: '. round($spesaTotale, 2) . '$</h5>';
}

// Controllo se la card è acnora valida
if($masterCard -> isValid()) {

    // Controllo se l'utente ha abbastanza soldi per pagare
    if($masterCard -> enoughMoney($spesaTotale)) {
        echo '<p>'. 'L\'utente ha abbastanza soldi per pagare'. '</p>';

        // Setto il nuovo saldo
        $masterCard ->setMoney($masterCard -> getMoney() - $spesaTotale);
        echo '<h5>Nuovo saldo: '. round($masterCard -> getMoney(), 2) . '$</h5>';
    }

    else {
        echo '<p>'. 'L\'utente non ha abbastanza soldi per pagare'. '</p>';
    }
}else{

    echo '<h5>' . 'Spiacenti, la sua carta è scaduta' . '</h5>';

}


?>