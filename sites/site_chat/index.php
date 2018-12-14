<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chat en ligne</title>
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/js/bootstrap.js">

</head>
<body>
  <div class="container">
   <div class="body">
	<h1>BIENVENUS DANS LA CHATROOM !</h1>
	<form action="server/co.php" method="POST">
		<div class="mid">
		<legend>Connecte-toi</legend>
		<label for="login">Nom de compte:</label><br>
		<input type="text" name="log" id="log" placeholder="Login"><br>
		<label for="password">Mot de passe:</label><br>
		<input type="password" name="pass" id="pass" placeholder="Password"><br>
		<button class="btn">Se connecter</button> <br>
		<a href="client/subscribe.php" class="btn btn">S'inscrire</a>
		</div>
	</form>
   </div>
  </div>	
</body>
</html>