<?php

    require_once('db_connect.php');
    $sql='SELECT * FROM `topic`';
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
    <title>index</title>
</head>
    <body>

        <table>
            <th>sujet</th>
            <th>auteur</th>
        <?php
        foreach ($result as $topic){
        ?>
            <tr><td><a href="view_topic.php?id=<?=$topic['id']?>"><?= $topic['object']?></a></td><td><?= $topic['author']?></td></tr>
        <?php
        }
        ?>
        </table>
        <a href="form_topic.php">new topic</a>
    </body>
</html>
