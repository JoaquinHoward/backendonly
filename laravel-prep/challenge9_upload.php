<?php
    if(isset($_FILES["uploaded-file"]) &&$_FILES["uploaded-file"]["error"] === 0){
        $file_content= file_get_contents($_FILES["uploaded-file"]["tmp_name"]);
        echo htmlspecialchars($file_content);
    }elseif(isset($_FILES["uploaded-file"])){
        echo "Import your file";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload file</title>
</head>
<body>
    <form enctype = "multipart/form-data" action = "challenge9_upload.php" method = "POST">
        <label for = "uploaded-file">uploaded file: </label>
        <input type = "file" name = "uploaded-file">
        <input type = "submit">
    </form>
</body>
</html>