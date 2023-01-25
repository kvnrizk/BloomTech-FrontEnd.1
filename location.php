<?php
    include 'includes/header.inc.php';
    include 'includes/connexion.inc.php';
?>

<main>
<div class="container">
    <div class="main-body">
        <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d21010.864754150924!2d2.286458883967084!3d48.832307874222586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sopticien!5e0!3m2!1sen!2sfr!4v1674221389211!5m2!1sen!2sfr" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="optician-addresses">
        <div class="boxes">
            <ul class="list-of-addresses">
            <li class="li-2">
                <h4 style="margin-top:0; text-align: center;">LISTE DES OPTICIENS<hr>
            </li>

        <?php
        $conn=OpenCon();
        $query='SELECT * FROM opticians';
        $req = mysqli_query($conn, $query);
        $data=mysqli_fetch_assoc($req);
        foreach ($req as $data){
            $name=$data['opticianname'];
            $adress=$data['adressoptic'];
            $time=$data['openinghours'];
            $phone=$data['phoneoptic'];
            $stock=$data['stock'];
        ?>

            <li class="li-2">
                <h4 style="margin-top:0;"><?php echo "$name"?></h4><br>
                <span>Adresse : <?php echo "$adress"?> </br>
                Numéro de téléphone : <?php echo "$phone"?></br>
                Horaires d'ouverture : <?php echo "$time"?> </br>
                En stock :
                <?php if ("$stock"=="Non"){
                    ?> NON <?php
                } else {
                    ?> OUI <?php
                }
                ?>
                </span><hr>
            </li>
<?php
}
?>

            </ul>

                <div class="box-info">
                    <div class="title">
                        <h2>Besoin de plus d'information?</h2>
                    </div>
                    <div class="information">
                        <span>
                        Voici la liste des opticiens partenaires. </br>
                        Vous y trouverez leurs coordonnées et la disponibilité de nos produits. </br>
                        Avant tout achat, veuillez consulter un ophtalmologue afin de pouvoir acheter des lunettes adaptées à votre vue.</br>
                        Pour plus d'information sur nos lunettes Binoclear ou pour nous contacter, veuillez cliquer sur les boutons ci-dessous.
                        </span><br>
                    <div class="btn-info">
                        <a class="harik-style" href="FAQ.php">FAQ</a>
                        <a class="harik-style" href="nous-contacter.php">Nous contacter</a>
                    </div>

                    </div>
                    
                    
                </div>

            
        </div>
    </div>
    </div>
</div>
</main>

<?php
include 'includes/footer.inc.php' ;
?>

<script src='assets/js/main.js'></script>
   
</body>
</html>
