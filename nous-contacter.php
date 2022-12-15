<?php
    include 'includes/header.inc.php';
?>


<main>

<div class="img-contact">
    <img src="assets/images/businessman-using-digital-tablet.jpg" alt="1" height="500px" width="100%">
</div>

<div class="container-contact">
    <div class="title">
        <h1>CONTACT US TODAY</h1>
    </div>
    <div class="sub-title">
        <p>Feel free to contact us regarding any information</p>
    </div>

    <div class="text">
        <p align="center">Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et
        justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
    </div>
    
    <div class="form">
        <form action="#">
            <input type="text" id="username" name="username" placeholder="Enter you name ...">
            <input type="email" id="mail" name="mail" placeholder="Enter you email ...">
            <textarea id="message" name="message" rows="4" cols="50" placeholder="Message"></textarea>
            <input type="submit" id="submit" value="Submit">
        </form>
    </div>
</div>

</main>


<?php
    include 'includes/footer.inc.php';
?>

<script src="assets/js/main.js"></script>

</body>
</html>