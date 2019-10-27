<?php
require "database_setup.php";
$db = get_db();
try {
    $query = "INSERT INTO memories (
    owner_id
    , created_on
    , last_edited
    , title
    , memory_date
    , memory_descr
    , is_funny
    , is_spiritual
    , is_sad
    , is_heartwarming
    , is_scary
    , is_sneaky
    , got_someone_in_trouble)
    VALUES (
    (SELECT member_id FROM family_members WHERE first_name = :first AND last_name = :last)
    , CURRENT_TIMESTAMP()
    , CURRENT_TIMESTAMP()
    , :title
    , :memory_date
    , :content
    , :funny
    , :spiritual
    , :heartwarming
    , :scary
    , :sneaky
    , :got_someone_in_trouble);";

    $first_name = $_POST['first_name_input'];

    $statement = $db->prepare($query);
    $statement->bindValue(':first', $first_name);
    $statement->bindValue(':last', $_POST['last_name_input']);
    $statement->bindValue(':title', $_POST['story_title']);
    $statement->bindValue(':memory_date', $_POST['memory_date']);
    $statement->bindValue(':first', $first_name);

    $statement->bindValue(':funny', false);
    $statement->bindValue(':spiritual', false);
    $statement->bindValue(':heartwarming', false);
    $statement->bindValue(':scary', false);
    $statement->bindValue(':sneaky', false);
    $statement->bindValue(':got_someone_in_trouble', false);

    if (!empty($_POST['attribute_tag'])) {
        foreach ($_POST['attribute_tag'] as $tag) {
            $statement->bindValue(":$tag", true);
        }
    }
    $statement->execute();
} catch (Exception $ex) {
    echo "Error with DB. Details: $ex";
    die();
}

$query = ("INSERT INTO member_tags (memory_id, member_id)
VALUES ((SELECT memory_id FROM memories WHERE title = :title)
    , (SELECT member_id FROM family_members WHERE first_name = :first_name));");

if (!empty($_POST['tagged_fam_mems'])) {
    foreach ($_POST['tagged_fam_mems'] as $member) {
        try {

            $statement = $db->prepare($query);
            $statement->bindValue(':title', $_POST['story_title']);
            $statement->bindValue(':first_name', $member);
            $statement->execute();
        } catch (Exception $ex) {
            echo "Error with DB. Details: $ex";
            die();
        }
    }
}

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
        <h1 style="font-family:'Yu Gothic'; text-transform:uppercase">Thank you, <?php echo ($first); ?>!</h1>

        <p>You inserted a new memory with the title: <?php echo ($title); ?></p>
        <br />
        <br />
        <form>
            <input type="submit" value="Add Another Story">
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