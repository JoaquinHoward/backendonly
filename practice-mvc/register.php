<?php
session_start();
    require("connect.php");
    require("UserModel.php");

    if(isset($_SESSION["user_name"])){
        header("Location: dashboard.php");
        exit();
    }else{
        if(!isset($_POST["real_name"]) || trim($_POST["real_name"])===""){
            $errors[] = "Real name input required!";
        }
        if(!isset($_POST["user_name"]) || trim($_POST["user_name"])===""){
            $errors[] = "User name input required!";
        }
        if(!isset($_POST["password"]) || trim($_POST["password"])===""){
            $errors[] = "Password input required";
        }

        if(empty($errors)){
            $hash_password = password_hash($_POST["password"], PASSWORD_DEFAULT);
            $user_model = new UserModel($pdo);
            $isInserted = $user_model->register_user($real_name, $user_name, $password_hash);
            if($isInserted){
                header("Location: login.php");
                exit();
            }else{
                $errors[] = "Username already taken.";
            }
        }
    }
    require_once("register.view.php");
?>