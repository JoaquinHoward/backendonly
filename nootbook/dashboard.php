<?php
session_start();
    if(isset($_SESSION["user_name"])){
        echo "Welcome to the dashboard ".$_SESSION["user_name"];
        if($_SERVER["REQUEST_METHOD"] === "POST" && $_POST["action"] === "logout"){
            $_SESSION = array();
            session_destroy();
            header("Location: index.php");
            exit();
        }
    }else{
        header("Location: index.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
</head>
<body>
    <h1>dashboard</h1>
    <form method = "POST">
        <input type = "submit" name = "action" value = "logout">
    </form>
    <form method = ""GET>

    </form>
</body>
</html>