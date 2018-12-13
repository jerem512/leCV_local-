<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mini-chat</title>
        <link rel="stylesheet" href="../assets/css/main.css">
    </head>
    <body>
    <h1>CHATROOM</h1>
    <legend>Discutez avec vos amis !</legend>
    <?php 
session_start(); 
// Connexion à la base de données
include("../SQL/sql.php");
// Récupération des 10 derniers messages
$reponse = $bdd->query('SELECT pseudo, message FROM chat ORDER BY ID DESC LIMIT 0, 20');
// Affichage de chaque message
while ($donnees = $reponse->fetch()){
    echo '<label><strong>' . htmlspecialchars($donnees['pseudo']) . '</label></strong> : ' . '<p>' . htmlspecialchars($donnees['message']) . '</p>';
}

$reponse->closeCursor();

?>
    <form action="../server/dataapp.php" method="post">
        <p>
        <input type="text" placeholder="Message" name="message" id="message" />
        <input type="submit" value="Envoyer" />
    </p>
    </form>

<a href="../assets/assists/logout.php">Quitter la Chatroom</a>
    </body>
</html>