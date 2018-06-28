<?php

if ($_POST['action'] == 'add') {
    addToCart($_POST['id'], $_POST['price']);
}

function addToCart($productName, $price) {
    if (isset($_COOKIE[$productName])) {
        $oldPrice = $_COOKIE[$productName];
        $newPrice = $oldPrice + $price;
        setcookie($productName, $newPrice, time()+86400);
    } else {
        setcookie($productName, $price, time()+86400);
    }
}

?>