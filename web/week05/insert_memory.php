<?php
require "database_setup.php";
$db = get_db();

$first_name = $_POST['first_name_input'];
$last_name = $_POST['last_name_input'];
$title = $_POST['story_title'];
$content = $_POST['story_content'];
echo("$first_name, $last_name, $title");
echo ($content);

$tags = array();

if (!empty($_POST['attribute_tag'])) {
    foreach ($_POST['attribute_tag'] as $tag) {
        array_push($tags, $tag);
        echo ($tag);
    }
}

$family_members = array();

if (!empty($_POST['tagged_fam_mems'])) {
    foreach ($_POST['tagged_fam_mems'] as $member) {
        array_push($family_members, $member);
        echo ($member);
    }
}

$memory_date = $_POST['memory_date'];

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Add a Family Memory</title>
    <link rel="stylesheet" type="text/css" href="family_tree.css" />
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
        <h1 style="font-family:'Yu Gothic'; text-transform:uppercase">Thank you!</h1>

        <p>You inserted a new memory with the title: <?php echo ($title); ?></p>
        </form>
        <br />
        <br />
        <div style="text-align: center; font-family: Arial; font-size: 18px;">
            <a href="family_tree.php" class="buttonlike">Family Tree</a>
            <a href="memory_list.php" class="buttonlike">Memories</a>
        </div>
    </div>
    <footer>Thank you for visiting!</footer>
</body>

</html>