<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="acceuil.css">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <title> ROM_CHAT_SYS </title>
</head>
<body>
        <div class="form">
        <p style="text-align: center; color: white; font-size: 30px; font-weight: bolder"> INSCRIPTION </p>
            <form action="inscription.php" method="post">
                <p>
                    Nom d'utilisateur <br> 
                    <input type="text" name="nom" id="nom"> <br>
                </p>
                <p>
                    Pseudo <br> 
                    <input type="text" name="pseud" id="pseud"> <br>
                </p>
                <p>
                    Mot de passe <br> 
                    <input type="password" name="mot_de_passe" id="mot_de_passe"> <br>
                </p>
                <p>
                    Confirmer <br> 
                    <input type="password" name="mot_de_passe" id="mot_de_passe"> <br>
                </p>
                <p>
                    <input type="submit" name="inscrire" value="S'incrire">
                </p>
            </form>
        </div>
        <?php 
    ?>
</body>
</html>