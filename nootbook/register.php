<?php
    require("connect.php");
    $realname = null;
    $username = null;
    $password = null;
    $hashed_password = null;
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        if(isset($_POST["real-name"]) && trim($_POST["real-name"]) !== ""){
            $realname = trim($_POST["real-name"]); 
        }else{
            echo "Enter your real name.";
        }

        if(isset($_POST["user-name"]) && trim($_POST["user-name"]) !== ""){
            $username = $_POST["user-name"];
        }else{
            echo "Enter your chosen user name.";
        }

        if(isset($_POST["password"]) && trim($_POST["password"])!==""){
            $password = $_POST["password"];
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        }else{
            echo "Enter password.";
        }
    }
    if(isset($realname) && isset($username) && isset($password)){
        try{
            #blueprint of the command
            $sql = "INSERT INTO register (real_name, user_name, password_hash) VALUES (:real_name, :user_name, :password_hash)";
            #preparation
            $sql = $pdo->prepare($sql);
            #execution
            $sql->execute(['real_name' => $realname, 'user_name' => $username, 'password_hash' => $hashed_password]);
        }catch(PDOException $event){
            if($event->getCode() == 23000){
                echo "real name / user name already taken";
            }else{
                echo "A different error occured, please try again.";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>
    <h1>Register a nootbook account</h1>
    <form method = "POST">
        <label for = "real-name">real name: </label>
        <input type = "text" name = "real-name">
        <label for = "user-name">user name: </label>
        <input type = "text" name = "user-name">
        <label for = "password">password</label>
        <input type = "password" name = "password">
        <input type = "submit">
    </form>
</body>
</html>