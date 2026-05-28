<?php
session_start();
    if(isset($_SESSION["login"]) && $_SESSION["login"] === true){
        if(isset($_GET["action"]) && $_GET["action"]=="logout"){
            $_SESSION = array();
            session_destroy();
            header("Location: challenge7_login.php");
            exit();
        }
    }else{
        header("Location: challenge7_login.php");
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
    <h1>You have successfully logged in.</h1>
    <a href = "?action=logout">Log out</a>
</body>
</html>