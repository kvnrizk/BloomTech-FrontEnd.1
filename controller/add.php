<?php
include '../includes/connexion.inc.php';
$con = OpenCon();
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $firstName =$_REQUEST['firstName'];
    $lastName =$_REQUEST['lastName'];
    $dateOfBirth = $_REQUEST["dateOfBirth"];
    $phone = $_REQUEST["phone"];
    $address = $_REQUEST["address"];
    $email = $_REQUEST["email"];
    $ins_query="insert into users
    (firstName,lastName,dateOfBirth,phone,address,email)VALUES
    ('$firstName','$lastName','$dateOfBirth','$phone','$address','$email')";
    mysqli_query($con, $ins_query)
    or die(mysql_error());
    $status = "New Record Inserted Successfully.
    </br></br><a href='../dashboard-admin.php'>View Inserted Record</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert New Record</title>
<link rel="stylesheet" href="assets/style.css" />
</head>
<body>
<div class="form">
<div>
<h1>Insert New Record</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="firstName" placeholder="Enter Name" required /></p>
<p><input type="text" name="lastName" placeholder="Enter Last name" required /></p>
<p><input type="date" name="dateOfBirth" placeholder="Enter Date Of Birth" required /></p>
<p><input type="text" name="phone" placeholder="Enter Phone Number" /></p>
<p><input type="text" name="address" placeholder="Enter Address" /></p>
<p><input type="email" name="email" placeholder="Enter email" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</body>
</html>