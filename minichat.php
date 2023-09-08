<?php 

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title> Mini Chat</title>
</head>
<body>
    <?php
        # phpinfo(); 
    ?>
    <div class="conteneur">
        <div class="form">
            <form action="minichat_post.php" method="post">
                <p>
                    Pseudo <br> 
                    <input type="text" name="pseu" id="pseu"> <br>
                </p>
                <p>
                    Message <br> 
                    <input type="text" name="mes" id="mes"> <br>
                </p>
                <p>
                    <input type="submit" name="envoyer" value="Envoyer">
                </p>
            </form>
        </div>
        <div class= "conversation">
            <p style="text-align: center; color: yellow; font-size: 25px; font-weight: bolder"> Chat </p>
            <?php 
                include ("db.php");
                
                $request = "SELECT pseudo, message_, DATE(date_time_message) ,TIME(date_time_message) FROM chat LIMIT  20";

                $pre = $bdd->prepare($request);
                
                $pre->execute();
                
                $recup = $pre->fetchAll();

                echo $recup[7][2];
                for ($i = 0; $i <= sizeof($recup) ; $i++) { 
                    echo "<p> <strong>" .$recup[$i]["pseudo"]." : </strong>" .$recup[$i]["message_"]. " &nbsp; ".$recup[$i][3]."</p>";
                }

                #JOINTURE INTERNE
                $req = "SELECT utilisateur.nom_user AS nom , utilisateur.pseudo_user, chat.message_
                        FROM chat 
                        LEFT JOIN utilisateur
                        ON  chat.pseudo = utilisateur.pseudo_user
                        WHERE utilisateur.nom_user LIKE 'A%'
                        ORDER BY utilisateur.nom_user DESC
                        LIMIT 3";

                $prep = $bdd->prepare($req);

                $prep->execute();

                $recuper = $prep->fetchAll();

                foreach ($recuper as $key => $value) {
                    echo $recuper[$key]["nom"]. "<br>";
                }
            ?>
            
        </div>
    </div>
</body>
</html>