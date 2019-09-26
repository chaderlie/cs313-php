<!DOCTYPE HTML>
<html lang="eng-us">

<head> </head>

<body>
    <h1>PHP team activity</h1>

    <?php
    for ($i = 0; $i < 10; $i++) {
        if ($i % 2 == 0) {
            echo "<div><h1 style='color: red'>Div #$i </h1><div>";
        } else {
            echo "<div><h1>Div #$i </h1><div>";
        }
    }
    ?>