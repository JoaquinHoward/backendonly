<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration</title>
</head>
<body>
    <h2>Register an account</h2>

    <?php
        if(!empty($errors)){
            foreach($errors as $error){
                echo $error;
            }
        }
    ?>
    
    <form action = "register.php" method = "POST">
        <label for = "real_name">real name:</label>
        <input type = "text" name = "real_name" id = "real_name">
        <label for = "user_name">username:</label>
        <input type = "text" name = "user_name" id = "user_name">
        <label for = "password">password: </label>
        <input type = "password" name = "password" id = "password">
        <input type = "submit">
    </form>
</body>
</html>