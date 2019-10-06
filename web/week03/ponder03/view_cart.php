<?php
require 'start_session.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Cart</title>
    <link rel="stylesheet" type="text/css" href="homepage.css">

</head>

<body>
    <?php
    foreach ($_POST['products'] as $product) {
        array_push($_SESSION['products'], $product);
    }
    ?>
    <form method="post" action="checkout.php">

        <table>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Radius of Planet</th>
                <th>Inhabitants</th>
                <th>Price</th>
                <th>Remove from Cart</th>
            </tr>
            <?php
            $total = 0;
            foreach ($_SESSION['products'] as $product1) {
                foreach ($_SESSION['all_products'] as $product2) {
                    if (strcmp($product1, $product2->planet) == 0) {
                        echo "<tr> <td>" . $product2->image . "</td>";
                        echo "<td>" . $product2->planet . "</td>";
                        echo "<td>" . $product2->radius . "</td>";
                        echo "<td>" . $product2->inhabitants . "</td>";
                        echo "<td>$" . $product2->price . "</td>";
                        echo "<td>" . $product2->checkbox_html . "</td>";
                        echo "</tr>";
                        $total += $product2->price;
                    }
                }
            }
            echo "<h3>Your total price will be: $$total</h3>";
            ?>
        </table>
        <input type="Submit" value="Continue with Purchase">
    </form>

</body>

</html>