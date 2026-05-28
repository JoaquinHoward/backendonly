<?php
session_start();
    if(!isset($_COOKIE["quiz_token"])){
        $quiz_token = bin2hex(random_bytes(8));
        $_COOKIE["quiz_token"] = $quiz_token;
        setcookie("quiz_token", $quiz_token, time() + 3600);
        header("Location: challenge10_quiz/action=q1");
        exit();
    }

    if($_SESSION["REQUEST_METHOD"] && isset($_POST[""]))

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quiz</title>
</head>
<body>
    <a href = "?action=q1">Question 1</a>
    <a href = "?action=q2">Question 2</a>
    <a href = "challenge10_summary.php">summary page</a>
   
</body>
</html>