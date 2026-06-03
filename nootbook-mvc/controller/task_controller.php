<?php
session_start();
    if(!isset($_SESSION["id"])){
        header("Location: signin_controller.php");
        exit();
    }
    require_once("../model/connect.php");
    require_once("../model/TaskModel.php");
    $new_task = new TaskModel($pdo);
    $errors = [];
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        if(!isset($_POST["title"])||trim($_POST["title"])===""){
            $errors[] = "task title needed";
        }else{
            $is_created = $new_task->create_task($_SESSION["id"], $_POST["title"], $_POST["description"]);
            if($is_created){
                header("Location: task_controller.php");
                exit();
            }else{
                $errors[] = "Failed to create task.";
            }
        }
    }

    $user_tasks = $new_task->get_task_by_user_id($_SESSION["id"]);
    require_once("../view/dashboard_view.php");
?>