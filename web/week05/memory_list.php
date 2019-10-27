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
        <li><a href="add_memory.php">Add a Memory</a></li>

    </ul>
    <div class="a">
        <h1 style="font-family:'Yu Gothic'; text-transform:uppercase">Family Stories</h1>

        <p>
            <?php
            foreach ($db->query('SELECT memory_id, title, memory_content, memory_date 
            FROM memories;') as $row) {
                $memory_id = $row['memory_id'];

                $title = $row['title'];
                $content = $row['memory_content'];
                $date = $row['memory_date'];
                $content = $row['content'];

                echo "<h3>$title</h3> ";
                echo "<p><b>$date</b></p>";
                echo "<p>$content</p>";
                echo "<br/>";
                echo "Family Members Tagged: ";
                echo "<ul>";
                $statement = $db->query("SELECT
                first_name,
                last_name
              FROM
                member_tags mt,
                family_members fm
              WHERE
                mt.memory_id = $memory_id
                AND mt.member_id = fm.member_id;");
                while ($tag_row = $statement->fetch(PDO::FETCH_ASSOC)) {
                    echo '<li>' . $tag_row['first_name'] . ' ' . $tag_row['last_name'] . '</li>';
                    echo "<br/>";

                }
                echo "</ul>";
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