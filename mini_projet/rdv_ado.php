
<?php 
session_start();
// function to filter disponible only disponible hours
function create_time_range_filter($start='9:00:00', $end='18:00:00', $interval = '30 mins',$array) {
    $startTime = strtotime($start); 
    $endTime   = strtotime($end);
    $current   = time(); 
    $addTime   = strtotime('+'.$interval, $current); 
    $diff      = $addTime - $current;
    $res = array();

    $filtered_times = array(); 
    while ($startTime < $endTime) {
        if(!in_array(date('H:i:s', $startTime),$array)) {
            // you had a problem with your own time formatting
            array_push($filtered_times,date('H:i:s', $startTime)); 
        }
        $startTime += $diff;
    }
    return $filtered_times; 
}
function display_time($filtered_times) {
    // filtered times = times + date
    $times = $filtered_times ;
    echo "<option value=''>choose a time</option>";
    foreach($times as $time) {
    echo "<option value=$time>$time</option>";
    }

}
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["date_rdv"])) {
    $date_rdv = $_GET["date_rdv"];
    $_SESSION['date_rdv'] = $date_rdv;
    $current_date = date("Y-m-d");
    if($date_rdv < $current_date) {
        header("location:rdv_ado.php?error=invalid_date");
        exit();
    }
    try {
    $hours = array();
    $conn = mysqli_connect("localhost:3308","root","","adoption_db");
    $sql_heure = "SELECT * FROM rendez_vous WHERE date_rdv = '{$date_rdv}'";
    $query_heure = mysqli_query($conn,$sql_heure);
    while($row = mysqli_fetch_assoc($query_heure)) {
        array_push($hours,$row["heure_rdv"]);
    }
    $filtered_times = create_time_range_filter($start='9:00:00', $end='18:00:00', $interval = '30 mins',$hours,$date_rdv);
    }
    catch (Exception $e) {
        // If an exception is caught, handle it
        header("location:rdv_ado.php");
        exit();
    }
}
    


?>
<!doctype html>
<html lang="en">
    <style>
    .custom-alert{
        position: fixed;
        top: 25%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 500px; /* Adjust the width as needed */
        z-index: 1; /* Ensure it appears on top */
    }
    .image1 {
        width: 30%;
        height: 366px;
        background-image : url("animation/rdv_ado.png");
        background-size: contain;
        background-repeat: no-repeat;
    }
    .parent {
        width: 100%;
        display: flex;
        gap: 20px;
    }
    
    </style>
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
                        <a class="nav-link click-scroll" href="Home.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="adopt.php">Adopt animal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="member_form.php">Volunteer</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<br/>
<br/>
<br/>
<div id = "message_s" class="alert alert-success custom-alert" role="alert" style="display:none;"></div>
<div id = "message_e" class="alert alert-danger custom-alert" role="alert" style="display:none;"></div>

<!-- the code of appointement-->
    <div class="parent">
        <div class="container0">
            <h2>Book  an Appointement</h2>
            <form action="rdv_ado.php" method="get">
            <div class="form-group0">
                <label for="date_rdv">Date:</label>
                <input type="date" id="date" name="date_rdv" required value = <?php if(!empty($_SESSION['date_rdv'])) { echo $_SESSION['date_rdv'];}?>>
                <input type="submit" value="Select a Date">
            </div>
            </form>
            <form action="adopt_form_conn.php" method="post">
            <div class="form-group0">
                <input type="hidden" name = "date_rdv" value = <?php if(!empty($_SESSION['date_rdv'])) { echo $_SESSION['date_rdv'];} ?>>
                <label for="heure_rdv">Time:</label>
                <select id="heure" name="heure_rdv" required>
                    <?php display_time($filtered_times);?>
                </select>
            </div>
        
            <input type="submit" value="Book an Appointement">
            </form>
        </div>
        <div class="image1">

        </div>

    </div>
  <!--the end of the code-->
  <br/>
  <br/>
  <br/>  
  <br/>
  <br/>

  <footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-12 mb-4">
                <img src="mini_projet/images/petlogo1.jpg" class="logo img-fluid" alt="">
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <h5 class="site-footer-title mb-3">Quick Links</h5>

                <ul class="footer-menu d-flex flex-column">
                    <li class="footer-menu-item"><a href="Home.html" class="footer-menu-link">Home</a></li>

                    <li class="footer-menu-item"><a href="donate.html" class="footer-menu-link">Donate</a></li>

                    <li class="footer-menu-item"><a href="member_form.php" class="footer-menu-link">Become a volunteer</a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mx-auto">
                <h5 class="site-footer-title mb-3">Contact Infomation</h5>

                <p class="text-white d-flex mb-2">
                    <i class="bi-telephone me-2"></i>

                    <a href="tel: 0688062914" class="site-footer-link">
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
                case "invalid_date":
                    // Display error message based on error type
                    errorMessage = "The Date you choosed in invalid Please Choose another one";
                    document.getElementById('message_e').innerHTML = errorMessage;
                    document.getElementById('message_e').style.display = 'block';
                    break;
            } 
        }
        else if (success){
            switch(success) {
                case "booked":
            // Display  success message based on success type
                    errorMessage = "booked You have successfully complete your demand please check its state by login using you email and password provided";
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
            document.getElementById('message_s').style.display = 'none';}, 4000); // 3000 milliseconds = 3 seconds
            

        // Call the function to remove query parameters when the page loads
        window.onload = removeQueryParams;
        setTimeout()
    </script>
</html>