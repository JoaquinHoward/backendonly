<?php
session_start();
    if(isset($_GET["theme"])){
        setcookie("theme", $_GET["theme"], time() + 30 * 24 * 60 * 60);
        $current_theme = $_GET["theme"];
        header("Location: challenge6_cookie_toggle.php");
        exit();
    }else if(isset($_COOKIE["theme"])){
        $current_theme = $_COOKIE["theme"];
    }else{
        //default to light
        $current_theme = "light";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style = "background-color: <?= $current_theme === 'dark' ? '#000000' : '#ffffff' ?>;">
    <a href="?theme=dark">Dark Mode</a> | <a href="?theme=light">Light Mode</a>
</body>
</html>