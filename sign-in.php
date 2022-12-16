<?php 
include 'check-register.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Page d'inscription'</title>
	<link rel="stylesheet" href="assets/style-connexion.css">
</head>
<body>
	<div class="boxIn">
		<form autocomplete="off" action="sign-in.php" method="post">
		<?php include('error.php'); ?>
			<div class="links" style="padding-bottom: 10px;">
				<a href="log-in.php">Retour</a>
			</div>
			<h2>Inscription</h2>
            <div class="inputBox">
				<input type="text" name="firstName" required="required">
				<span>Prénom</span>
				<i></i>
            </div>
            <div class="inputBox">
                <input type="text" name="lastName" required="required" >
                <span>Nom</span>
                <i></i>
            </div>
			<div class="inputBox">
				<input type="date" name="dateOfBirth" required="required" placeholder="dd-mm-yyyy" value="" min="1950-01-01" max="2030-12-31">
				<span>Date De Naissance</span>
				<i></i>
			</div>
			<div class="inputBox">
				<input type="text" name="email" required="required">
				<span>Adresse mail</span>
				<i></i>
			</div>
			<div class="inputBox">
				<input type="password" name="password_1" required="required">
				<span>Mot de Passe</span>
				<i></i>
			</div>
            <div class="inputBox">
				<input type="password" name="password_2" required="required">
				<span>Vérification Mot de Passe</span>
				<i></i>
			</div>
            
            <div class="links">
				<a href="#"></a>
                <a href="log-in.php ">Déjà un compte ?</a>
			</div>
			<div>
                <p class="terms">En créant un compte, vous acceptez nos <a href="cgu.php" target="_blank" style="color:dodgerblue">Conditions d'utilisations</a>.</p>
            <br></div>
            <input type="submit" name="reg_user" value="Inscription">
		</form>
	</div>
</body>
</html>