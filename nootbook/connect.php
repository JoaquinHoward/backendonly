<?php
    #goal: connect to MariaDB
    try{
        $pdo = new PDO("mysql:host=localhost;dbname=nootbook", "root", "");
        echo "Successful connecion to the database.";
    }catch(PDOException $event){
        echo "Failed to connect to the database.";
    }
?>