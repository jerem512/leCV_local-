<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mini-chat</title>
    </head>
    <body>
    <?php session_start(); 
    var_dump($_SESSION);

       ?>
    <?php
// Connexion à la base de données
include("../SQL/sql.php");
// Récupération des 10 derniers messages
$reponse = $bdd->query('SELECT pseudo, message FROM chat ORDER BY ID DESC LIMIT 0, 10');

// Affichage de chaque message
while ($donnees = $reponse->fetch()){
    echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
}

$reponse->closeCursor();

?>
    <form action="../server/dataapp.php" method="post">
        <p>
        <label for="message">Message</label> :  <input type="text" name="message" id="message" /><br />
        <input type="submit" value="Envoyer" />
    </p>
    </form>

<a href="../assets/assists/logout.php">Se déconnecter</a>
    </body>
</html>