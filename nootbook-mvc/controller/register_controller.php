<?php
session_start();
    require("../model/connect.php");
    require("../model/UserModel.php");
    if(isset($_SESSION["user_name"])){
        header("Location: dashboard_controller.php");
        exit();
    }else if($_SERVER["REQUEST_METHOD"] === "POST"){
        $errors = [];
        if(!isset($_POST["real_name"]) || trim($_POST["real_name"])=== ""){
            $errors[] = "Fix your real name input.";
        }
        if(!isset($_POST["user_name"]) || trim($_POST["user_name"])=== ""){
            $errors[] = "Fix your user name input";
        }
        if(!isset($_POST["password"]) || trim($_POST["password"])===""){
            $errors[] = "Fix your password input";
        }
        if(empty($errors)){
            $hashed_password = password_hash($_POST["password"], PASSWORD_DEFAULT);
            $user_model = new UserModel($pdo);
            $isInserted = $user_model->register_user($_POST["real_name"], $_POST["user_name"], $hashed_password);
            if($isInserted){
                header("Location: dashboard_controller.php");
                exit();
            }else{
                $errors[] = "Real name or username is not unique.";
            }
        }
    }
    require_once("../view/register_view.php");
?>