<?php
session_start();
    if(!isset($_SESSION["user_name"])){
        header("Location: register_controller.php");
        exit();
    }else{
        
    }
?>