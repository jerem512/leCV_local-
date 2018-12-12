<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inscription</title>
</head>
<body>
	<form action="../server/sub.php" method="POST">
		<legend>Incription :</legend>
		<p><label for="log">Nom de compte :</label></p>
		<input type="text" name="log"	id="log" placeholder="Login">
		<p><label for="pass">Mot de passe :</label></p>
		<input type="password" name="pass" id="pass" placeholder="Mot de passe">	
		<p><label for="pass2">Confirmation :</label></p>
		<input type="password" name="pass2" id="pass2" placeholder="Mot de passe">
		<p><label for="mail">Mail :</label></p>
		<input type="text" name="mail"	id="mail" placeholder="E-mail">
		<br>
		<button>S'inscrire</button>
	</form>
</body>
</html>