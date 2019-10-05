<?php

$product_array = $_SESSION['products'];

foreach($product_array as $product) {
    echo $product;
}

?>