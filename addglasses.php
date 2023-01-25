<?php 
include 'check-register.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>'Enregistrement des lunettes'</title>
	<link rel="stylesheet" href="assets/style-connexion.css">
</head>
<body>
	<div class="box">
		<form autocomplete="off" action="check-register.php" method="post">
		<?php include('error.php'); ?>
			<div class="links" style="padding-bottom: 10px;">
				<a href="index.php">Retour</a>
			</div>
			<h2>Entrez l'Identifiant de vos lunettes</h2>
            <div class="inputBox">
				<input type="text" name="idglasses" required="required">
				<span>ID</span>
				<i></i>
			</div>
            <input type="submit" name="reg_glasses" value="Enregistrer">
		</form>
	</div>
</body>
</html>