<?php
session_start();
    if(!isset($_COOKIE["quiz_token"])){
        header("Location: challenge10_quiz.php");
        exit();
    }elseif(isset($_SESSION["quiz_data"]["q1"]) && isset($_SESSION["quiz_data"]["q2"])){
        echo $_SESSION["quiz_data"]["q1"];
        echo $_SESSION["quiz_data"]["q2"];
    }else{
        header("Location: challenge10_quiz.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>summary</title>
</head>
<body>
    
</body>
</html>