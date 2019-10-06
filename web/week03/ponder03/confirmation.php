<!DOCTYPE html>
<html>
<head>
<?php
require 'start_session.php';
?>
    <meta charset="UTF-8">
    <title>Confirm Universe</title>
</head>
<body>
    <?php
    function processText($text) {
        $safe_text = strip_tags($text);
        return $safe_text;
    }
    
    $firstname = processText($_POST['firstname']);
    $lastname = processText($_POST['lastname']);
    $email = processText($_POST['email']);
    $address = processText($_POST['address']);
    $city = processText($_POST['city']);
    $state = processText($_POST['state']);
    $zip = processText($_POST['zip']);

    echo "<h1>Thank you, $firstname $lastname!</h1>";
    echo "<p> Your certificate of planetary ownership will be sent to $address $city, $state $zip </p>";
    echo "<p> A confirmation email was sent to $email </p>";
    ?>
</body>

</html>