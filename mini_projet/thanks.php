<?php 
    session_start();
    
    /*connectiong to the database*/
    $db_server = "localhost:3308";
    $db_user = "root";
    $db_pass = "";
    $db_name = "adoption_db";
    $conn = "";

    /*try{*/
        $conn = mysqli_connect($db_server ,$db_user ,$db_pass ,$db_name);
        $sql_don = "SELECT * FROM donateur ORDER BY id_don Desc LIMIT 1";
        $result = mysqli_query($conn, $sql_don);
        $row = mysqli_fetch_assoc($result);
        $nom_don = $row["nom_don"];
        $prenom_don = $row["prenom_don"];
        $montant = $row["montant"];
        $result = mysqli_fetch_assoc(mysqli_query($conn, $sql_don));
    /*}
    catch(mysqli_sql_exception){
        header("location:");
    }*/

   //getting this info from the login pga
?>




<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Helpa</title>
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

                            <a href="mailto:info@company.com">
                                Helpa@gmail.com
                            </a>
                        </p>
                    </div>

                    <div class="col-lg-3 col-12 ms-auto d-lg-block d-none">
                        <ul class="social-icon">
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-twitter"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-facebook"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-instagram"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-youtube"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-whatsapp"></a>
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
                            <a class="nav-link" href="adopt.html">Adopt animal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="volunteer.html">Volunteer</a>
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
       <img src="mini_projet/images/thankyou.png" alt="">
    </div>

    <div class="container">
    <div class="row justify-content-center">
    <div class="containerstat">
        <!--<img src="mini_projet/images/social-postcard.png" alt="">-->
        <h2>THANK YOU</h2>
        <h5 > Dear, <?php  echo $result["nom_don"] ." ".$result["prenom_don"]?></h5>
        We are deeply touched by your generous donation. Your support means the world to us and it helps us continue our work. Thank you from the bottom 
        of our hearts for your kindness and generosity.
        
    </div>
    </div>
    </div>
</div>
    <!-- Download Button Container -->

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
                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Our Story</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Causes</a></li>

                            <li class="footer-menu-item"><a href="member_form.php" class="footer-menu-link">Become a volunteer</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mx-auto">
                        <h5 class="site-footer-title mb-3">Contact Infomation</h5>

                        <p class="text-white d-flex mb-2">
                            <i class="bi-telephone me-2"></i>

                            <a href="tel:05246-69155" class="site-footer-link">
                                05246-69155
                            </a>
                        </p>

                        <p class="text-white d-flex">
                            <i class="bi-envelope me-2"></i>

                            <a href="mailto:info@yourgmail.com" class="site-footer-link">
                                Helpa@gmail.com
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
                                    <a href="#" class="social-icon-link bi-twitter"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-facebook"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-instagram"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-linkedin"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="https://youtube.com/templatemo" class="social-icon-link bi-youtube"></a>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </footer>
    </body>