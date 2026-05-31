<?php
session_start();
    if(isset($_SESSION["user_name"])){
        require("connect.php");
        if(isset($_GET["action"]) &&$_GET["action"] === "add_task"){
            if($_GET["title"] || $_GET["description"]){
                #command blueprint
                $sql = "INSERT INTO tasks (title, description, due_date, owner) VALUES (:title, :description, :due_date, :owner)";
                #preparation
                $sql = $pdo->prepare($sql);
                #execution
                $sql->execute([
                    'title' => $_GET["title"],
                    'description' => $_GET["description"],
                    'due_date' => $_GET["due_date"],
                    'owner' => $_SESSION["user_name"]
                ]);
                echo "Successfully added the task.";
            }else{
                echo "Enter task title or description";
            }
        }
    }else{
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href = "dashboard.php">Home</a>
    <form method = "GET">
        <label for = "title">title: </label>
        <input type = "text" name = "title"><br>
        <label for = "description">description: </label>
        <input type = "text" name = "description"><br>
        <label for = "due_date">due date: </label>
        <input type = "dueDate" name = "due_date"><br>
        <input type = "submit" name = "action" value = "add_task">
    </form>
</body>
</html>