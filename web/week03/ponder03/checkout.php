<?php
require 'start_session.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Checkout</title>
</head>

<body>
    <div>
        <?php
        foreach ($_POST['products'] as $product) {
            array_push($_SESSION['products'], $product);
        }
        ?>

        <h1>You are purchasing the planets:</h1>
        <?php
        $total = 0;
        foreach ($_SESSION['products'] as $product1) {
            foreach ($_SESSION['all_products'] as $product2) {
                if (strcmp($product1, $product2->planet) == 0) {
                    echo "<h2>$product2->planet </h2>";
                    $total += $product2->price;
                }
            }
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

        <br />
        <a href="browsing.php">Back to Browsing</a>
    </div>
</body>

</html>