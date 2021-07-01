<?php
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
    <title>ajout d'article</title>
</head>
<body>
<form action="form-handler.php" method="post">
        <div>
            <label for="input_author">author</label>
            <input type="text" id="input_author" name="input_author" >
        </div>
        <div>
            <label for="input_topic">topic</label>
            <input type="text" id="input_topic" name="input_topic" >
        </div>
        <div>
            <label for="content">content</label>
            <textarea rows='10' cols='30' id="content" name="content" ></textarea>
        </div>
        <div class="button">
            <button type="reset">Reinitialize</button><br>
            <input type="submit" id="submit" value="Publier"></input>
            <!-- <input type="submit"> autre manière de créer un bouton -->
        </div>
    </form>
    <br><a href="index.php"><button>Back</button></a>
    <script src="main.js"></script>
</body>
</html>