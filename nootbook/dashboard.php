<?php
session_start();
    if(isset($_SESSION["user_name"])){
        require("connect.php");
        echo "Welcome to the dashboard ".$_SESSION["user_name"];
        try{
            #command blueprint
            $sql = "SELECT * FROM tasks WHERE owner = :owner";
            #preparation
            $sql = $pdo->prepare($sql);
            #execution
            $sql->execute(['owner' => $_SESSION['user_name']]);
            #fetch
            $tasks = $sql->fetchAll();

        }catch(PDOException $event){
            echo "An error occured, try again.";
        }
        if($_SERVER["REQUEST_METHOD"] === "POST" && $_POST["action"] === "logout"){
            $_SESSION = array();
            session_destroy();
            header("Location: index.php");
            exit();
        }
        if(isset($_GET["action"]) && $_GET["action"] === "add_task"){
            header("Location: add-task.php");
            exit();
        }

        if(isset($_GET["action"]) && $_GET["action"] === "delete"){
            #command blueprint
            $sql = "DELETE FROM tasks WHERE task_id = :task_id";
            #prepare
            $sql = $pdo->prepare($sql);
            #execute
            $sql->execute(['task_id' => $_GET['task_id']]);
            echo "Successfully deleted task.";
            header("Location: dashboard.php");
            exit();
        }

        if(isset($_GET["action"]) && $_GET["action"] === "edit"){
            $_SESSION["task_id"] = $_GET["task_id"];
            header("Location: edit-task.php");
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
    <title>dashboard</title>
</head>
<body>
    <h1>dashboard</h1>
    <form method = "POST">
        <input type = "submit" name = "action" value = "logout">
    </form>
    <form method = "GET">
        <input type = "submit" name = "action" value = "add_task">
    </form>

    
    <?php foreach($tasks as $task): ?>
        <form method = "GET">
            <input type = "hidden" name = "task_id" value = "<?= $task['task_id']; ?>">
            <button type = "submit" name = "action" value = "edit">edit</button>
            <button type = "submit" name = "action" value = "delete">delete</button>
            
            <span><strong><?= $task['title'] ?></strong></span>
            <span><?= $task['description'] ?></span>
            <br>
        </form>
    <?php endforeach; ?>
    
</body>
</html>