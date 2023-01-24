<?php
    include 'includes/header.inc.php';
    include 'includes/connexion.inc.php';
    
    if (session_id() == ''){
        session_start();} 
        if ( ! isset($_SESSION["email"]) || empty($_SESSION["email"]) ){ ;
?>

<main>
    

    <div class="contenu">
    <div class="connexion">
        <img class="fond" src="assets/images/digital-world-dreamscene-big2.gif" alt="globe-turning" width="100%" height="700px">
    </div>

    <div class="gif-buttons">
        <a href="log-in.php">SE CONNECTER</a>
        <a href="#section1">EN SAVOIR PLUS</a>     
    </div>
</div>
<?php } else {
    $conn=OpenCon();
    $query1='SELECT * FROM users WHERE email = "'.$_SESSION['email'].'"';
    $result1=mysqli_query($conn, $query1);
    $data1=mysqli_fetch_assoc($result1); 
    $idglasses=$data1['idglasses'];
    if ("$idglasses" != "") {
 
        $date = date('Y-m-d'); //today date
        $days = array();
        $query2='SELECT * FROM glassesdata WHERE idglasses="'.$idglasses.'"';
        $req = mysqli_query($conn, $query2);
        $data2=mysqli_fetch_assoc($req);
        if (empty($data2) ) {
        ?>
            <div class="white-box">
                <div class="company-box">

                <h2>AUCUNE DONNÉE ENREGISTRÉE</h2>

                <p>Vous n'avez pas encore de donnée enregistrée pour vos lunettes. </br>
                Commencez à les utiliser puis revenez ici consulter vos informations !</p>
            </div>
        </div>
        <?php
        } else {
        foreach ($req as $data){
            $date = date($data['datedata'], strtotime($date));
            $days[] = date('l : Y-m-d', strtotime($date));
            $ST[]=$data['screentime'];
            $CO2[]=$data['CO2'];
            $HB[]=$data['heartbeat'];
            $noise[]=$data['noise'];
        }
        
        $days=array_reverse($days);
        $ST=array_reverse($ST);
        $HB=array_reverse($HB);
        $CO2=array_reverse($CO2);
        $noise=array_reverse($noise);
        for ($x = 1; $x <= 7; $x+=1 ){
            $moyST[] = array_sum($ST)/count($ST);
            $moyCO2[] = array_sum($CO2)/count($CO2);
            $moyHB[] = array_sum($HB)/count($HB);
            $moynoise[] = array_sum($noise)/count($noise);
        }
        
        $week= array_slice($days, 0, 7);
        $weekST= array_slice($ST, 0, 7);
        $weekCO2= array_slice($CO2, 0, 7);
        $weekHB= array_slice($HB, 0, 7);
        $weeknoise= array_slice($noise, 0, 7);
    
    ?>
    
<h1 class="company-description-title" align="center">MES DONNÉES</h1>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="flex-grow: 1;width: 600px; height:350px; display: table-cell;">
            <canvas id="myChart"></canvas>
        </div>
        <div style="flex-grow: 1;width: 700px;height:350px; display: table-cell;">
            <canvas id="myChart2"></canvas>
        </div>
    </div>
</div>
    </br>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="flex-grow: 1;width: 600px; height:350px; display: table-cell;">
            <canvas id="myChart3"></canvas>
        </div>
        <div style="flex-grow: 1;width: 700px;height:350px; display: table-cell;">
            <canvas id="myChart4"></canvas>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  var labels = <?php echo json_encode($week)?>;
  var ctx = document.getElementById('myChart');
  var ctx2 = document.getElementById('myChart2');
  var ctx3 = document.getElementById('myChart3');
  var ctx4 = document.getElementById('myChart4');


  new Chart(ctx, {
    type: 'bar',
    options: {
        plugins: {
            title: {
                display: true,
                text: "Temps d'écran",
                padding: {
                    top: 10,
                },
                font: {
                    family: 'Trebuchet MS',
                    size: 20,
                    weight: 'bold',
                    lineHeight: 1.2,
                        
            }},
            subtitle: {
                display: true,
                text: '(7 derniers jours)',
                padding: {
                    top: 10,
                    bottom: 30
                },
                font: {
                    family: 'Trebuchet MS',
                    size: 15,
                    lineHeight: 1.2,
                    }},
            legend: {
                position : 'bottom',
                font: {
                    family: 'Trebuchet MS',
                    size: 5,
                    lineHeight: 1.2,
                    },
            }
        
        }},
    data: {
      labels: labels,
      datasets: [{
        label: "Temps d'écran en heures",
        data:<?php echo json_encode($weekST) ?>,
        borderWidth: 1,
        backgroundColor: [
            'rgba(54, 162, 235)'
            ],
        
    }, {
        type: 'line',
        label: 'Moyenne',
        data: <?php echo json_encode($moyST) ?>,
        borderWidth: 5,
        radius: 10, 
        pointStyle: 'line',
        fill: true,
        borderColor: [
            'rgb(255, 162, 0)'
            ],
        backgroundColor: 'rgba(255, 162, 0, 0.3)',
        order: 1,
    }]
    },
  });

  new Chart(ctx2, {
    type: 'bar',
    options: {
        responsive: true,
        plugins: {
            title: {
                display: true,
                text: "Proportion de CO2",
                padding: {
                    top: 10,
                },
                font: {
                    family: 'Trebuchet MS',
                    size: 20,
                    weight: 'bold',
                    lineHeight: 1.2,
                        
            }},
            subtitle: {
                display: true,
                text: '(7 derniers jours)',
                padding: {
                    top: 10,
                    bottom: 30
                },
                font: {
                    family: 'Trebuchet MS',
                    size: 15,
                    lineHeight: 1.2,
                    }},
            legend: {
                position : 'bottom',
                font: {
                    family: 'Trebuchet MS',
                    size: 5,
                    lineHeight: 1.2,
                    },
            }
        }},
    data: {
      labels: labels,
      datasets: [{
        label: "CO2 en %",
        data:<?php echo json_encode($weekCO2) ?>,
        borderWidth: 1,
        backgroundColor: [
            'rgba(9,106,9)'
            ],
        order: 1,
    }, {
        type: 'line',
        label: 'Moyenne',
        data: <?php echo json_encode($moyCO2) ?>,
        borderWidth: 5,
        hoverBorderWidth: 5,
        pointStyle: false,
        intersect : false,
        fill: true,
        borderColor: [
            'rgb(100,55,9)'
            ],
        backgroundColor: 'rgba(100,55,9, 0.3)',
        order: 2,
    }]
    },
  });


  new Chart(ctx3, {
    type: 'bar',
    options: {
        responsive: true,
        plugins: {
            title: {
                display: true,
                text: "Battements de coeur",
                padding: {
                    top: 10,
                },
                font: {
                    family: 'Trebuchet MS',
                    size: 20,
                    weight: 'bold',
                    lineHeight: 1.2,
                        
            }},
            subtitle: {
                display: true,
                text: '(7 derniers jours)',
                padding: {
                    top: 10,
                    bottom: 30
                },
                font: {
                    family: 'Trebuchet MS',
                    size: 15,
                    lineHeight: 1.2,
                    }},
            legend: {
                position : 'bottom',
                font: {
                    family: 'Trebuchet MS',
                    size: 5,
                    lineHeight: 1.2,
                    },
            }
        
        }},
    data: {
      labels: labels,
      datasets: [{
        label: "Nombre de battements de coeur par minute",
        data:<?php echo json_encode($weekHB) ?>,
        borderWidth: 1,
        backgroundColor: [
            'rgba(200,0,0)'
            ],
    }, {
        type: 'line',
        label: 'Moyenne',
        data: <?php echo json_encode($moyHB) ?>,
        borderWidth: 5,
        radius: 10, 
        pointStyle: 'line',
        fill: true,
        borderColor: [
            'rgb(0,0,150)'
            ],
        backgroundColor: 'rgba(0,0,150, 0.3)',
        order: 1,
    }]
    },
  });

  new Chart(ctx4, {
    type: 'bar',
    options: {
        responsive: true,
        plugins: {
            title: {
                display: true,
                text: "Nuisance sonore",
                padding: {
                    top: 10,
                },
                font: {
                    family: 'Trebuchet MS',
                    size: 20,
                    weight: 'bold',
                    lineHeight: 1.2,
                        
            }},
            subtitle: {
                display: true,
                text: '(7 derniers jours)',
                padding: {
                    top: 10,
                    bottom: 30
                },
                font: {
                    family: 'Trebuchet MS',
                    size: 15,
                    lineHeight: 1.2,
                    }},
            legend: {
                position : 'bottom',
                font: {
                    family: 'Trebuchet MS',
                    size: 5,
                    lineHeight: 1.2,
                    },
            }
        
        }},
    data: {
      labels: labels,
      datasets: [{
        label: "Plus haute nuisance sonore en dB",
        data:<?php echo json_encode($weeknoise) ?>,
        borderWidth: 1,
        backgroundColor: [
            'rgba(255,200,0)'
            ],
    }, {
        type: 'line',
        label: 'Moyenne',
        data: <?php echo json_encode($moynoise) ?>,
        borderWidth: 5,
        radius: 10, 
        pointStyle: 'line',
        fill: true,
        borderColor: [
            'rgb(255,150,150)'
            ],
        backgroundColor: 'rgba(255,150,150, 0.3)',
        order: 1,
    }]
    },
  });

</script>

<?php }}
else {

?>

<div class="white-box">
    <div class="company-box">

        <h2>AUCUN APPAREIL ENREGISTRÉ</h2>

        <p>Vous n'avez aucun appareil connecté à votre profil. </br>
        Cliquez sur le bouton ci-dessous pour enregistrer vos lunettes :</p>
        <a class="product-button" href="addglasses.php">Ajouter des lunettes</a>
    </div>
</div>


<?php }} ?>

<div id="section1" class="section company-description">

    <h1 class="company-description-title" align="center">WHAT WE DO</h1>

<div class="white-box">
    <div class="company-box">

        <img src="assets/images/innovation.png" alt="1">

        <h2>Innovation</h2>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.</p>
    
    </div>
    <div class="company-box">

        <img src="assets/images/health.png" alt="2">

        <h2>Health</h2>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.</p>
    
    </div>
    <div class="company-box">

        <img src="assets/images/durability.png" alt="3">

        <h2>Durability</h2>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.</p>
    
    </div>
</div>
</div>

<div class="section product">

    <div class="fast-brief">
        <video id="myVideo" autoplay="true" src="assets/videos/VideopromoBino.mp4" width="100%"></video> 
    </div>


    <div class="product-description">

    

        <h1 class="product-name">BinoClear</h1>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius.</p>

        

    </div>

</div>




</main>

<?php
    include 'includes/footer.inc.php';
?>

<script src="assets/js/main.js"></script>

</body>
</html>