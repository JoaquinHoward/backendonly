<?php
session_start();
    if(array_key_exists("reset", $_GET) && $_GET["reset"] == true){
        unset($_SESSION["views"]);
        header("location: challenge5_counter.php");
        exit();
    }
    if(array_key_exists("views", $_SESSION)){
        $_SESSION["views"]++;
    }else{
        $_SESSION["views"] = 1;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>counter</title>
</head>
<body>
    <h1>You have viewed the page <?= $_SESSION["views"] ?> time/s</h1>
    <a href = "challenge5_counter.php?reset=true">reset</a>
</body>
</html>