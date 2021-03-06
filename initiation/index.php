<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>My first PHP form</title>
  </head>
  <body>
    <form action="form.php" method="post"><!-- action définit l'URL où sont envoyées les données, l'attribut method définit la méthode php utilisée pour envoyer les données (get ou post)-->
        <fieldset>
        <legend>Formulaire</legend>
        <div>
            <label for="name">Objet</label>
            <input type="text" id='name' name='user_name'>
        </div>
        <div>
            <label for="mail">Destinataire</label><br>
            <input type="email" id='mail' name='user_mail'>
        </div>
        <div>
            <label for="msg">Message</label>
            <textarea name="user_message" id="msg"></textarea>
        </div>
        <div class="button">
            <button type="reset">Remettre à zéro</button><br>
            <button type="submit">Envoyer</button>
            <!-- <input type="submit"> autre manière de crée un bouton -->
        </div>
        </fieldset>
</form>
  </body>
</html>