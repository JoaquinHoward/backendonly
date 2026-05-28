<?php
    if($_SERVER["REQUEST_METHOD"] === "GET"){
        if(isset($_GET["action"]) && isset($_GET["num1"]) && isset($_GET["num2"]) && is_numeric($_GET["num1"]) && is_numeric($_GET["num2"])){
            if($_GET["action"] === "+"){
                $result = $_GET["num1"] + $_GET["num2"];
                echo $result;
            }else if($_GET["action"] === "-"){
                $result = $_GET["num1"] - $_GET["num2"];
                echo $result;
            }else if($_GET["action"] === "*"){
                $result = $_GET["num1"] * $_GET["num2"];
                echo $result;
            }else if($_GET["action"] === "/"){
                if($_GET["num2"] != "0"){
                    $result = $_GET["num1"] / $_GET["num2"];
                    echo $result;
                }else{
                    echo "Cannot divide a number by 0.";
                }
                
            }else{
                echo "unidentified operation";
            }
            
        }else{
            echo "Please provide complete details.";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
</head>
<body>
    <form method = "GET">
        <label for = "num1">number: </label>
        <input type = "text" name = "num1"><br>
        <label for = "num1">number</label>
        <input type = "text" name = "num2"><br>
        <label for = "action">operation</label>
        <input type = "text" name = "action"><br>
        <input type = "submit">
    </form>    
</body>
</html>