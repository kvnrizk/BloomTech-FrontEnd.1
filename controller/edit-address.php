<?php
include '../includes/connexion.inc.php';
$con = OpenCon();

$id=$_REQUEST['id'];
$query = "SELECT * from opticians where idoptic='".$id."'"; 
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
<h1>Edit Opricians</h1>

<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$adressoptic =$_REQUEST['adressoptic'];
$department =$_REQUEST['department'];
$phoneoptic = $_REQUEST["phoneoptic"];
$openinghours = $_REQUEST["openinghours"];
$stock = $_REQUEST["stock"];
$update="UPDATE opticians SET adressoptic='".$adressoptic."',
department='".$department."', phoneoptic='".$phoneoptic."',
openinghours='".$openinghours."' ,stock='".$stock."' WHERE idoptic='".$id."'";
mysqli_query($con, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br>
<a href='../dashboard-admin.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['idoptic'];?>" />
<p><input type="text" name="adressoptic" placeholder="Enter optician address" 
required value="<?php echo $row['adressoptic'];?>" /></p>
<p><input type="text" name="department" placeholder="Department" 
required value="<?php echo $row['department'];?>" /></p>
<p><input type="text" name="phoneoptic" placeholder="Phone Number" 
required value="<?php echo $row['phoneoptic'];?>" /></p>
<p><input type="text" name="openinghours" placeholder="Choose the Opening Hours" 
value="<?php echo $row['openinghours'];?>" /></p>
<p><input type="text" name="stock" placeholder="Enter the number of STOCKS" 
value="<?php echo $row['stock'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>