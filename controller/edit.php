<?php
include '../includes/connexion.inc.php';
$con = OpenCon();

$id=$_REQUEST['id'];
$query = "SELECT * from users where id='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>

<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<h1>Edit User</h1>

<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$firstName =$_REQUEST['firstName'];
$lastName =$_REQUEST['lastName'];
$dateOfBirth = $_REQUEST["dateOfBirth"];
$phone = $_REQUEST["phone"];
$address = $_REQUEST["address"];
$email = $_REQUEST["email"];
$update="UPDATE users SET firstName='".$firstName."',
lastName='".$lastName."', dateOfBirth='".$dateOfBirth."',
phone='".$phone."' ,address='".$address."',email='".$email."' WHERE id='".$id."'";
mysqli_query($con, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br>
<a href='../dashboard-admin.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<p><input type="text" name="firstName" placeholder="Enter First Name" 
required value="<?php echo $row['firstName'];?>" /></p>
<p><input type="text" name="lastName" placeholder="Enter Last Name" 
required value="<?php echo $row['lastName'];?>" /></p>
<p><input type="date" name="dateOfBirth" placeholder="Date Of Birth" 
required value="<?php echo $row['dateOfBirth'];?>" /></p>
<p><input type="text" name="phone" placeholder="Enter Phone Number" 
value="<?php echo $row['phone'];?>" /></p>
<p><input type="text" name="address" placeholder="Enter Address" 
value="<?php echo $row['address'];?>" /></p>
<p><input type="email" name="email" placeholder="Enter Email" 
required value="<?php echo $row['email'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>