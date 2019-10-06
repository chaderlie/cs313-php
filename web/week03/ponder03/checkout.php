<!DOCTYPE html>
<html>
<?php
require 'start_session.php';
?>

<head>
    <meta charset="UTF-8">
    <title>Sol Syst LCC</title>
    <link rel="stylesheet" type="text/css" href="homepage.css">
</head>

<body>
    <div>
        <h1>You are purchasing the planets</h1>
        <?php
        $total = 0;
        $_SESSION['products'] = [];
        foreach ($_SESSION['selected_products'] as $product1) {

            foreach ($_SESSION['all_products'] as $product2) {
                if (strcmp($product1, $product2->planet) == 0) {
                    array_push($_SESSION['products'], $product2);
                }
            }
        }

        foreach ($_SESSION['products'] as $product) {
            echo "<h2>$product->planet </h2>";
            $total += $product->price;
        }
        echo "<h3>Your total price is: $$total</h3>";
        ?>

        <h4>To continue this purchase, please fill out your information below</h4>
        <br />
        <br />
        <form action="confirmation.php" method="post">
            First name: <input type="text" name="firstname">
            <br />
            Last name: <input type="text" name="lastname">
            <br />
            <br />
            Email: <input type="text" name="email">
            <br />
            <br />
            Street address: <input type="text" name="address">
            <br />
            City: <input type="text" name="city">
            <br />
            State: <input type="text" name="state">
            <br />
            Zipcode: <input type="text" name="zip">
            <br />
            <br />
            <input type="Submit" value="Confirm Purchase">
        </form>
    </div>

    <img id="mercury" src="mercury.jpg" alt="Photo of Mercury" width="153" height="153" onmouseover="this.style='transform: scale(1.5);'" onmouseout="this.style='transform: scale(1);'">

</body>

</html>