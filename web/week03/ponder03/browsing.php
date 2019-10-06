<?php
require 'start_session.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Browse Planets</title>
</head>

<body>
    <div>
        <h1> Welcome to the Planet Factory! </h1>
        <h4>We help you build your very own universe! </h4>
        <br/>
        <br/>
    </div>
    <div>
        <form action="view_cart.php" method="post">
            <table>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Radius of Planet</th>
                    <th>Inhabitants</th>
                    <th>Price</th>
                    <th>Add to Cart</th>
                </tr>
                <?php
                foreach ($_SESSION['all_products'] as $product) {
                    echo "<tr> <td>" . $product->image . "</td>";
                    echo "<td>" . $product->planet . "</td>";
                    echo "<td>" . $product->radius . "</td>";
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


</body>

</html>