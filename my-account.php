<?php
    include 'includes/header.inc.php';
    include 'includes/connexion.inc.php';
    $conn=OpenCon();
    $query1='SELECT * FROM users WHERE email="'.$_SESSION['email'].'"';
    $result1=mysqli_query($conn, $query1);
    $data=mysqli_fetch_assoc($result1);
    
    
?>

<main>
    <div class="section container">
        <div class="main-body">
            <div class="my-account">
                <div class="left-side">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-main">
                                <img src="assets/images/user2.png" alt="user" width="110">

                                <div class="username">
                                    <h4><?php echo $data['firstName'].' '.$data['lastName']; ?></h4>
                                </div>
                            </div>
                            <!-- ul class="social-media">
                                <li class="social-media-line"> 
                                    <h5><img src="assets/images/facebook.png" alt="fb">&nbsp;Facebook</h5>
                                    <span>###</span>
                                </li>
                                <li class="social-media-line">
                                    <h5><img src="assets/images/instagram.png" alt="insta">&nbsp;Instagram</h5>
                                    <span>@###</span>
                                </li>
                                <li class="social-media-line">
                                    <h5><img src="assets/images/twitter.png" alt="tweet">&nbsp;Twitter</h5>
                                    <span>@###</span>
                                </li>
                            </ul -->
                        </div>
                    </div>

                </div>
                <div class="right-side">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-rows">
                                <div class="div-row">
                                    <h4 class="row-h4">Full Name</h4>
                                    <span class="row-span"><?php echo $data['firstName'].' '.$data['lastName']; ?></span>
                                </div>
                                <hr>
                                <div class="div-row">
                                    <h4 class="row-h4">Email</h4>
                                    <span class="row-span"><?php echo $data['email']; ?></span>
                                </div>
                                <hr>
                                <div class="div-row">
                                    <h4 class="row-h4">Date Of Birth</h4>
                                    <span class="row-span"><?php echo $data['dateOfBirth']; ?></span>
                                </div>
                                <hr>
                                <div class="div-row">
                                    <h4 class="row-h4">Phone Number</h4>
                                    <span class="row-span"><?php echo $data['phone']; ?></span>
                                </div>
                                <hr>
                                <div class="div-row">
                                    <h4 class="row-h4">Address</h4>
                                    <span class="row-span"><?php echo $data['address']; ?></span>
                                </div>
                                <hr>
                                <div class="div-row">
                                    <a class="harik-style" href="edit-myaccount.php?id=<?php echo $data['id'];?>">Edit</a>
                                    <a class="harik-style" href="log-out.php">LogOut</a>
                                    
                                </div>
                            </div>

                            <!-- <div class="card-stattistics">
                                <div class="stats-box">
                                    <div class="stats-body">
                                        <div class="row-h5">
                                            <h5><i class="glasses-name">BinoClear </i>Your statistics</h5>
                                        </div>
                                        <small>Ambient noise</small>
                                        <div class="progress" style="height: 5px">
                                            <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <small>Air Quality</small>
                                        <div class="progress" style="height: 5px">
                                            <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <small>Stress Level</small>
                                        <div class="progress" style="height: 5px">
                                            <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <small>Screen Time</small>
                                        <div class="progress" style="height: 5px">
                                            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>

                            </div> -->

                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>


<?php
    include 'includes/footer.inc.php';
?>

<script src="assets/js/main.js"></script>

</body>
</html>