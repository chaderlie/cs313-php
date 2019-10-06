<!DOCTYPE html>
<?php
require 'start_session.php';
?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Sol Syst LCC</title>
    <link rel="stylesheet" type="text/css" href="homepage.css">

</head>

<body>
    <?php

    foreach ($_POST["selected_products"] as $product) {
        array_push($_SESSION['selected_products'], $product);
    }

    ?>
    <form method="post" action="checkout.php">
        <input type="Submit" value="Continue with Purchase">
    </form>
</body>

</html>