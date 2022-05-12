<?php 

    // Classe Padre Products
    include __DIR__ . '../classi/Products/products.php';

    echo '<h4>' . 'Prodotti da acquistare: ' . '</h4>';

    // Food
    include __DIR__ . '../classi/Products/children/food.php';
    $crocchette = new Food('Crocchette per cani', 25, '05-2023', 1200);
    // Stampo i dati di crocchette
    echo '<h5>' . 'Prodotto 1:  ' . '</h5>';
    echo '<p>Nome prodotto: ' . $crocchette -> getName() . '</p>';
    echo '<p>Prezzo: ' . $crocchette -> getPrice() . '$</p>';
    echo '<p>Scadenza: ' . $crocchette -> getExpiryDate() . '</p>';
    echo '<p>Consumo: ' . $crocchette -> getCalorie() . 'Kcal</p>';

    // Giochi
    include __DIR__ . '../classi/Products/children/giochi.php';
    $osso = new Giochi('Osso per cani', 9.99, 'Small');
    // Stampo i dati di osso
    echo '<h5>' . 'Prodotto 2:  ' . '</h5>';
    echo '<p>Nome prodotto: '. $osso ->getName() . '</p>';
    echo '<p>Prezzo: '. $osso ->getPrice()  . '$</p>';
    echo '<p>Dimensione: '. $osso ->getSize() . '</p>';

    // User
    include __DIR__ . '../classi/User/user.php';
    $utente = new User('Davide', false, '05-24');
    // Stampo i dati di utente
    echo '<h4>' . 'Dati acquirente: ' . '</h4>';
    echo '<p>Nome: ' . $utente -> getName() . '</p>';
    echo '<p>' . $utente -> getSign() . '</p>'; 
    echo '<p>Scadenza carta:  ' . $utente -> getExpiryCard() . '</p>';
    if( $utente -> expiryCard > date('m-y') ) {
        echo '<h6>L\'utente può pagare</h6>';
    }else{
        echo '<h6>Carta scaduta</h6>';
    }

    // Spesa totale e spesa scontata
    $spesaTotale = $crocchette -> getPrice() + $osso -> getPrice();
    echo '<h5>Totale spesa: ' . ( $spesaTotale )  . '$</h5>';
    
    if($utente -> sign == true){
        echo '<h5>Totale scontato: ' . ( $spesaTotale - $spesaTotale * $utente -> getSconto() )  . '$</h5>';
    }

    


?>