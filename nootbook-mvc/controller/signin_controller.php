<?php
session_start();
    require("../model/connect.php");
    require("../model/UserModel.php");
    if(isset($_SESSION["id"])){
        header("Location: task_controller.php");
        exit();
    }
    $errors = [];
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        if(!isset($_POST["user_name"]) || trim($_POST["user_name"])=== ""){
            $errors[] = "username input required";
        }
        if(!isset($_POST["password"]) || trim($_POST["password"])=== ""){
            $errors[] = "password input required";
        }
        if(empty($errors)){
            $user_model = new UserModel($pdo);
            $user = $user_model->get_user_by_username($_POST["user_name"]);
            if($user && password_verify($_POST["password"], $user["password_hash"])){
                $_SESSION["id"] = $user['id'];
                $_SESSION["real_name"] = $user['real_name'];
                $_SESSION["user_name"] = $user['user_name'];
                header("Location: task_controller.php");
                exit();
            }else{
                $errors[] = "Invalid username or password";
            }
        }
    }
    require_once("../view/signin_view.php");
?>