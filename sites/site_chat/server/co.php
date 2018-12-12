<?php
include("../SQL/sql.php");
if(isset($_POST['log'], $_POST['pass'])){
    $req=$bdd->prepare('SELECT id, log, pass FROM user WHERE log = :log');
    $req->bindParam(':log',$_POST['log']);
    $req->execute();
    $resultat=$req->fetch();
    if(!$resultat){
    ?>
    <script>alert("Mauvais identifiants !") </script>
    <?php 
        header("Refresh: 1; URL=../index.php");
}
    else{
        $isPasswordCorrect = password_verify($_POST['pass'], $resultat['pass']);
            if($isPasswordCorrect){
                    ?>
                    <script>alert("Vous êtes connectés !")</script>
                    <?php
                    session_start();
                    $_SESSION['log'] = $resultat['log'];
                    $_SESSION['id'] = $resultat['id'];
                    header("Refresh: 1; URL=../client/app.php");
                }
                else{
                    ?>
                    <script>alert("Mauvais mot de passe !") </script>
                    <?php  
                    header("Refresh: 1; URL=../index.php");
                }
            }
        }
?>
