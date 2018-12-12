<?php 
include('../SQL/sql.php');
    if(isset($_POST['log'], $_POST['pass'], $_POST['pass2'], $_POST['mail'])){
        $pass = $_POST['pass'];
        $pass2 = $_POST['pass2'];
        $log = $_POST['log'];
        $mail = $_POST['mail'];
        $a = 5;
        $b = 10;
        if($pass == $pass2){
            $hashedPassword = password_hash($pass, PASSWORD_ARGON2I);
            // $req = $bdd->prepare('INSERT INTO user(log, pass, mail) VALUES(:log, :pass, :mail)');
            // $req->bindParam(':log', $log);
            // $req->bindParam(':pass', $hashedPassword);
            // $req->bindParam(':mail', $mail);
            // $sucess = $req->execute();
            // if($sucess === false){
            // 	echo implode(' ',$req->errorInfo());
            // }
            var_dump($log);
            echo '<br />';
            var_dump($hashedPassword);
            echo '<br />';
            var_dump($mail);
            echo '<br />';
            var_dump($a);
	 }
}
