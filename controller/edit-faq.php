<?php
include '../includes/connexion.inc.php';
$con = OpenCon();

$id=$_REQUEST['id'];
$query = "SELECT * from faq where id='".$id."'"; 
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
<h1>Edit FAQ</h1>

<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$questions =$_REQUEST['questions'];
$answers =$_REQUEST['answers'];
$update="UPDATE faq SET questions='".$questions."',
answers='".$answers."' WHERE id='".$id."'";
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
<p><input type="text" name="questions" placeholder="Enter the question" 
required value="<?php echo $row['questions'];?>" /></p>
<p><input type="text" name="answers" placeholder="Enter your Answer" 
required value="<?php echo $row['answers'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>