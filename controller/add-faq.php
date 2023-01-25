<?php
include '../includes/connexion.inc.php';
$con = OpenCon();
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $questions =$_REQUEST['questions'];
    $answers =$_REQUEST['answers'];
    $ins_query="insert into faq
    (questions,answers)VALUES
    ('$questions','$answers')";
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
<p><input type="text" name="questions" placeholder="Enter you Question" required /></p>
<p><input type="text" name="answers" placeholder="Enter you Answers" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</body>
</html>