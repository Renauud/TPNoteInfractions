<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vue/style/style_login.css">
    <title>Page de connexion - Consultation infractions</title>
</head>
<body>
    <form method="post" action="login.php" name="form_login">
        <fieldset>

            <h1>Identification</h1>

            <label for="login">Login :</label>
            <input type="text" name="login" id="login" placeholder="Entrez votre n° de permis" value="<?=htmlentities($identifiant["login"])?>">
            <br>

            <label for="password">Mot de passe :</label>
            <input type="password" name="motDePasse" placeholder="Entrez votre mot de passe">
            <br>

            <input type="submit" name="connexion" id="connexion" value="Connexion">
            <br>
            <p>
                <?=$message?>
            </p>

        </fieldset>

    </form>
</body>
</html>