
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style = "background-color : <?=$_GET["color"] ?>">Stateless Query Inspector</h1>
    <dl>
        <dt>REQUEST_METHOD</dt>
        <dd> <?=htmlspecialchars($_SERVER["REQUEST_METHOD"]) ?> </dd>
        <dt>REQUEST_URI</dt>
        <dd> <?=htmlspecialchars($_SERVER["REQUEST_URI"]) ?> </dd>
        <dt>HTTP_USER_AGENT</dt>
        <dd> <?=htmlspecialchars($_SERVER["HTTP_USER_AGENT"]) ?></dd>
        <dt>QUERY_STRING</dt>
        <dd> <?=htmlspecialchars($_SERVER["QUERY_STRING"]) ?> </dd>
    </dl>

    <table>
        <?php foreach($_GET as $key => $value): ?>
        <tr>
            <td><?= $key ?></td>
            <td><?= htmlspecialchars($value)?></td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>