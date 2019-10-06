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
        <form action="view_cart.php" method="post">
            <table>
                <tr>
                    <th>Planet</th>
                    <th>Radius of Planet</th>
                    <th>Description</th>
                    <th>Inhabitants</th>
                    <th>Price</th>
                    <th>Add to Cart</th>
                </tr>
                <?php
                foreach ($_SESSION['all_products'] as $product) {
                    echo "<tr> <td>" . $product->planet . "</td>";
                    echo "<td>" . $product->radius . "</td>";
                    echo "<td>" . $product->description . "</td>";
                    echo "<td>" . $product->inhabitants . "</td>";
                    echo "<td>$" . $product->price . "</td>";
                    echo "<td>" . $product->checkbox_html . "</td>";
                    echo "</tr>";
                }
                ?>
            </table>
            <input type="Submit" value="Add Planets to Cart">
        </form>

        <br />
    </div>

    <img id="mercury" src="mercury.jpg" alt="Photo of Mercury" width="153" height="153" onmouseover="this.style='transform: scale(1.5);'" onmouseout="this.style='transform: scale(1);'">

</body>

</html>