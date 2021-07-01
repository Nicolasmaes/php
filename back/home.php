<?php
    echo $_SESSION['success'];

    require_once('db_connect.php');
    $sql='SELECT * FROM `article`';
    $query=$db->prepare($sql);
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Document</title>
    </head>
    <body>
        <?php 
        foreach ($result as $article) {
        ?>
        <a href="project-details.php?id=<?=$article['id']?>"><?=$article['object']?></a>
        <?php
        }
        ?>
        <a href="index.php">Add an article</a>
    </body>
</html>