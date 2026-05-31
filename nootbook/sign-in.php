<?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $username = $_POST["user-name"];
        $password = $_POST["password"];

        require("connect.php");
        #command blueprint
        $sql = "SELECT * FROM register WHERE user_name = :user_name";
        #prepare
        $sql = $pdo->prepare($sql);
        #execute
        $sql->execute(['user_name' => $username]);
        #get results
        $user = $sql->fetch();

        if($user !== false){
            //password_verify('input password', 'database password');
            //session_start();
            if(password_verify($password, $user['password_hash'])){
                session_start();
                $_SESSION['user_name'] = $username;
                header("Location: dashboard.php");
                exit();
            }else{
                echo "Invalid username or password";
            }
        }else{
            echo "Invalid username or password";
        }
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
    <h1>Log in to nootbook</h1>
    <form method = "POST">
        <label for = "user-name">username: </label>
        <input type = "text" name = "user-name">
        <label for = "pass-word"></label>
        <input type = "password" name = "password">
        <input type = "submit">
    </form>
</body>
</html>