
<!DOCTYPE html>
<?php
require 'start_session.php';
?>
<html>
<script type="text/javascript">
    </script>
<head>
    <meta charset="UTF-8">
    <title>Sol Syst LCC</title>
    <link rel="stylesheet" type="text/css" href="homepage.css">
</head>
<body>
<?php

foreach($_POST["products"] as $product) {
   array_push($_SESSION['products'], $product);
   echo $product;
}

?>
</body>
</html>