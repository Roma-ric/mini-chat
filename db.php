<?php 
    $host = "localhost";
    $dbname = "mini_chat";
    $login = "root";
    $password = "";
 
    try {
        $bdd = new PDO("mysql:host=$host;dbname=$dbname", $login, $password);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
    } catch (Exception $e) {
        echo "Erreur de connexion.";
    }
?>