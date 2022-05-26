<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
BONUS: Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto).
Tips:
Qualora aveste bisogno di passare ad un metodo un tipo di dato particolare, come ad esempio un oggetto che avete creato voi, potete usarlo come facciamo di solito al posto di Type $variable.
Infondo anche le nostre classi sono dei tipi di dato. -->

<?php 

require_once __DIR__ . '/Models/Products.php';
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Users.php';
require_once __DIR__ . '/Models/User.php';

/* $prodotto_1 = new Products('Ciotola Mangia+', 'Ciotola', 25, 'Una bella ciotola per mangiare a crepapelle', true);
var_dump($prodotto_1); */
/* $crocchette = new Product('Mangia Sano', 'Mangime', 35, 'Crocchette nutrienti', true, '27-05-2022');
var_dump($crocchette); */

$user_no_discount = new Users('Antonio','Sabella','antonio@gmail.com', true, 0, false);
var_dump($user_no_discount);

$user_discount = new User('Roberto', 'Iannelli', 'roberto@gmail.com', true, 0, false, 'RobertoPazzerello', 'fgfh44', 7575844);

$user_discount -> setRegisteredUser();
$user_discount -> setSconto(true);

var_dump($user_discount);