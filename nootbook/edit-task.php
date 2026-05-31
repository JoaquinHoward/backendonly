<?php
session_start();
    if(isset($_SESSION['user_name'])){
        require("connect.php");
        $task_id = $_SESSION["task_id"];

        #command blueprint
        $sql = "SELECT * FROM tasks WHERE task_id = :task_id";
        #preparation
        $sql = $pdo->prepare($sql);
        #execution
        $sql->execute(['task_id'=> $task_id]);

        $task = $sql->fetch();

        if(isset($_GET["action"])){
            #command blueprint
            $sql = "UPDATE tasks SET title=:title, description=:description WHERE task_id = :task_id";
            #preparation
            $sql = $pdo->prepare($sql);
            #execution
            $sql->execute(['title' => $_GET['title'], 'description' => $_GET['description'], 'task_id' => $_GET['task_id']]);
            header("Location: dashboard.php");
            exit();
        }
    }else{
        header("Location: index.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit-task</title>
</head>
<body>
    <form method = "GET">
        <input type = "hidden" name = "task_id" value = "<?= $task["task_id"]?>">
        <input type = "text" name = "title" value = "<?= $task['title'] ?>"><br>
        <textarea name = "description"><?= $task['description']?></textarea>
        <button type = "submit" name = "action" value = "save">save</button>
    </form>
</body>
</html>