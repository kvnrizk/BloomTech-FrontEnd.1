<?php 
if (session_id() == ''){
session_start();} 
if ( ! isset($_SESSION["email"]) || empty($_SESSION["email"]) ){ ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
	<title>Accueil</title>
</head>
<body>
	<header class="main-header">
        <div class="company-name">
            <img class="logo" src="assets/images/Infinite_measures.gif" width="125px" height="125px" alt="logo"><h2>Infinite Measures</h2>
        </div> 
        <nav class="nav-bar">
            <ul class="nav-list">
                <li class="nav-item"><a href="index.php">Accueil</a></li>
                <li class="nav-item"><a href="location.php">Où nous trouver ?</a></li>
                <li class="nav-item"><a href="faq.php">FAQ</a></li>
                <li class="nav-item"><a href="nous-contacter.php">Nous contacter</a></li>
                <li class="nav-item"><a href="log-in.php">Se connecter</a></li>
            </ul>
        </nav>    
   </header> 

   <header class="mobile-header">
    <div class="title">
        <img class="logo" src="assets/images/Infinite_measures.gif" width="125px" height="125px" alt="logo">
    </div>
    <nav class="nav-bar">
        <div id="mobile-links">
            <a href="index.php">Accueil</a>
            <a href="location.php">Où nous trouver ?</a>
            <a href="faq.php">FAQ</a>
            <a href="nous-contacter.php">Nous contacter</a>
            <a href="log-in.php">Se connecter</a>
        </div>
    </nav>
    <a href="#" class="icon" onclick="myFunction()">
        <i class="fa fa-navicon"></i>
    </a>
</header>

<?php } else { ?>

    <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
	<title>Accueil</title>
</head>
<body>
	<header class="main-header">
        <div class="company-name">
            <img class="logo" src="assets/images/Infinite_measures.gif" width="125px" height="125px" alt="logo"><h2>Infinite Measures</h2>
        </div> 
        <nav class="nav-bar">
            <ul class="nav-list">
                <li class="nav-item"><a href="index.php">Accueil</a></li>
                <li class="nav-item"><a href="location.php">Où nous trouver ?</a></li>
                <li class="nav-item"><a href="faq.php">FAQ</a></li>
                <li class="nav-item"><a href="nous-contacter.php">Nous contacter</a></li>
                <li class="nav-item"><a href="my-account.php">Mon Profil</a></li>
            </ul>
        </nav>    
   </header> 

   <header class="mobile-header">
    <div class="title">
        <img class="logo" src="assets/images/Infinite_measures.gif" width="125px" height="125px" alt="logo">
    </div>
    <nav class="nav-bar">
        <div id="mobile-links">
            <a href="index.php">Accueil</a>
            <a href="location.php">Où nous trouver ?</a>
            <a href="faq.php">FAQ</a>
            <a href="nous-contacter.php">Nous contacter</a>
            <a href="my-account.php">Mon Profil</a>
        </div>
    </nav>
    <a href="#" class="icon" onclick="myFunction()">
        <i class="fa fa-navicon"></i>
    </a>
</header>

<?php }