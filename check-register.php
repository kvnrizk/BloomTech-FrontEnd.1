<?php
// connect to the database
include 'includes/connexion.inc.php';
$conn = OpenCon();

session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 




// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
  $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
  $dateOfBirth = mysqli_real_escape_string($conn, $_POST['dateOfBirth']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password_1 = mysqli_real_escape_string($conn, $_POST['pwd']);
  $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);


  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($firstName)) { array_push($errors, "First Name Required"); }
  if (empty($lastName)) { array_push($errors, "Last Name Required"); }
  if (empty($dateOfBirth)) { array_push($errors, "Date Of Birth is Required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The Two Passwords Do Not Match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists

    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (firstName, lastName, dateOfBirth, email, password) 
  			  VALUES('$firstName', '$lastName', '$dateOfBirth' , '$email' , '$password')";
  	mysqli_query($conn, $query);
      $_SESSION['email'] = $email;
      $_SESSION['success'] = "You are now logged in";
  	header('location: log-in.php');
  }
}

// LOGIN USER
if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
  
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $results = mysqli_query($conn, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['email'] = $email;
            $_SESSION['success'] = "You are now logged in";
          header('location: index.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }



  //Add glasses ID
  $IDglasses="";
  if (isset($_POST['idglasses'])) {
    $email= $_SESSION['email'];
    $IDglasses = mysqli_real_escape_string($conn, $_POST['idglasses']);
    $idgl_check_query = "SELECT * FROM users WHERE idglasses='$IDglasses' LIMIT 1";
    $result = mysqli_query($conn, $idgl_check_query);
    $user = mysqli_fetch_assoc($result);
    if ($user['idglasses'] === $IDglasses) {
      array_push($errors, "Ces lunettes sont déjà associées à un autre profil.");
      header('location: addglasses.php');
    } else {
    $query2 = "UPDATE users
    SET idglasses='$IDglasses'
    WHERE email='$email'";
    mysqli_query($conn, $query2);
    header('location: index.php');
    }
  }
  ?>