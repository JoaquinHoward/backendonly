<?php
session_start();
    if(!isset($_SESSION["quiz_token"])){
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