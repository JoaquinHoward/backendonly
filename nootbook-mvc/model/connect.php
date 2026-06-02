<?php
    try{
        $pdo = new PDO("mysql:host=localhost;dbname=nootbook", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $event){
        throw $event;
    }
?>