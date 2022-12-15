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
		<form autocomplete="off">
			<div class="links" style="padding-bottom: 10px;">
				<a href="log-in.php">Retour</a>
			</div>
			<h2>Inscription</h2>
            <div class="inputBox">
				<input type="text" required="required">
				<span>Prénom</span>
				<i></i>
            </div>
            <div class="inputBox">
                <input type="text" required="required">
                <span>Nom</span>
                <i></i>
            </div>
			<div class="inputBox">
				<input type="text" required="required">
				<span>Adresse mail</span>
				<i></i>
			</div>
			<div class="inputBox">
				<input type="password" required="required">
				<span>Mot de Passe</span>
				<i></i>
			</div>
            <div class="inputBox">
				<input type="password" required="required">
				<span>Vérification Mot de Passe</span>
				<i></i>
			</div>
            
            <div class="links">
				<a href="#"></a>
                <a href="log-in.php ">Déjà un compte ?</a>
			</div>
			<div>
                <p class="terms">En créant un compte, vous acceptez nos <a href="cgu.php" style="color:dodgerblue">Conditions d'utilisations</a>.</p>
            <br></div>
            <input type="submit" value="Inscription">
		</form>
	</div>
</body>
</html>