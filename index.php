<?php

session_start();
require('vendor\autoload.php');

use App\Encrypt;

var_dump($_SESSION);
$dados = $_SESSION['short_url'] ?? null;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php echo $dados ?>
    <form action="form-validation.php" method="post">

        <input type="text" name="url" id=""  placeholder="insert url">
        <input type="submit" value="enviar">
    </form>
</body>
</html>