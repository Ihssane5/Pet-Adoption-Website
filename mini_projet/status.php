<?php 
    session_start();
    
    /*connectiong to the database*/
    $db_server = "localhost:3308";
    $db_user = "root";
    $db_pass = "";
    $db_name = "adoption_db";
    $conn = "";

    try{
        $conn = mysqli_connect($db_server ,$db_user ,$db_pass ,$db_name);
    }
    catch(mysqli_sql_exception){
        echo "could not connect";
    }

   //getting this info from the login pgae
   $ado = $_SESSION["ad"];
   $idd = $_SESSION["id"];
   /*$ado = true;
   $idd = 1;*/

?>




<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Helpa Status</title>
        <link rel="icon" type="image/x-icon" href="images/fav.png">

        <!-- CSS FILES -->        
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/templatemo-kind-heart-charity.css" rel="stylesheet">
        <!--
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        -->
        <style>
        .containerstat {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.1);
            max-width: 600px;
            text-align: center;
        }

        p {
            margin-bottom: 20px;
            font-size: 18px;
            line-height: 1.6;
        }

        .success {
            color: #28a745;
        }

        .error {
            color: #dc3545;
        }

        .warning {
            color: #ffc107;
        }

        .icon {
            font-size: 50px;
            margin-bottom: 20px;
        }

        .icon.success {
            color: #28a745;
        }

        .icon.error {
            color: #dc3545;
        }

        .icon.warning {
            color: #ffc107;
        }

        .button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #0056b3;
        }
        .container1 {
               display: flex;
               justify-content: space-between;
               align-items: center;
               max-width: 1000px; /* Adjust as needed */
               margin: 0 auto;
        }
        .image-container {
                flex: 0 0 30%; /* Take up 40% of the available space */
                margin-left: 60px; /* Add space between the appointment form and the image */
        }

        .image-container img {
                max-width: 100%;
                height: auto;
                display: block;
                width: 800px;
        }
        .download-button-container {
            margin-top: 20px; /* Adjust the top margin to control the distance between the status section and the button */
            text-align: center; /* Align the button to the center */
            color: var(--white-color); /* Use white color for text */
        }
        .download-button-container .button {
            margin-left: 350px; /* Adjust as needed to move the button a little bit to the right */
            background-color: var(--custom-btn-bg-hover-color);
            padding: 10px 20px;
            border-radius: 5px;
        }
        .download-button-container .button:hover {
             background-color: var(--custom-btn-bg-color); /* Change background color on hover */
        }

    </style>

    </head>
    
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

                            <a href="mailto:helpaassociation@gmail.com" class="site-footer-link">
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
                            <a class="nav-link click-scroll" href="Home.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="adopt.php">Adopt an Animal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="member_form.php">Volunteer</a>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="nav-link custom-btn custom-border-btn btn" href="donate.html">Donate</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <!-- the begin of my code --> 
<div class="container1">

    <div class="image-container">
        <?php
            if($ado){
                $sql = "SELECT * FROM adopteur WHERE id_ad= '$idd'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                $nom_ad = $row["nom_ad"];
                $prenom_ad = $row["prenom_ad"];
                $id_rdv = $row["id_rdv"];
                $_SESSION ["nom_ad"] = $nom_ad ;
                $_SESSION ["prenom_ad"] = $prenom_ad ;
                $_SESSION ["cin_ad"] =$row["cin_ad"] ;
                $_SESSION ["date_nai_ad"] =$row["date_nai_ad"] ;
                $_SESSION ["num_tele_ad"] =$row["num_tele_ad"] ;
                $_SESSION ["email_ad"] =$row["email_ad"] ;
                $_SESSION ["addr_ad"] =$row["addr_ad"] ;
                $_SESSION ["etat_soc_ad"] =$row["etat_soc_ad"] ;
                $_SESSION ["pro_ad"] =$row["pro_ad"] ;

                /*pour le rendez_vous*/
                $sql_rdv = "SELECT * FROM rendez_vous WHERE id_rdv= '$id_rdv'";
                $result = mysqli_query($conn, $sql_rdv);
                $row = mysqli_fetch_assoc($result);
                $date_rdv = $row["date_rdv"];
                $heure_rdv = $row["heure_rdv"];
                $_SESSION ["date_rdv"] = $date_rdv ;
                $_SESSION ["heure_rdv"] = $heure_rdv ;

                /*pour la demande*/
                $sql_demande = "SELECT * FROM demander WHERE id_ad= '$idd'";
                $result = mysqli_query($conn, $sql_demande);
                $row = mysqli_fetch_assoc($result);
                $etat_demande = $row["etat_d_a"];
                $id_anm = $row["id_an"];

                /*pour le code animal*/
                $sql_animal = "SELECT * FROM animal WHERE id_an= '$id_anm'";
                $result = mysqli_query($conn, $sql_animal);
                $row = mysqli_fetch_assoc($result);
                $_SESSION ["code_an"] = $row["code_an"];
                $_SESSION ["ps_nom_an"] = $row["ps_nom_an"];
                $_SESSION ["genre_an"] = $row["genre_an"];
            }

            else{
                $sql = "SELECT * FROM membre WHERE id_m= '$idd'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                $nom_m = $row["nom_m"];
                $prenom_m = $row["prenom_m"];
                $etat_demande = $row["etat_d_m"];
                $id_rdv = $row["id_rdv"];
                /*pour le rendez_vous*/
                $sql_rdv = "SELECT * FROM rendez_vous WHERE id_rdv= '$id_rdv'";
                $result = mysqli_query($conn, $sql_rdv);
                $row = mysqli_fetch_assoc($result);
                $date_rdv = $row["date_rdv"];
                $heure_rdv = $row["heure_rdv"];
            }
    
            switch ($etat_demande) {
                case "accepted":
                    echo '<img src="mini_projet/images/status_pics/accepted.png" alt="Accepted Image">';
                    break;
                case "refused":
                    echo '<img src="mini_projet/images/status_pics/refused.png" alt="Refused Image">';
                    break;
                case "pinned":
                    echo '<img src="mini_projet/images/status_pics/processing1.png" alt="Processing Image">';
                    break;
            }
        ?>
    </div>

    <div class="container">
    <div class="row justify-content-center">
    <div class="containerstat">
        <h2>Status of Your Demand</h2>
        <?php 
            if($ado){
                switch($etat_demande){
                    case "accepted" :
                        echo "<p class='success'>Congrats {$prenom_ad} {$nom_ad}, your demand has been accepted!</p>";
                        echo "<p>We look forward to seeing you on {$date_rdv} {$heure_rdv}. Please download the necessary PDF containing all your information and bring it with you on the day of your appointment.</p>";
                        break;
                    case "refused" :
                        echo "<p class='error'>We regret to inform you {$prenom_ad} {$nom_ad}, that your demand of adoption has been refused!</p>";
                        echo "<p>We appreciate your interest and encourage you to consider other opportunities in the future.<br>Please contact the association for any further information.</p>";
                        break;
                    case "pinned" :
                        echo "<p class='warning'>Hi {$prenom_ad} {$nom_ad},Your demand is still being processed!</p>";
                        echo "<p> Thanks for your patience and understanding as we work on it.<br>Please check back later for updates. </p>";
                        break;
                 }

            }
        else{
                switch($etat_demande){
                    case "accepted" :
                        echo "<p class='success'>Congratulations {$prenom_m} {$nom_m}, your demand has been accepted!</p>";
                        echo "<p>We look forward to seeing you on {$date_rdv} {$heure_rdv}. On the day of your appointment, you will have a brief interview to finalize your volunteering process. Please be prepared for this.</p>";
                        break;
                    case "refused" :
                        echo "<p class='error'>We regret to inform you, {$prenom_m} {$nom_m}, that your demand of membership has been refused!</p>";
                        echo "<p>We appreciate your interest and encourage you to consider other opportunities in the future. Please contact the association for any further information.</p>";
                        break;
                    case "pinned" :
                        echo "<p class='warning'>Hi {$prenom_m} {$nom_m},Your demand is still being processed!</p>";
                        echo "<p> Please check back later for updates. Thank you for your patience and understanding as we work on it.</p>";
                        break;
                 }

            }
        ?>
    </div>
    </div>
    </div>
</div>
    <!-- Download Button Container -->
<div class="container">
    <div class="row justify-content-center">
        <div class="download-button-container">
            <?php 
                if($ado && $etat_demande === "accepted"){
                    echo "<a href='generate_pdf.php' class='button'>Download PDF</a>";
                }
            ?>
        </div>
    </div>
</div>
    <!-- end of my code --> 

    <br>
    <br>
    <br>
    <br>
    <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-12 mb-4">
                        <img src="mini_projet/images/logo1.png" class="logo img-fluid" alt="">
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mb-4">
                        <h5 class="site-footer-title mb-3">Quick Links</h5>
                        <ul class="footer-menu d-flex flex-column">
                            <li class="footer-menu-item"><a href="Home.html" class="footer-menu-link">Home</a></li>

                            <li class="footer-menu-item"><a href="#top" class="footer-menu-link">Adopt animal</a></li>

                            <li class="footer-menu-item"><a href="member_form.php" class="footer-menu-link">Become a volunteer</a></li>
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
    </body>