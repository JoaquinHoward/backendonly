<?php
session_start();
    #setting first time cookie
    if(!isset($_COOKIE["quiz_token"])){
        $quiz_token = bin2hex(random_bytes(8));
        $_COOKIE["quiz_token"] = $quiz_token;
        setcookie("quiz_token", $quiz_token, time() + 3600);
        header("Location: challenge10_quiz.php?action=q1");
        exit();
    }
    #saving the answers
    if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_GET["action"])){
        if($_GET["action"] === "q1"){
            $_SESSION["quiz_data"]["q1"] = $_POST["answer"];
            header("Location: challenge10_quiz.php?action=q2");
            exit();
        }else if($_GET["action"] === "q2"){
            $_SESSION["quiz_data"]["q2"] = $_POST["answer"];
            header("Location: challenge10_summary.php");
            exit();
        }
    }
    #rendering the answer form
    if(isset($_GET["action"])){
        if($_GET["action"] === "q1" || $_GET["action"] === "q2"){
            if($_GET["action"] === "q1"){
                echo "What is your favorite programming language?";
            }elseif($_GET["action"] === "q2"){
                $prog_lang = $_SESSION["quiz_data"]["q1"] ?? "your favorite language";
                echo "How long have you been programming using $prog_lang ";
            }
            ?>
            <form method = "POST">
                <input type = "text" name = "answer">
                <input type = "submit">
            </form>
            <?php
        }
    }



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