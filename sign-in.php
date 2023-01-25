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
			
		
			<br>

<div class="inputBox">
	
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" name="password"> </script>
	
	<script type="text/javascript" name="YES">
	
					$(document).ready(function() 
		{ 
					$('#pwd').keyup(function() 
				{ 
					$('#affichageMessage').html(checkStrength($('#pwd').val())) 
				}) 
					function checkStrength(password) 
			{
					var strength = 0 
					if (password.length < 6) { 
					$('#affichageMessage').removeClass() 
					$('#affichageMessage').addClass('short') 
					return "<font color='red' size='3'>Trop court</font>" 
				} 
					if (password.length > 6) strength += 1 
					if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) strength += 1 
					if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/)) strength += 1 
					if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1 
					if (password.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1 
					if (strength < 2) 
				{ 
					$('#affichageMessage').removeClass() 
					$('#affichageMessage').addClass('weak') 
					return "<font color='orange' size='3'>Faible</font>" 
				} 
					else if (strength == 2) 
				{ 
					$('#affichageMessage').removeClass() 
					$('#affichageMessage').addClass('good') 
					return "<font color='blue' size='3'>Bien</font>" 
				} 
					else 
				{ 
					$('#affichageMessage').removeClass() 
					$('#affichageMessage').addClass('strong') 
					return "<font color='green' size='3'>Fort</font>" 
				} 
			} 
		}); 
		
	</script> 


		<input name="pwd" id="pwd" required="required" type="password"/> 
		
		<span id="affichageMessage" name="pwd">Mot de Passe</span>
		
		<i></i>
		</div>
		
	<h89>Votre mot de passe doit comporter au minimum 6 caractères dont une majuscule, un chiffre et un caractère spécial.</h89>
	
		<style>
			
			h89
				{
					color: #8f8f8f;
					font-size:12px;
				}
				
		</style>

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
				<input type="checkbox" required="required" style="padding-top:50px">
                <p class="terms">En créant un compte, vous acceptez nos <a href="cgu.php" target="_blank" style="color:dodgerblue">Conditions d'utilisations</a>.</p>
            <br></div>
			<div>
			<input type="submit" name="reg_user" value="Inscription">
			</div>
	
		</form>

	</div>
	
</body>

</html>