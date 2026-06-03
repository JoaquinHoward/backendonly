<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Welcome to the dashboard</h2>
    <form method = "POST">
        <input type = "text" name = "title">
        <textarea name = "description"></textarea>
        <input type = "submit"> 
    </form>
    <?php 
        if(isset($user_tasks) && !empty($user_tasks)){ 
            foreach($user_tasks as $user_task): ?>
                <form method = "POST">
                    <input type = "hidden" name = "task_id" value = "<?= $user_task["task_id"] ?>" >
                    <input type = "submit" name = "action" value = "done">
                    <span> <?= $user_task["title"] ?> </span>
                    <span> <?= $user_task["description"] ?> </span>
                </form>
    <?php   endforeach;
        } ?> 

   
    
</html>

