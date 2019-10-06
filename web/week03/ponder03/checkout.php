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
        <h1> Order total = </h1>
        <?php
        $total = 0;
        foreach ($_SESSION['products'] as $product1) {
            foreach ($_SESSION['all_products'] as $product2) {
                if ($product1 == $product2->planet) {
                    echo "<p>Name: $product2->planet </p>";
                    $total += $product2->price;
                }
            }
        }
        echo "<h1>$$total</h1>";
        ?>

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

            <input type="Submit" value="Confirm Purchase">
        </form>

        <br />
    </div>

    <img id="mercury" src="mercury.jpg" alt="Photo of Mercury" width="153" height="153" onmouseover="this.style='transform: scale(1.5);'" onmouseout="this.style='transform: scale(1);'">

</body>

</html>