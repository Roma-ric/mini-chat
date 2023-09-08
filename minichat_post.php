<?php 
    include ("db.php");

    if (isset($_POST["envoyer"])) {
        if (!$_POST["pseu"] && !$_POST["mes"]) {
            echo "Veillez renseigner au moins votre pseudo";
        }else {
            $pseudo = $_POST["pseu"];
            $message = $_POST["mes"];

            $ecrire = "INSERT INTO chat (pseudo, message_, date_time_message) VALUES (?,?,NOW())";
            
            $preparer = $bdd->prepare($ecrire);
            
            try {
                $preparer->execute([$pseudo, $message]);
            } catch (Exception $e) {
                echo $e->getMessage();
            }
            
            header("location: minichat.php");
        }
    }
?>