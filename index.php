<?php 
/* provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
 */


require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/User.php';
require_once __DIR__ . '/Models/Creditcard.php';

//istanza per un prodotto 
 $cibo = new Product('Zucca','green','350','Lorem, ipsum dolor sit amet consectetur');
 //var_dump($cibo);
 //var_dump($cibo->getName());

 //utente non registrato e senza sconto
 $user = new User('John', 'Foster', 'j.foster@gmail.com');
 //var_dump($user);

//utente registrato con 20% di sconto
 $registeredUser = new RegisteredUser('jack', 'Nilson', 'j-nilson@gmail.com', 20);
 //var_dump($registeredUser);


//
 $creditCard_1 = new CreditCard(3322, '09/2020');
 //var_dump($creditCard_1);

 $creditCard_2 = new CreditCard(2244, '03/2027');
 //var_dump($creditCard_2)


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
    <title>Opp 2</title>
    <style>
           body {background-color:#bfd834;}
           span{color: #841e62;
                font-weight:600;}
           h6{color: red}
    </style>
</head>
<body >
<header>
    <nav class="nav justify-content-center bg-success ">
      <a class="nav-link text-white fw-bolder" href="#">Home - Shop Online</a>
    </nav>
</header>
<div class="container">
    <div class="row">

        <?php 
        echo '<h4> Product: </h4>';
        var_dump($cibo);

        echo '<h4> User non registered: </h4>';
        var_dump($user);
        echo 'Discount for user is not registered: ' . $user->getDiscount();
        echo '<br>';

        // REGISTERED USER
        echo '<h4> User registered: </h4>';
        var_dump($registeredUser);
        // DISCOUNT FOR REGISTERED USER
        echo 'Discount for user has been already registered: ' . $registeredUser->getDiscount() . '<br>';
        echo '<br>';

        // CREDIT CARD 1
        echo '<h4> Credit Card Validation Control: </h4>';
        echo '<span>First Credit Card:</span>' . $creditCard_1->isValid();
        var_dump($creditCard_1);
        echo '<br>';
        // CREDIT CARD 2
        echo '<span>Second Credit Card:</span>' . $creditCard_2->isValid();
        var_dump($creditCard_2);
        ?>
    </div>

</div>




    
</body>
</html>

