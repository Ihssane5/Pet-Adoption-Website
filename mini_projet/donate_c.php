<?php
session_start();
try{
    $conn = mysqli_connect("localhost:3308","root","","adoption_db");
    if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["donation-fname"])) {
        $nom_don= $_POST["donation-fname"];
        $prenom_don= $_POST["donation-lname"];
        $email_don= $_POST["donation-email"];
        $devise= $_POST["devise"];
        $freq= $_POST["DonationFrequency"];
        $montant= $_POST["flexRadioDefault"];
        $_SESSION["nom_don"] = $nom_don;
        $_SESSION["prenom_don"] = $prenom_don;
        $_SESSION["donation-email"] = $email_don;
        $_SESSION["devise"] = $devise;
        $_SESSION["DonationFrequency"] = $freq;
        $_SESSION["flexRadioDefault"] = $montant ;
    }
}

catch (Exception $e) {
    // If an exception is caught, handle it
    header("location:donate.html?error=unexpected_error");
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

        <title>Helpa Donation</title>
        <link rel="icon" type="image/x-icon" href="images/fav.png">

        <!-- CSS FILES -->        
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/templatemo-kind-heart-charity.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            #currency-select {
                font-size: 18px; /* Adjust the font size as needed */
            }
            .custom-alert{
                position: fixed;
                top: 25%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 500px; /* Adjust the width as needed */
                z-index: 1; /* Ensure it appears on top */
            }
        </style>
        
        
<!--

TemplateMo 581 Kind Heart Charity

https://templatemo.com/tm-581-kind-heart-charity

-->
    </head>
    
    <body>

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

                            <a href="helpaassociation@gmail.com">
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
                            <a class="nav-link" href="adopt.html">Adopt an Animal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="member_form.php">Volunteer</a>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="nav-link" href="login.html">Login</a>
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
        

            <section class="donate-section">
                <div class="section-overlay"></div>
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12 mx-auto">
                            <form class="custom-form donate-form" action="donate_conn.php" method="POST" role="form">
                                <h3 class="mb-4">Billing Informations</h3>

                                <div class="row">
                                    <div class="col-lg-12 col-12 mt-2">
                                        <h5 class="mt-1">Name on Card</h5>
                                        <div class="col-lg-12 col-12">
                                            <input type="text" name = "nom_don_c"class="form-control" placeholder="Name on card" aria-label="Username" aria-describedby="basic-addon1" patten="[A-Za-z]+">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-12 mt-2">
                                        <h5 class="mt-1">Card Num</h5>
                                        <div class="col-lg-12 col-12">
                                            <input type="text" name = "credit_c_num"class="form-control" placeholder="Num on card" aria-label="Username" aria-describedby="basic-addon1" max_length=16> 
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-12 col-12">
                                        
                                    </div>
                                    <br>
                                    <br>

                                    <div class="col-lg-6 col-12 mt-2">
                                        <h5 class="mt-1">Exp Month</h5>
                                        <input type="text" name="exp_m" id="donation-name" class="form-control" placeholder="Expiration month" required>
                                    </div>

                                    <div class="col-lg-6 col-12 mt-2">
                                        <h5 class="mt-1">Exp Year</h5>
                                        <input type="text" name="exp_y" id="donation-name" class="form-control" placeholder="Expiration year" required>
                                    </div>

                                    <div class="col-lg-6 col-12 mt-2">
                                        <h5 class="mt-1">CVV</h5>
                                        <input type="text" name="code_v_c" id="donation-email"  class="form-control" placeholder="verifictaion code" required>
                                    </div>

                                    <!--<div class="col-lg-12 col-12">
                                        <h5 class="mt-4 pt-1">Choose Payment</h5>
                                    </div>-->

                                    <div class="col-lg-12 col-12 mt-2">
                            
                                        <a href="Thanks.html">
                                            <button type="submit" class="form-control mt-4">Submit Donation</button>
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </section>
        </main>


        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/counter.js"></script>
        <script src="js/custom.js"></script>
        <script>
            function changeCurrencySymbol() {
                var currencySelect = document.getElementById("currency-select");
                var currencyIcon = document.getElementById("currency-icon");
                var customAmountSymbol = document.getElementById("custom-amount-symbol");
                var selectedCurrency = currencySelect.value;
        
                switch (selectedCurrency) {
                    case "USD":
                        currencyIcon.innerHTML = '<i class="bi-currency-dollar"></i>';
                        customAmountSymbol.innerText = "$";
                        break;
                    case "EUR":
                        currencyIcon.innerHTML = '<i class="bi-currency-euro"></i>';
                        customAmountSymbol.innerText = "€";
                        break;
                    case "GBP":
                        currencyIcon.innerHTML = '<i class="bi-currency-pound"></i>';
                        customAmountSymbol.innerText = "£";
                        break;
                    case "MAD":
                        currencyIcon.innerHTML = '<i class="fa-solid fa-coins"></i>'; 
                        customAmountSymbol.innerText = "MAD"; 
                    break;
                    default:
                        currencyIcon.innerHTML = '<i class="bi-currency-dollar"></i>';
                        customAmountSymbol.innerText = "$";
                }
            }
        </script>
        

    </body>
</html>
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
                case "donate":
                // Display error message based on error type
                errorMessage = "Error please try again";
                document.getElementById('message_e').innerHTML = errorMessage;
                document.getElementById('message_e').style.display = 'block';
                break;
                case "month":
                // Display error message based on error type
                errorMessage = "Invalid expiration month";
                document.getElementById('message_e').innerHTML = errorMessage;
                document.getElementById('message_e').style.display = 'block';
                break;
                case "year":
                // Display error message based on error type
                errorMessage = "Invalid expiration year";
                document.getElementById('message_e').innerHTML = errorMessage;
                document.getElementById('message_e').style.display = 'block';
                break;
                case "cvc":
                // Display error message based on error type
                errorMessage = "Invalid verification code, must contain 3 digits";
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