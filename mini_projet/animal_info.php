<?php
session_start();
function display_info_an($data) {
    $id_an = $data["id_an"];
    $ps_nom_an = $data["ps_nom_an"];
    $genre_an = $data["genre_an"];
    $sex_an = $data["sex_an"];
    $age_an = $data["age_an"];
    $size_an = $data["size_an"];
    $date_arr_an = $data["date_arr_an"];
    $img_path = $data["img_path"];
    $url = "adopt_form.php?id_an=".$id_an;
    echo "
    <div class='col-lg-4 col-md-5 col-12'>
                            <img src= $img_path class='about-image ms-lg-auto bg-light shadow-lg img-fluid' alt=''>
                        </div>
                        <div class='col-lg-6 col-md-7 col-12'>
                            <div class='custom-text-box-info'>
                                <h2 class='mb-0'>$ps_nom_an</h2>
                                <div class='custom-text-box-info mb-lg-0'>
                                    <h5 class=''>About</h5>
                                </div>
                                <div class='row'>
                                    <div class='col'>
                                        <ul class='custom-list mt-2'>
                                            <li class='custom-list-item d-flex'>
                                                <i class='bi-check custom-text-box-icon me-2'></i>
                                                Category:
                                            </li>

                                            <li class='custom-list-item d-flex'>
                                                <i class='bi-check custom-text-box-icon me-2'></i>
                                                Sex:
                                            </li>
                                            <li class='custom-list-item d-flex'>
                                                <i class='bi-check custom-text-box-icon me-2'></i>
                                                Age:
                                            </li>
                                            <li class='custom-list-item d-flex'>
                                                <i class='bi-check custom-text-box-icon me-2'></i>
                                                Size:
                                            </li>
                                            <li class='custom-list-item d-flex'>
                                                <i class='bi-check custom-text-box-icon me-2'></i>
                                                Arrival Date:
                                            </li>
                                        </ul>
                                    </div>
                                    <div class='col'>
                                        <ul class='custom-list mt-2'>
                                            <li class='custom-list-item d-flex'>
                                               
                                                $genre_an
                                            </li>

                                            <li class='custom-list-item d-flex'>
                                                
                                                $sex_an
                                            </li>
                                            <li class='custom-list-item d-flex'>
                                                
                                                $age_an years old
                                            </li>
                                            <li class='custom-list-item d-flex'>
                                                
                                                $size_an
                                            </li>
                                            <li class='custom-list-item d-flex'>
                                                
                                               $date_arr_an
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <br>
                                <div class = 'd-flex justify-content-end'>
                                    <a href= {$url} class='custom-btn btn smoothscroll'>Apply to Adopt</a>
                                </div>
                            </div>
                        </div>";
    
}
if($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET["id_an"])) {
        $id_an = $_GET["id_an"];
        $_SESSION['id_an'] = $id_an;
    try {
        $conn = mysqli_connect("localhost:3308","root","","adoption_db");
        //connection test
        if(!$conn) {
            header("location:animal_info.php?error=unexpected_error");
            exit();
        }
        else {
            $sql = "SELECT * FROM animal where id_an =".$id_an;
            $query = mysqli_query($conn,$sql);
            $data = mysqli_fetch_assoc($query);
            mysqli_close($conn);
        }
    }
    catch (Exception $e) {
        // If an exception is caught, handle it
        header("location:animal_info.php?id_an=".$_SESSION['id_an']);
        exit();
    }
}
else {
    header("location:animal_info.php?id_an=".$_SESSION["id_an"]);
    session_abort();
    session_destroy();
    exit();
}








?>







<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Helpa Adoption</title>
        <link rel="icon" type="image/x-icon" href="images/fav.png">

        <!-- CSS FILES -->        
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/templatemo-kind-heart-charity.css" rel="stylesheet">
<!--

TemplateMo 581 Kind Heart Charity

https://templatemo.com/tm-581-kind-heart-charity

-->
    <style>
        .adopt_animation {
            width: 80%;
            height: 20%;
            margin: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            padding-bottom:  50px;
        }
        .section-padding {
            padding: 50px;
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
                            <a class="nav-link" href="Home.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="adopt.php">Adopt an Animal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="adopt_form.php">Volunteer</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id = "message_s" class="alert alert-success custom-alert" role="alert" style="display:none;"></div>
        <div id = "message_e" class="alert alert-danger custom-alert" role="alert" style="display:none;"></div>

        <main>



            <section class="section-padding">
                <div class="container">
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="col-lg-10 col-12 text-center mx-auto">
                            <h2 class="mb-5"><img src="mini_projet/animation\icons8-dog-100.png" alt="">Animal Informations</h2>
                            <img src="mini_projet/animation\animal_info.png" alt="">
                        </div>
                    </div>

                </div>
            </section>
            <section class="about-section section-padding">
                <div class="container">
                    <div class="row d-flex justify-content-center align-items-center">
                        <?php   display_info_an($data); ?>

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
                            <li class="footer-menu-item"><a href="Home.html" class="footer-menu-link">Home</a></li>

                            <li class="footer-menu-item"><a href="adopt.php" class="footer-menu-link">Adopt animal</a></li>

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

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/counter.js"></script>
        <script src="js/custom.js"></script>
        <script>
        var urlParams = new URLSearchParams(window.location.search);
            var error = urlParams.get('error');
            var success = urlParams.get('success');
            
            if (error) {
                switch(error) {
                case "unexpected_error":
                // Display error message based on error type
                    errorMessage = "Unexpected error Please try later";
                    document.getElementById('message_e').innerHTML = errorMessage;
                    document.getElementById('message_e').style.display = 'block';
                    break;
            } 
        }
        else if (success){
            switch(success) {
                case "showed":
            // Display  success message based on success type
                    errorMessage = "Your data has been successfully uploaded from the database.";
                    document.getElementById('message_s').innerHTML = errorMessage;
                    document.getElementById('message_s').style.display = 'block';
                    break;
            // Display success message
            } 
        }
        function removeQueryParams() {
            window.history.replaceState({}, document.title, window.location.pathname);
        }
        setTimeout(function() {
            document.getElementById('message_e').style.display = 'none';}, 3000); // 3000 milliseconds = 3 seconds
        setTimeout(function() {
            document.getElementById('message_s').style.display = 'none';}, 3000); // 3000 milliseconds = 3 seconds
            

        // Call the function to remove query parameters when the page loads
        window.onload = removeQueryParams;
        setTimeout()
    </script>

    </body>
</html>