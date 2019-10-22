<?php
require "database_setup.php";
$db = get_db();
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
    </ul>
    <div class="a">
        <h1 style="font-family:'Yu Gothic'; text-transform:uppercase">Family Stories</h1>

        <p>
            <?php
            foreach ($db->query('SELECT memory_id, title, memory_dscr, memory_date 
            FROM memories;') as $row) {
                $memory_id = $row['memory_id'];

                $title = $row['title'];
                $description = $row['memory_dscr'];
                $date = $row['memory_date'];
                $content = $row['content'];

                echo "<h3>$title</h3> ";
                echo "<p><b>$date</b></p>";
                echo "<p>$description</p>";
                echo "<br/>";
                echo "<ul>Tagged family members:";
               // foreach ($db->query("SELECT person_id FROM memory_tags 
               // WHERE memory_id=$memory_id;") as $tag_row) {
                 //   $tagged_id = $tag_row["person_id"];
                   // $tagged_name = $db->query("SELECT first_name FROM family_members 
                   // WHERE member_id=$tagged_id;");

                    echo "<li>$tagged_id</li>";
                //}
                echo '</ul>';
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