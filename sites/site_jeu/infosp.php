<?php
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=JEU;charset=utf8', 'jeremydata', 'b302937ba5');
    } catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
}
?>
<?php 
session_start();
$id = $_SESSION['id'];
$newnom = $_POST['new_nom'];
$newprenom = $_POST['new_prenom'];
$newmail = $_POST['new_mail'];
if (empty($newnom || $newprenom || $newmail)){
	echo 'Tous les champs ne sont pas remplis';
}
else { 
$req=$bdd->prepare('UPDATE users SET nom, prenom, mail = :nom, :prenom, :mail WHERE id = :id');
$req->bindParam(':nom', $newnom);
$req->bindParam(':prenom', $newprenom);
$req->bindParam(':mail', $newmail);
$req->bindParam(':id', $id);
$req->execute();
echo 'Les modifications on été faites avec succès';
var_dump($newnom, $newprenom, $newmail, $id);
}
?>
