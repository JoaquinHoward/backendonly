<?php
    require_once "challenge12_connect.php";
    try{
        $db->exec("INSERT into quiz_submissions (quiz_token, favorite_language) VALUES ('test_token_123', 'PHP')");
        echo "Test token inserted successful";
        // so the format is $db->exec("INSERT into tablename (target column1, target column2) VALUES('value1', 'value2')");
    }catch(PDOException $event){
        echo "Failed to save the data.";
    }
?>