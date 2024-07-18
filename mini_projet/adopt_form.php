
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
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->
        <link href="css/style_form.css" rel="stylesheet">
<!--

TemplateMo 581 Kind Heart Charity

https://templatemo.com/tm-581-kind-heart-charity

-->
    <style>
        .custom-alert{
        position: fixed;
        top: 25%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 500px; /* Adjust the width as needed */
        z-index: 1; /* Ensure it appears on top */
        }
        .formbold-main-wrapper{
            background-image: url("animation/adopt_form.png");
            background-repeat: no-repeat;
            background-size: contain;
            background-position: center;
            z-index: -1;
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
        <div id = "message_s" class="alert alert-success custom-alert" role="alert" style="display:none;"></div>
        <div id = "message_e" class="alert alert-danger custom-alert" role="alert" style="display:none;"></div>
        <br>
        <div class="col-lg-5 col-12 mx-auto d-flex justify-content-center">
            <h2><img src="mini_projet/animation\icons8-dog-100.png" alt="">Adoption Form</h2>
        </div>
          <div class="formbold-main-wrapper">
                <form action="adopt_form_conn.php" method="POST">
                    <div class="col-lg-5 col-12 mx-auto d-flex justify-content-center">
                    <h5 style = "font-weight: 700">Personal Information</h5>
                    <br><br><br>
                    </div>
                    <div class="formbold-input-flex">
                        <div>
                        <label for="prenom_ad" class="formbold-form-label"> First Name </label>
                        <input
                        type="text"
                        name="prenom_ad"
                        class="formbold-form-input"
                        pattern="[a-zA-Z]+ *"
                        required
                        />
                    </div>
                    <div>
                        <label for="nom_ad" class="formbold-form-label"> Last Name </label>
                        <input required
                        type="text"
                        name="nom_ad"
                        class="formbold-form-input"
                        pattern="[a-zA-Z]+ *"
                        />
                    </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div>
                            <label for="date_nai_ad" class="formbold-form-label"> Date of Birth </label>
                            <input  required
                            type="date" 
                            name="date_nai_ad" 
                            class="formbold-form-input"
                            />
                        </div>
                        <div>
                            <label for="cin_ad" class="formbold-form-label"> CIN </label>
                            <input required
                            type="text"
                            name="cin_ad"
                            class="formbold-form-input"
                            pattern="[a-zA-Z0-9]+"/>
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div>
                            <label for="addr_ad" class="formbold-form-label"> Address </label>
                            <input required 
                            type="text"
                            name="addr_ad"
                            placeholder="House 105, 24 Jerifate Street"
                            class="formbold-form-input"
                            />
                        </div>
                        <div>
                            <label for="num_tele_ad" class="formbold-form-label"> Phone Number </label>
                            <input required
                            type="text"
                            name="num_tele_ad"
                            placeholder=""
                            class="formbold-form-input"
                            pattern="^0(6|7) ?([0-9]{2} ?){4} *"
                            
                            />
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div>
                            <label for="email_ad" class="formbold-form-label"> Email </label>
                            <input required
                            type="text"
                            name="email_ad"
                            placeholder="example@gmail.com"
                            pattern="[^ @]*@[^ @]*"
                            class="formbold-form-input"
                            />
                        </div>
                        <div>
                            <label for="pass_ad" class="formbold-form-label"> Account Password </label>
                            <input required 
                            type="password"
                            name="pass_ad"
                            class="formbold-form-input"
                            />
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                    <div>
                        <label for="etat_soc_ad" class="formbold-form-label"> Social Status </label>
                        <select class = "formbold-form-input"  name = "etat_soc_ad" required>
                        <option value="single">Single</option>
                        <option value="married">Married</option>
                        <option value="divorced">Divorced</option>
                        <option value="widowed">Widowed</option>
                        </select>
                    </div>
                    <div>
                        <label for="pro_ad" class="formbold-form-label"> Profession </label>
                        <input required
                        type="text"
                        name="pro_ad"
                        id="profession"
                        class="formbold-form-input"
                        />
                    </div>
                    </div>
                    <br><br>
                    <div class=" mx-auto d-flex justify-content-center">
                    <h5 style = "font-weight: 700">Interest Questions</h5>
                    <br><br><br>
                    </div>
                        <div>
                        <label for="" class="formbold-form-label">What was the reason behind making such a choice?</label>
                        <input
                        type="text"
                        name="q1_ad"
                        class="formbold-form-input"
                        required
                        />
                        </div>
                        <div>
                        <label for="" class="formbold-form-label">Have you ever surrendered an animal for some reason?</label>
                        <input
                        type="text"
                        name="q2_ad"
                        class="formbold-form-input"
                        required
                        />
                        </div>
                        <div>
                        <label for="" class="formbold-form-label">Do you have other animals at home(give more details please)?</label>
                        <input
                        type="text"
                        name="q3_ad"
                        class="formbold-form-input"
                        required
                        />
                        </div>
                        <div>
                        <label for="" class="formbold-form-label">Do you have a secure garden for the adopted animal?</label>
                        <input
                        type="text"
                        name="q4_ad"
                        class="formbold-form-input"
                        required
                        />
                        </div>
                        <div>
                        <label for="" class="formbold-form-label">Where the adopted animal will sleep?</label>
                        <input
                        type="text"
                        name="q5_ad"
                        class="formbold-form-input"
                        required
                        />
                        </div>
                        <div>
                        <label for="" class="formbold-form-label">What's the maximum number of hours the adopted animal will stay at home alone?</label>
                        <input
                        type="text"
                        name="q6_ad"
                        class="formbold-form-input"
                        required
                        />
                        </div>
                        <div>
                        <label for="" class="formbold-form-label">Do you promess if you adopted the animal that you will offer him/her
                            the life he/she deserve?</label>
                        <input
                        type="text"
                        name="q7_ad"
                        class="formbold-form-input"
                        required
                        />
                        </div>
                        <div>
                        <label for="" class="formbold-form-label">Do you have any physical or health limitations to consider while reviewing 
                        your demand (yes/no) <br>Plese provide more details?</label>
                        <input
                        type="text"
                        name="q8_ad"
                        class="formbold-form-input"
                        required
                        />
                        </div>
                        
                    
                    







                    <!--question -->
                    <a href="rdv_ado.php">
                        <div class ="btn-add">
                        <button class="formbold-btn">
                            choose an appointement
                        </button>
                        </div>
                    </a>
                </form>
                
          </div>  
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

                            <li class="footer-menu-item"><a href="donate.html" class="footer-menu-link">Donate</a></li>

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
                case "user":
                    // Display error message based on error type
                    errorMessage = "Your Previous demand is Pinned You can try later after verification";
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
