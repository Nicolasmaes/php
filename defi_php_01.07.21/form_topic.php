

-- BONUS 2 : un script en JS qui vérifie que les champs ne sont pas vides -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form_topic</title>
</head>
<body>
    
        <form action="handler_topic.php" method="post">
        <div>
            <label for="author">author</label>
            <input id='author' type="text" name='author' >
        </div>
        <div>
            <label for="topic_article">topic_article</label>
            <input id='topic_article' type="text" name='topic_article' >
        </div>
        <div>
            <label for="content">content</label>
            <textarea id='content' type="text" name='content'></textarea>
        </div>
        <div>
            <input id='submit' type="submit">
        </div>
        <span id='alert'></span>
        </form>
        <script type="text/javascript" src="main.js"></script>
</body>
</html>