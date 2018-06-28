<?php
session_start();

$header = file_get_contents('./template/header.html');
echo str_replace('%test%', 'FunkoShop', $header);


include_once("function_cart.php");

$productsPrice = [
    '1' => 25,
    '2' => 20,
    '3' => 20,
    '4' => 25,
    '5' => 15,
    '6' => 15,

];

if (empty($_COOKIE)) {
    echo 'Votre panier est vide';
} else {
    $arrayCookie = $_COOKIE;
    foreach ($arrayCookie as $key => $value) {
        switch ($key) {
            case 1:
                echo 'Nom de l\'article : Daenerys Et Drogon <br>';
                break;
            case 2:
                echo 'Nom de l\'article : Viserion 16cm <br>';
                break;
            case 3:
                echo 'Nom de l\'article : Rhaegal 16cm <br>';
                break;
            case 4:
                echo 'Nom de l\'article : Hulk Buster 16cm <br>';
                break;
            case 5:
                echo 'Nom de l\'article : Spider-Man <br>';
                break;
            case 6:
                echo 'Nom de l\'article : Black Panthère<br>';
                break;
        }
        echo 'Quantité : ' . $value / $productsPrice[$key] . '<br>';
        echo 'Prix total : ' . $value . ' € <br><br>';
    }
}


$footer = file_get_contents('./template/footer.html');
echo $footer;
?>
