<!DOCTYPE html>
<html>
<script type="text/javascript">
    </script>
<head>
    <meta charset="UTF-8">
    <title>Sol Syst LCC</title>
    <link rel="stylesheet" type="text/css" href="homepage.css">
</head>
<body>
    <div>
        <form action="process_form.php"  method="post">
            <table>
                <tr>
                    <th>Planet</th>
                    <th>Radius of Planet</th>
                    <th>Description</th>
                    <th>Inhabitants</th>
                    <th>Price</th>
                    <th>Add to universe</th>
                </tr>
        <?php 
         include 'products.php';
        ?>
            </table>
            <input type="Submit" value="Add to Cart">
        </form>

        <br />
    </div>

    <img id="mercury" src="mercury.jpg" alt="Photo of Mercury" width="153" height="153"
        onmouseover="this.style='transform: scale(1.5);'" onmouseout="this.style='transform: scale(1);'">

</body>

</html>