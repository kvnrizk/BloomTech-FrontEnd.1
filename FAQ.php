<?php
    include 'includes/header.inc.php';
    include 'includes/connexion.inc.php';
?>


<main>
<h1 class="company-description-title" align="center">FOIRE AUX QUESTIONS</h1>

<?php
$conn=OpenCon();
$query='SELECT * FROM faq';
$req = mysqli_query($conn, $query);
$data=mysqli_fetch_assoc($req);
foreach ($req as $data){
    $question=$data['question'];
    $answer=$data['answer'];
?>
            <div class="white-box">
                <div class="question-box">

                <h2><?php echo "$questions"?></h2>

                <p><?php echo "$answers"?></p>
                </div>
            </div>
        </br>
<?php
}
?>
</main>

<?php
    include 'includes/footer.inc.php';
?>

<script src="assets/js/main.js"></script>

</body>
</html>