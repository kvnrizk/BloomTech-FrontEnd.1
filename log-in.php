<?php
include ('check-register.php');
?>


<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Page de connexion</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/style-connexion.css">
</head>
<body>
	<div class="box">
		<form autocomplete="off" action="log-in.php" method="post">
		<?php include ('error.php'); ?>
			<div class="links" style="padding-bottom: 10px;">
				<a href="index.php">Retour à l'accueil</a>
			</div>
			<h2>Connexion</h2>
			<div class="inputBox" >
				<input type="text" required="required" name='email'>
				<span>Adresse mail</span>
				<i></i>
			</div>
			<div class="inputBox">
				<input type="password" required="required" name='password'>
				<span>Mot de Passe</span>
				<i></i>
			</div>
			<div class="links">
				<a href="forgot.php">Mot de passe oublié ?</a>
				<a href="sign-in.php">Inscription</a>
			</div>
			<input type="submit" name='login' value="Connexion">
		</form>
	</div>
</body>
</html>
