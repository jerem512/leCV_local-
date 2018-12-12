<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chat en ligne</title>
	<link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
	<h1>BIENVENU DANS LA CHATROOM !</h1>
	<form action="server/co.php" method="POST">
		<legend>Connecte-toi</legend>
		<label for="login">Nom de compte:</label><br>
		<input type="text" name="log" id="log" placeholder="Login"><br>
		<label for="password">Mot de passe:</label><br>
		<input type="password" name="pass" id="pass" placeholder="Password"><br>
		<button>Se connecter</button> <br>
		<a href="client/subscribe.php">S'inscrire</a>
	</form>
</body>
</html>