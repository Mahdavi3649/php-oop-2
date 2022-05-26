<?php 
/* provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
 */


require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/User.php';


 $cibo = new Product('Zucca','green','350','Lorem, ipsum dolor sit amet consectetur');
 var_dump($cibo);
 var_dump($cibo->getName());

 $user = new User('John', 'Foster', 'j.foster@gmail.com');
 var_dump($user);
 $registeredUser = new RegisteredUser('jack', 'Nilson', 'j-nilson@gmail.com');
 
 var_dump($registeredUser);


?>

