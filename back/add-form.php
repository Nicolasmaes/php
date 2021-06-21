<?php
    session_start();
    if ($_SESSION['user_name']) {
    require_once('db_connect.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a project</title>
</head>
<body>
    <form action="add-form-handler.php" method="post">
        <div>
            <label for="input_picture">Picture</label>
            <input type="file" id="input_picture" name="picture">
        </div>
        <div class="button">
            <button type="reset">Reinitialize</button><br>
            <input type="submit" id="submit" value="Send"></input>
            <!-- <input type="submit"> autre manière de créer un bouton -->
        </div>
    </form>
</body>
</html>