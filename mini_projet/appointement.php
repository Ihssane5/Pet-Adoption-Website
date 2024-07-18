<?php
if($_SERVER["REQUEST_METHOD"] == "POST") { 
    $appoin_date = $_POST["appoin_date"];
    $adopteurs = array();
    $membres = array();
    // la connection
    $conn = mysqli_connect("localhost:3308","root","","adoption_db");
    $sql_m = "SELECT * FROM rendez_vous rdv, membre mbr WHERE rdv.date_rdv = '{$appoin_date}' 
    AND rdv.id_rdv = mbr.id_rdv 
    AND mbr.etat_d_m = 'accepted'";
    $query_m = mysqli_query($conn,$sql_m);
    while($row = mysqli_fetch_assoc($query_m)) {
        $membres[] = $row;
    }
    $sql_ad = "SELECT * FROM adopteur ad, rendez_vous rdv,  demander d 
    WHERE rdv.id_rdv = ad.id_rdv 
    AND ad.id_ad = d.id_ad
    AND rdv.date_rdv = '{$appoin_date}'
    /*AND d.etat_d_a = 'accepted'*/
    ORDER BY d.id_dm  DESC LIMIT 1";
    $query_ad = mysqli_query($conn,$sql_ad);
    while($row = mysqli_fetch_assoc($query_ad)) {
        $adopteurs[] = $row;
    }
    function display_appoin($adopteurs,$membres) {
        foreach($membres as $membre) {
            $role = "membrer";
            echo "<tr>
            <td>{$membre['cin_m']}</td>
            <td>{$membre['nom_m']} {$membre['prenom_m']}</td>
            <td>{$membre['email_m']}</td>
            <td>{$membre['heure_rdv']}</td>
            <td>$role</td>
          </tr>";
        }
        foreach($adopteurs as $adopter) {
            $role = "adopter";
            echo "<tr>
            <td>{$adopter['cin_ad']}</td>
            <td>{$adopter['nom_ad']} {$adopter['prenom_ad']}</td>
            <td>{$adopter['email_ad']}</td>
            <td>{$adopter['heure_rdv']}</td>
            <td>$role</td>
          </tr>";
        }

    }
    
    
}


?>




<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Helpa Admin</title>
        <link rel="icon" type="image/x-icon" href="images/fav.png">

        <!-- CSS FILES -->        
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style_form.css" rel="stylesheet">
        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/templatemo-kind-heart-charity.css" rel="stylesheet">
<!--

TemplateMo 581 Kind Heart Charity

https://templatemo.com/tm-581-kind-heart-charity

-->

    </head>
    <style>
        .role  {
            width: 100px;
            height: 30px;
            background-color: #5bc1ac;
            color: #44525d;
            text-align: center;
            font-weight: 600;
            font-family: 'Metropolis';
            border: solid  #5a6f80 2px;
            border-radius: 6px;
            margin-bottom: 10px;
        }
        .card-body {
            background-image: url("animation/appointement.png");
            background-repeat: no-repeat;
            background-size: contain;
            background-position: center;
        }
</style>
    </style>
    <body id="section_1">
    <header class="site-header">
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-8 col-12 d-flex flex-wrap">
                        <p class="d-flex me-4 mb-0">
                            <i class="bi-geo-alt me-2"></i>
                            Route Sidi Bouzid BP 63 Rue Sidi M'Barek, Safi 46000
                        </p>

                        <p class="d-flex mb-0">
                            <i class="bi-envelope me-2"></i>

                            <a href="mailto:helpaassociation@gmail.com">
                                helpaassociation@gmail.com
                            </a>
                        </p>
                    </div>

                    <div class="col-lg-3 col-12 ms-auto d-lg-block d-none">
                        <ul class="social-icon">
                            <li class="social-icon-item">
                                <a href="https://www.facebook.com/profile.php?id=61558565200373" class="social-icon-link bi-facebook"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="https://www.instagram.com/helpaassociation/" class="social-icon-link bi-instagram"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="https://www.youtube.com/channel/UCv9zhnnTI0wNZgYWvgpbFmA" class="social-icon-link bi-youtube"></a>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>
        </header>

        <nav class="navbar navbar-expand-lg bg-light shadow-lg">
            <div class="container">
                <a class="navbar-brand" href="Home.html">
                    <img src="mini_projet/images/logo1.png" class="logo img-fluid" alt="Kind Heart Charity">
                    <span>
                        Helpa
                        <small>Pet Adoption Association</small>
                    </span>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="Home_adm.php">Admin HomePage</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="send_mail_me.html">Send Email</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="appointement.php">Appointement</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link click-scroll dropdown-toggle" href="#section_5" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Verify Demand</a>
                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                <li><a class="dropdown-item" href="admin_demande_adoption.php">For Adoption </a></li>

                                <li><a class="dropdown-item" href="admin_demande_membre.php">For Volunteering</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link click-scroll dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="true">Animals</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarLightDropdownMenuLink">
                                <li class="dropdown-item"><a href="add_an.html">Add Animal</a></li>

                                <li class="dropdown-item"><a href="modify_an.html">Modify Info</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            <section class="section-padding section-bg" id="section_2">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-10 col-12 text-center mx-auto">
                        <h2 class="mb-5"><img src="mini_projet/animation\icons8-dog-100.png" alt="">List of Appointments</h2>
                    </div>
                </div>
                <div class="row d-flex justify-content-center align-items-center" style = "gap: 20px">
                    <div class="col-lg-4 col-12 mb-5 mb-lg-0">
                        <form action="appointement.php" METHOD= "POST">
                            <div class="formbold-input-flex">
                                <input
                                type="date"
                                name="appoin_date"
                                class="formbold-form-input"
                                required
                                value = <?php if($_SERVER["REQUEST_METHOD"]=="POST")   {echo $appoin_date; }?>
                                />
                            </div>
                            <div class ="btn-add">
                                <button class="formbold-btn">
                                    Appointment
                                </button>
                            </div>
                        </form>
                    </div>
                <div class="col-lg-10 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <div class = "">
                            <h2 class ="custom-text-block"><img src="mini_projet/animation\icons8-dog-100.png" alt="">Date: <?php if($_SERVER["REQUEST_METHOD"]=="POST")   echo $appoin_date;   ?></h2>
                            <br>
                        </div>
                        <div class="table-responsive">
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th class ="text-muted mb-lg-4 mb-md-4">CIN</th>
                                <th class ="text-muted mb-lg-4 mb-md-4">Full Name</th>
                                <th class ="text-muted mb-lg-4 mb-md-4">Email Address</th>
                                <th class ="text-muted mb-lg-4 mb-md-4">Time</th>
                                <th class ="text-muted mb-lg-4 mb-md-4">Role</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php if($_SERVER["REQUEST_METHOD"] == "POST")  {
                                display_appoin($adopteurs,$membres);
                              }
                              ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div> 
            </section>
        </main>
        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-12 mb-4">
                        <img src="mini_projet/images/logo1.png" class="logo img-fluid" alt="">
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mb-4">
                        <h5 class="site-footer-title mb-3">Quick Links</h5>
                        <ul class="footer-menu d-flex flex-column">
                            <li class="footer-menu-item"><a href="Home_adm.php" class="footer-menu-link">Admin Home</a></li>

                            <li class="footer-menu-item"><a href="send_mail_me.html" class="footer-menu-link">Send Mail</a></li>

                            <li class="footer-menu-item"><a href="appointement.php" class="footer-menu-link">Appointement</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mx-auto">
                        <h5 class="site-footer-title mb-3">Contact Infomation</h5>

                        <p class="text-white d-flex mb-2">
                            <i class="bi-telephone me-2"></i>

                            <a href="tel:0688062914" class="site-footer-link">
                                0688062914
                            </a>
                        </p>

                        <p class="text-white d-flex">
                            <i class="bi-envelope me-2"></i>

                            <a href="mailto:helpaassociation@gmail.com" class="site-footer-link">
                                helpaassociation@gmail.com
                            </a>
                        </p>

                        <p class="text-white d-flex mt-3">
                            <i class="bi-geo-alt me-2"></i>
                            Route Sidi Bouzid BP 63 Rue Sidi M'Barek, Safi 46000
                        </p>

                        <a href="http://maps.google.com/maps" class="custom-btn btn mt-3">Get Direction</a>
                    </div>
                </div>
            </div>

            <div class="site-footer-bottom">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-md-7 col-12">
                            <p class="copyright-text mb-0">Copyright © 2024 <a href="#">Helpa</a> 
                        </div>
                        
                        <div class="col-lg-6 col-md-5 col-12 d-flex justify-content-center align-items-center mx-auto">
                            <ul class="social-icon">
                                <li class="social-icon-item">
                                    <a href="https://www.facebook.com/profile.php?id=61558565200373" class="social-icon-link bi-facebook"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="https://www.instagram.com/helpaassociation/" class="social-icon-link bi-instagram"></a>
                                </li>
                                <li class="social-icon-item">
                                    <a href="https://www.youtube.com/channel/UCv9zhnnTI0wNZgYWvgpbFmA" class="social-icon-link bi-youtube"></a>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </footer>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/counter.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>