<?php
    $email = "";
    if(array_key_exists('e-mail', $_POST) && $_POST["e-mail"]!==""){
        echo "Form submitted successfully!";
        $email = $_POST["e-mail"];
        }else{
            echo "No submission";
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>challenge3_sticky_form</title>
</head>
<body>
    <form action = "challenge3_sticky_form.php" method = "POST">
        <label for = "e-mail">email: </label>
        <input type = "email" name = "e-mail" placeholder = "enter your email address" value = "<?= htmlspecialchars($email) ?>">
        <input type = "submit">
    </form>
</body>
</html>