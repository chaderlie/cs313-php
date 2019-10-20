<?php
    require(database_setup.php)
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Haderlie Family Tree</title>
    <link rel="stylesheet" type="text/css" href="family_tree.css" />
    <style>
        img.intext {
            border-radius: 5px;
            width: 15%;
            height: auto;
            margin: 3px 6px 3px 6px;
        }
    </style>
</head>

<body>
    <header>
        <h1 class="logo">Haderlie Et Al.</h1>
    </header>
    <hr />
    <ul class="menu">
        <li><a href="homepage.php">Home</a></li>
        <li><a href="family_tree.php">Family Tree</a></li>
        <li><a href="memory_list.php">Memories</a></li>
        <li><a href="recipes.php">Recipes</a></li>
    </ul>
    <div class="a">
        <h1 style="font-family:'Yu Gothic'; text-transform:uppercase">Family Stories</h1>
    
        <p>
                <?php
                foreach ($db->query('SELECT title, memory_dscr, memory_date 
            FROM memories;') as $row) {
                    $title = $row['title'];
                    $description = $row['memory_dscr'];
                    $date = $row['memory_date'];
                    $content = $row['content'];
                    echo "<h3>$title</h3> ";
                    echo "<p>$date</p>";
                    echo "<br/>";
                    echo "<p>$description</p>";
                    echo "<br/>";
                    echo "<br/>";

                }
                ?>
        </p>
        <div style="text-align: center; font-family: Arial; font-size: 18px;">
            <a href="family_tree.php" class="buttonlike">Family Tree</a>
            <a href="memory_list.php" class="buttonlike">Memories</a>
        </div>
    </div>
    <footer>Thank you for visiting!</footer>
</body>

</html>