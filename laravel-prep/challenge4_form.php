<?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        header("location: challenge4_success.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>challenge4_form.php</title>
</head>
<body>
    <form action = "challenge4_form.php" method = "POST">
        <label>first name / ming: </label>
        <input type = "text" name = "ming">
        <label>surname / xing: </label>
        <input type = "text" name = "xing">
        <input type = "submit">
    </form>
</body>
</html>

