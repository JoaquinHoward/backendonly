<?php
    if(isset($_GET["action"]) && $_GET["action"] === "register"){
        header("Location: register.php");
        exit();
    }else if(isset($_GET["action"]) && $_GET["action"] === "sign in"){
        header("Location: sign-in.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
</head>
<body>
    <h1>Welcome to the landing page</h1>
    <form method = "GET">
        <input type = "submit" name = "action" value = "register">
        <input type = "submit" name = "action" value = "sign in">
    </form>
</body>
</html>