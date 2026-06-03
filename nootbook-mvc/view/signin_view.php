<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign in</title>
</head>
<body>
    <form action = "../controller/signin_controller.php" method = "POST">
        <label for = "user_name">username: </label>
        <input type = "text" name = "user_name">
        <label for = "password">password: </label>
        <input type = "password">
        <input type = "submit">
    </form>
</body>
</html>