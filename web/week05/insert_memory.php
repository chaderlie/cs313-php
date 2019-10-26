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

        <p>You inserted a new memory with the title: <?php $title ?></p>
        <form action='insert_memory.php' method='post'>
            <div class="form-group">
                <label>Your First Name</label>
                <input type="text" name="first_name_input" placeholder="First Name">
            </div>
            <br />
            <div class="form-group">
                <label>Your Last name</label>
                <input type="text" class="input_text" name="last_name_input" placeholder="Last Name">
            </div>
            <br>
            <br>
            <label>Story title</label>
            <input type="text" name="story_title" placeholder="Story title">
            <div class="form-group">
                <label><b>Your Story</b></label>
                <br />
                <textarea class="form-control" id="story_content" rows="20" cols="100"></textarea>
            </div>
            <div>
                <label>What kind of a story is this?</label> <br />
                <input type="checkbox" name="attribute_tag[]" value="funny">Funny<br>
                <input type="checkbox" name="attribute_tag[]" value="spiritual">Spiritual<br>
                <input type="checkbox" name="attribute_tag[]" value="sneaky">Sneaky<br>
                <input type="checkbox" name="attribute_tag[]" value="sad">Sad<br>
                <input type="checkbox" name="attribute_tag[]" value="got_someone_in_trouble">Got-someone-in-trouble<br>
                <input type="checkbox" name="attribute_tag[]" value="scary">Scary<br>
            </div>
            <br />
            <div>
                <label for="exampleFormControlSelect2">Please tag family members!</label>
                <br />
                <?php
                foreach ($db->query('SELECT first_name, last_name FROM family_members ORDER BY first_name ASC;') as $row) {
                    $first = $row['first_name'];
                    $last = $row['last_name'];
                    echo "<input type='checkbox' name='tagged_fam_mems[]' value='$first'>$first $last <br />";
                }
                ?>
            </div>
            <div>
                <label for="exampleFormControlSelect2">Please give the date (or an estimate)
                    of when this occured</label>
                <input type="date" name="memory_date">
            </div>
            <br />
            <input type="submit" value="Add Story">
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