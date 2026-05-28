<?php
session_start();
    //check if the button was clicked for the first time, use isset()
    //check if the action in the associative array if the value is login
    if(isset($_GET["action"]) && $_GET["action"]=="login"){
        //set the session login to true
        $_SESSION['login'] = true;
        //go to the dashboard
        header("Location: challenge7_dashboard.php");
        //exit this page
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
</head>
<body>
    <form method = "GET">
        <input type = "submit" name = "action" value = "login">
    </form>

</body>
</html>