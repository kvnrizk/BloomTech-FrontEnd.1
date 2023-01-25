<?php
include '../includes/connexion.inc.php';
$conn = OpenCon();
$id=$_REQUEST['id'];
$query = "DELETE FROM users WHERE id=$id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());
header("Location: ../dashboard-admin.php"); 
?>