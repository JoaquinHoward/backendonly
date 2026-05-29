<?php
    try{
        $db = new PDO("mysql:host=localhost;dbname=quiz_app;charset=utf8mb4", "root", "");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Database connected successfully!";
    }catch(PDOException $event){
        echo "Database connection failed!";
        exit();
    }
?>