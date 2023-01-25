<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Oubli de Mot de Passe</title>
	<link rel="stylesheet" href="assets/style-connexion.css">
</head>
<body>
	<div class="boxfrgt">
		<form autocomplete="off">
			<div class="links" style="padding-bottom: 10px;">
				<a href="log-in.php">Retour</a>
			</div>
			<h2>Mot de passe oublié ?</h2>
            <div class="txtmail">
				<p><br>Veuillez saisir l'adresse e-mail associée à votre compte d'utilisateur. Un code de vérification vous sera adressé. Lorsque vous le recevrez, vous pourrez choisir un nouveau mot de passe.
				</p>
			</div>
			<div class="inputBox">
				<input type="text" required="required">
				<span>Adresse mail</span>
				<i></i>
			</div>
			<br>
			<input type="submit" value="Envoyer">
		</form>
	</div>
</body>
</html>