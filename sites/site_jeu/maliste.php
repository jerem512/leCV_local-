    <?php
try
{

    $bdd = new PDO('mysql:host=localhost;dbname=JEU;charset=utf8', 'jeremydata', 'b302937ba5');
}
catch(Exception $e)
{

        die('Erreur : '.$e->getMessage());
}
session_start();
$response = $bdd->query('SELECT * FROM jeux_video WHERE id = :id ORDER BY nom');

while ($donnees = $response->fetch())
{
?>
   <p>
        <?php echo $donnees['nom']; ?>
   </p>
<?php
}

$response->closeCursor();

?>
<p>
    <a href="index.php" class="btn btn-default">Retour</a>
</p>
<?php include("pied_page.php") ?>
</body>
</html>