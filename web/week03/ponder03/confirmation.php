<?php
require 'start_session.php';
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <title>Confirm Purchase</title>
</head>

<body>
    <h1>Order confirmation</h1>
    <?php
    function processText($text)
    {
        $safe_text = strip_tags($text);
        return $safe_text;
    }

    $firstname = processText($_POST['firstname']);
    $lastname = processText($_POST['lastname']);
    $email = processText($_POST['email']);
    $address = processText($_POST['address']);
    $city = processText($_POST['city']);
    $state = processText($_POST['state']);
    $zip = processText($_POST['zip']);

    echo "<h1>Thank you, $firstname $lastname!</h1>";
    echo "<p> Your certificate of planetary ownership will be sent to: </p>";
    echo "<p> $address $city, $state $zip </p>";
    echo "<p> A confirmation email was sent to $email </p>";

    echo "<h4>You purchased the following planets: </h4>";

    $total = 0;
    foreach ($_SESSION['products'] as $product1) {
        foreach ($_SESSION['all_products'] as $product2) {
            if (strcmp($product1, $product2->planet) == 0) {
                echo "<h4>$product2->planet </h4>";
                $total += $product2->price;
            }
        }
    }
    echo "<h3>For the total price of $$total</h3>";
    ?>
    <br />
    <br />
    <a href="browsing.php">Back to Browsing</a>
</body>

</html>