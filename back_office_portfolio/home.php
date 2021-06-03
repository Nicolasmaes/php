<?php
    session_start();
    if ($_SESSION['user_name']) {
        echo $_SESSION['success'];
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <a href="add-form.php">Add a project</a>
    </body>
</html>