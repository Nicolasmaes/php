<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Back-office portfolio</title>
</head>
<body>
    <form action="register.php" method="post">
        <div>
            <label for="input_username">Nom </label>
            <input type="text" name="username" id="input_username" required>
        </div>
        <div>
            <label for="input_email">E-mail </label>
            <input type="email" name="email" id="input_email" required>
        </div>
        <div>
            <label for="input_password">Mot de passe </label>
            <input type="password" name="password" id="input_password" required>
        </div>
        <div>
            <label for="input_confirmation">Confirmation du mot de passe </label>
            <input type="password" name="confirmation" id="input_confirmation" required>
        </div>
        <div><input type="submit" value="enregistrer" id='submit'></div>
        <span id="error"></span>
    </form>
<script src="main.js"></script>
</body>
</html>