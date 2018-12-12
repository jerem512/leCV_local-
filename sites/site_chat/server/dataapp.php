<?php
// Connexion à la base de données
include("../SQL/sql.php");
// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO chat (pseudo, message) VALUES(?, ?)');
$req->execute(array($_POST['pseudo'], $_POST['message']));

// Redirection du visiteur vers la page du minichat
header('Location: ../client/app.php');
?>