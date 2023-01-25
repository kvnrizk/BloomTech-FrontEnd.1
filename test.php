<?php
include 'includes/connexion.inc.php'; 
$conn = OpenCon();
echo "Connected Successfully";
CloseCon($conn);
?>