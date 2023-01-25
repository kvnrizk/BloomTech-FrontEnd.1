<?php
include '../includes/connexion.inc.php';
$con = OpenCon();
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $adressoptic =$_REQUEST['adressoptic'];
    $department =$_REQUEST['department'];
    $phoneoptic = $_REQUEST["phoneoptic"];
    $openinghours = $_REQUEST["openinghours"];
    $stock = $_REQUEST["stock"];
    $ins_query="insert into opticians
    (adressoptic,department,phoneoptic,openinghours,stock)VALUES
    ('$adressoptic','$department','$phoneoptic','$openinghours','$stock')";
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
<p><input type="text" name="adressoptic" placeholder="Enter Optician Address" required /></p>
<p><input type="text" name="department" placeholder="Department" required /></p>
<p><input type="text" name="phoneoptic" placeholder="Enter Phone number" required /></p>
<p><input type="text" name="openinghours" placeholder="Enter the Opening hours" /></p>
<p><input type="text" name="stock" placeholder="Enter the numbers of stock" /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</body>
</html>