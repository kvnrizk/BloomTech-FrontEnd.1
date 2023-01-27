<?php
include '../includes/connexion.inc.php';
$con = OpenCon();
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $question =$_REQUEST['question'];
    $answer =$_REQUEST['answer'];
    $ins_query="insert into faq
    (question,answer)VALUES
    ('$question','$answer')";
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
<p><input type="text" name="question" placeholder="Enter you Question" required /></p>
<p><input type="text" name="answer" placeholder="Enter you answer" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</body>
</html>