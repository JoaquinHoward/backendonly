<?php
    try{
        $pdo = new PDO("mysql:host=localhost;dbname=nootbook", "root", "");
        return true;
    }catch(PDOException $event){
        return false;
    }
?>