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
        <h1 style="font-family:'Yu Gothic'; text-transform:uppercase">Haderlie et al. Family Tree</h1>
        <p>
            This page will soon have an awesome list of the Haderlie family and its sub-families.
        </p>
        <h3 style="font-family:'Yu Gothic'; text-transform: uppercase;">Children of Kirk and Katie</h3>
        <p>
            <ul>
                <?php
                foreach ($db->query('SELECT first_name, last_name, birth_date 
            FROM family_members WHERE father_id = (SELECT member_id FROM family_members WHERE first_name = \'Kirk\');') as $row) {
                    $first = $row['first_name'];
                    $last = $row['last_name'];
                    $birth = $row['birth_date'];
                    $content = $row['content'];
                    echo "<li>$first $last, born: $birth</li> ";
                    echo "<br/>";
                }
                ?>
            </ul>
            <h4 style="font-family:'Yu Gothic'; text-transform: uppercase;">The following family members
                have created an account on this website</h4>

            <ul>
                <?php
                foreach ($db->query('SELECT first_name,
                last_name 
            FROM site_users su, family_members fm
            WHERE su.member_id = fm.member_id;') as $row) {
                    $first = $row['first_name'];
                    $last = $row['last_name'];
                    echo "<li>$first $last</li> ";
                    echo "<br/>";
                }
                ?>
            </ul>
        </p>
        <div style="text-align: center; font-family: Arial; font-size: 18px;">
            <a href="family_tree.php" class="buttonlike">Family Tree</a>
            <a href="memory_list.php" class="buttonlike">Memories</a>
        </div>
    </div>
    <footer>Thank you for visiting!</footer>
</body>

</html>