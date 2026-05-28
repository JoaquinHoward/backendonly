<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>challenge2_personalizer</title>
</head>
<body>
    <form action = "challenge2_personalizer.php" method = "GET">
        <label for = "user-name">username: </label>
        <input type = "text" placeholder = "enter your username" name = "user-name">
        <input type = "submit">
    </form>
</body>
</html>

<?php
    $username = "Stranger";
    if(array_key_exists("user-name", $_GET) && trim($_GET["user-name"])!== ""){
        $username = $_GET["user-name"];
    }
    echo htmlspecialchars("Hello ".$username);
?>
