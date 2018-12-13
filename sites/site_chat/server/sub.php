<?php 
include('../SQL/sql.php');
    if(isset($_POST['log'], $_POST['pass'], $_POST['pass2'], $_POST['mail'])){
        $pass = $_POST['pass'];
        $pass2 = $_POST['pass2'];
        $log = $_POST['log'];
        $mail = $_POST['mail'];
        if($pass == $pass2){
            $hashedPassword = password_hash($pass, PASSWORD_ARGON2I);
            $req = $bdd->prepare('INSERT INTO user(log, pass, mail) VALUES(:log, :pass, :mail)');
            $req->bindParam(':log', $log);
            $req->bindParam(':pass', $hashedPassword);
            $req->bindParam(':mail', $mail);
            $sucess = $req->execute();
            if($sucess === false){
            	echo implode(' ',$req->errorInfo());
            }
	 }else{
        ?>
            <script>alert('Les champs ne sont pas conformes !')</script>
        <?php
     }
}
        $req = $bdd->prepare('SELECT id, log FROM user WHERE log = :log');
        $req->bindParam(':log',$_POST['log']);
        $req->execute();
        $resultat=$req->fetch();
        if($sucess === true){
            session_start();
            $_SESSION['log'] = $resultat['log'];
            $_SESSION['id'] = $resultat['id'];            
?>
        <script>alert("Vous êtes bien inscrit !") </script>
        <?php
            header("Refresh: 1; URL=../client/app.php");
        }
        else {
?>
        <script>alert("Les champs entrés ne sont pas conformes !") </script>
        <?php
            header("Refresh: 1; URL=../client/subscribe.php");
        }
        $req->closeCursor();
