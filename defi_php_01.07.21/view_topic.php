<?php
require_once('db_connect.php');
$sql='SELECT * FROM `message` WHERE topic_id=';
$query=$db->prepare($sql);
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);

$hidden_id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>view_topic</title>
</head>
<body>
<table>
            <th>auteur</th>
            <th>message</th>
        <?php
        foreach ($result as $topic){
        ?>
            <tr><td><?= $topic['author']?></td><td><?= $topic['text']?></td></tr>
        <?php
        }
        ?>
        </table>

        <form action="handler_message.php" method="post">
            <div>
                <label for="author">author</label>
                <input id='author' type="text" name='author' >
            </div>
            <div>
                <label for="content">content</label>
                <textarea id='content' type="text" name='content'></textarea>
            </div>
            <input id='author' type="hidden" name='topic_id' value=<?= $hidden_id?> >
            <div>
                <input id='submit' type="submit">
            </div>
            <span id='alert'></span>
        </form>
</body>
</html>