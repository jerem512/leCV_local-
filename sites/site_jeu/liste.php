<!DOCTYPE html>
<html lang="en">
<head>
    <title>Liste des jeux</title>
</head>
<body>
    
    <?php include("entete.php"); ?>

    <?php include("menu_co.php") ?>

    <h1><u>Liste des jeux :</u></h1>

    <?php
try
{

    $bdd = new PDO('mysql:host=localhost;dbname=JEU;charset=utf8', 'jeremydata', 'b302937ba5');
}
catch(Exception $e)
{

        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT * FROM jeux_video ORDER BY nom');

while ($donnees = $reponse->fetch())
{
?>
    <p>
        <?php echo $donnees['nom']; ?>
   </p>
<?php
}

$reponse->closeCursor();

?>
    <a href="index.php" class="btn btn-default">Retour</a>
</body>
<?php include("pied_page.php") ?>
</html>