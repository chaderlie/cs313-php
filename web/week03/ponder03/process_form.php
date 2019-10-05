
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
<?php

foreach($_POST["products"] as $product) {
    echo "<p>" . $product . "</p>";
}

?>
</body>
</html>