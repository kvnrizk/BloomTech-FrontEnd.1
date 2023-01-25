<?php
// connect to the database
include 'includes/connexion.inc.php';
$conn = OpenCon();

// initializing variables
$username = "";
$password    = "";
$errors = array(); 

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Document</title>
</head>
<body>
<?php


if (isset($_POST['adminLogin'])) { 

    $username = mysqli_real_escape_string($conn, $_POST['admin-username']);
    $password = mysqli_real_escape_string($conn, $_POST['admin-password']);


    if (empty($username)) {
        array_push($errors, "Both Username Or Password Are Required");
    }
    if (empty($password)) {
        array_push($errors, "Both Username Or Password Are Required");
    }

    if (count($errors) == 0) {
        
        $query = "SELECT * FROM admins WHERE admin_user='$username' AND admin_password='$password'";
        $results = mysqli_query($conn, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['admin-username'] = $username;
            $_SESSION['success'] = "You are now logged in";
          header('location: dashboard-admin.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }

    ?>
    
    <form class='admin-login' action='<?php echo $_SERVER["PHP_SELF"];?>' method='POST'>

	<h2>Admin Login</h2>
    
	<input type="text" name="admin-username" class="text-field" placeholder="Username" />
    <input type="password" name="admin-password" class="text-field" placeholder="Password" />
    
    <input type="submit" name='adminLogin' class="button-admin" value="Log In" />
    <?php include ('error.php'); ?>

    

</form>



</body>
</html>
