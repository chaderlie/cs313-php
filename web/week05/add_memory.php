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
        <h1 style="font-family:'Yu Gothic'; text-transform:uppercase">Add a Memory</h1>
        <p>Remember something funny? Heartwarming? Spiritual? Record your memory here so
            the entire family can remember it too! </p>
        <form>
            <div class="form-group">
                <label for="exampleFormControlInput1">Your First Name</label>
                <input type="text" class="form-control mb-2 mr-sm-2" name="first_name_input" placeholder="First Name">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Your Last name</label>
                <input type="text" class="form-control mb-2 mr-sm-2" name="last_name_input" placeholder="Last Name">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Example select</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Example multiple select</label>
                <select multiple class="form-control" id="exampleFormControlSelect2">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div>
                <label for="exampleFormControlSelect2">What kind of a story is this?</label>

                <input type="checkbox" name="attribute_tag[]" value="funny">Funny<br>
                <input type="checkbox" name="attribute_tag[]" value="spiritual">Spiritual<br>
                <input type="checkbox" name="attribute_tag[]" value="sneaky">Sneaky<br>
                <input type="checkbox" name="attribute_tag[]" value="sad">Sad<br>
                <input type="checkbox" name="attribute_tag[]" value="got_someone_in_trouble">Got-someone-in-trouble<br>
                <input type="checkbox" name="attribute_tag[]" value="scary">Scary<br>
            </div>
            <br />
            <div>
                <label for="exampleFormControlSelect2">Please tag those who were involved</label>
                <br />
                <?php
                foreach ($db->query('SELECT first_name, last_name FROM family_members;') as $row) 
                {
                        $first = $row['first_name'];
                        $last = $row['last_name'];
                        echo "<input type='checkbox' name='tagged_fam_mems[]' value='$first'>$first $last <br />";
                }
                ?>
            </div>
            <div>
                <label for="exampleFormControlSelect2">Please give the date (or an estimate) of when this occured</label>
                <input type="date" name="memory_date">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Story</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
        </form>
        <div style="text-align: center; font-family: Arial; font-size: 18px;">
            <a href="family_tree.php" class="buttonlike">Family Tree</a>
            <a href="memory_list.php" class="buttonlike">Memories</a>
        </div>
    </div>
    <footer>Thank you for visiting!</footer>
</body>

</html>