<?php
function display_an($data) {
    foreach ($data as $row) {
        $id_an= $row["id_an"];
        $url = 'animal_info.php?id_an='.$id_an;
        $img_path = $row["img_path"];
        echo "
            <div class='col-lg-4 col-12 mb-lg-0'>
                <div class='custom-block-wrap'>
                    <img class = 'image' src= $img_path class='custom-block-image img-fluid' alt=''>
                    <div class='custom-block text-center'>
                        <div class='custom-block-body'>
                            <h5 class='mb-1'> {$row["ps_nom_an"]}</h5>
                            <span>{$row["age_an"]}years old</span>
                        </div>
                        <a href={$url} class='custom-btn btn'>Adopt me</a>
                    </div>
                </div>
            </div>
        ";
    }
}


function filter($search,$data) {
    $f_array = array();
    foreach ($data as $row) {
        if ($row["genre_an"] == $search) {
            array_push($f_array,$row);
        }
    }
    return $f_array;
}


function similarity($search) {
    $percent_c = 0;
    $percent_d = 0;
    $search_d = trim($search);
    $search_d = strtolower($search);
    //rethink about this line of code
    similar_text($search_d,"cat",$percent_c);
    similar_text($search_d,"dog",$percent_d);
    if($percent_c >= 50) {
        $search = "cat";
    }
    elseif($percent_d >= 50) {
       $search = "dog";
    }
    else {
        $search = "dog";
    }
    return $search;
}
$search = "dog";
$array = array();
# les animaux qui sont disponible
$arr_an_d = array();
try {
    $conn = mysqli_connect("localhost:3308","root","","adoption_db");
    if(!$conn) {
        header("location:adopt.php?error=unexpected_error");
        exit(); 
    }
    $sql = "SELECT * FROM animal where etat_an != 'adopted'";
    $sql_d ="SELECT id_an, etat_d_a FROM demander";
    $res_d = mysqli_query($conn,$sql_d);
    $query = mysqli_query($conn,$sql);
    if($res_d) {
        // the problem is i don't have any records in my demnder table
        while($raw = mysqli_fetch_assoc($res_d)) {
            if ($raw["etat_d_a"] != "refused" ) {
                array_push($array,$raw["id_an"]);
            }
        }
    }
    // arr_an_d contient les ids  animales disponible
    if($query) { 
    // array of our values
        while($raw = mysqli_fetch_assoc($query)) {
            if (!in_array($raw['id_an'],$array)) {
                $arr_an_d[] = $raw;
            }
        }
    }
    if($_SERVER['REQUEST_METHOD'] == "GET") {
        if(isset($_GET["search"])) {
            $search = $_GET["search"];
            $search = similarity($search);
        } 
        $array = filter($search,$arr_an_d); 
    }         
}
catch (Exception $e) {
        // If an exception is caught, handle it
        header("location:adopt.php");
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

    </head>
    <style>
        .section-padding {
            padding: 50px;
        }
        .with-margin [class^="col-"] { 
           padding-bottom: 26px;
        }
        .adopt_animation {
            width: 80%;
            height: 20%;
            margin: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            padding-bottom:  50px;
        }
        .custom-alert{
        position: fixed;
        top: 25%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 500px; /* Adjust the width as needed */
        z-index: 1; /* Ensure it appears on top */
        }
        .image img{
            width: 512px;
            height: 408px;
        }

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
                            <a class="nav-link click-scroll" href="Home.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#top">Adopt an Animal</a>
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
        <div id = "message_s" class="alert alert-success custom-alert" role="alert" style="display:none;"></div>
        <div id = "message_e" class="alert alert-danger custom-alert" role="alert" style="display:none;"></div>
        <main>
            <section class="section-padding">
                <div class="container">
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="col-lg-10 col-12 text-center mx-auto">
                            <h2 class="mb-5">Welcome to Helpa Adoption</h2>
                        </div>
                    </div>
                    <div class = "adopt_animation">
                        <img class = "featured-block" src="animation\adopt.png" alt="">
                    </div>

                </div>
            </section>
            <section class="section-padding" id="section_3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-12 text-center mb-4">
                            <h2><img src="mini_projet/animation\icons8-dog-100.png" alt="">Our animals</h2>
                        </div>
                        <div class="col-lg-4 col-12 mx-auto">
                            <form class="custom-form search-form" action="adopt.php" method="get" role="form">
                                <input name="search" type="search" class="form-control" id="search" placeholder="Search for cat or dog" aria-label="Search">

                                <button type="submit" class="form-control">
                                    <i class="bi-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    
                    <div class="row with-margin">
                        <!-- animal images-->
                        <?php  display_an($array);?>
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

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/counter.js"></script>
        <script src="js/custom.js"></script>
        

    </body>
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
                case "inserted":
                    // Display error message based on error type
                    errorMessage = "We encountered an issue while trying to insert your data into the database. Please try again later ";
                    document.getElementById('message_e').innerHTML = errorMessage;
                    document.getElementById('message_e').style.display = 'block';
                    break;
            } 
        }
        else if (success){
            switch(success) {
                case "inserted":
            // Display  success message based on success type
                    errorMessage = "Your data has been successfully inserted into the database.";
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
</html>