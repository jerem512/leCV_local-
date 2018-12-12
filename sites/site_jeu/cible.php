<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=JEU;charset=utf8', 'jeremydata', 'b302937ba5');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

?>
<?php

    if(isset($_POST['nom'], $_POST['possesseur'], $_POST['console'], $_POST['prix'], $_POST['nbre_joueurs_max'], $_POST['commentaires'])){
        $req = $bdd->prepare('INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES(:nom, :possesseur, :console, :prix, :nbre_joueurs_max, :commentaires)');
        $req->bindParam(':nom',$_POST['nom']);
        $req->bindParam(':possesseur', $_POST['possesseur']);
        $req->bindParam(':console', $_POST['console']);
        $req->bindParam(':prix', $_POST['prix']);
        $req->bindParam(':nbre_joueurs_max', $_POST['nbre_joueurs_max']);
        $req->bindParam(':commentaires', $_POST['commentaires']);        
        $sucess = $req->execute();
        if($sucess === false){
           echo implode(' ',$req->errorInfo());
        }
    }
        if($sucess === true){
            echo 'Le jeu à bien été ajouté !';
            header("Refresh: 0; URL=index.php");
        }
        else {
            echo 'Les champs entrés ne sont pas conformes !';
            header("Refresh: 0; URL=index.php");
        }

 ?>
 
<?php

$reponse->closeCursor();
?>
