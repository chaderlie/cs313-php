<?php
    foreach ($_POST['products'] as $product) {
        array_push($_SESSION['products'], $product);
    }
    ?>