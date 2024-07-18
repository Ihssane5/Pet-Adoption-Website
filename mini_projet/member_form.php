
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Helpa Volunteer
        </title>
        <link rel="icon" type="image/x-icon" href="images/fav.png">

        <!-- CSS FILES -->        
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/templatemo-kind-heart-charity.css" rel="stylesheet">
        <!--
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
            body{
            background-image: url('images/last_out.png');
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain;
            }

            @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
                * {
                  margin: 0;
                  padding: 0;
                  box-sizing: border-box;
                }
                a:link {
                  text-decoration: none;
                }
                a:hover{
                  color: var(--section-bg-color);
                }
                body {
                  font-family: "Inter", sans-serif;
                  background-color: var(--section-bg-color);
                }
                form {
                    padding: 5px 0px;
                }
                .formbold-main-wrapper {
                  display: flex;
                  align-items: center;
                  justify-content: center;
                  padding: 48px;
                }
              
                .formbold-form-wrapper {
                  margin: 0 auto;
                  max-width: 550px;
                  width: 100%;
                  background: var( --section-bg-color);
                  border-radius: 10px;
                }
                .formbold-input-flex {
                  display: flex;
                  gap: 20px;
                  margin-bottom: 22px;
                }
                .formbold-input-flex > div {
                  width: 50%;
                }
                .formbold-form-input {
                  width: 100%;
                  padding: 13px 22px;
                  border-radius: 5px;
                  border: 2px solid #DDE3EC;
                  background: rgba(255, 255, 255, 0.5);
                  font-weight: 500;
                  font-size: 16px;
                  color: #536387;
                  outline: none;
                  resize: none;
                }
                .formbold-form-input:focus {
                  border-color: #5bc1ac;
                  box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.05);
                }
                .formbold-form-label {
                  color: #07074D;
                  font-weight: 500;
                  font-size: 14px;
                  line-height: 24px;
                  display: block;
                  margin-bottom: 10px;
                }             
                .formbold-form-btn-wrapper {
                  display: flex;
                  align-items: center;
                  justify-content: flex-end;
                  gap: 25px;
                  margin-top: 25px;
                }
                .formbold-btn {
                  display: flex;
                  align-items: center;
                  gap: 5px;
                  font-size: 16px;
                  border-radius: 5px;
                  padding: 10px 25px;
                  border: none;
                  font-weight: 500;
                  background-color: var(--primary-color);
                  color: white;
                  cursor: pointer;
                  margin-top: 30px;
                }
                .formbold-btn:hover {
                  box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
                  background-color: var(--secondary-color)
                }

                .btn-add {
                  display: flex;
                  justify-content: end;
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

                            <a href="mailto:helpaassociation.com">
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
                    </ul>
                </div>
            </div>
        </nav>
        <div id = "message_s" class="alert alert-success custom-alert" role="alert" style="display:none;"></div>
        <div id = "message_e" class="alert alert-danger custom-alert" role="alert" style="display:none;"></div>
        <br>
        <div class="col-lg-5 col-12 mx-auto d-flex justify-content-center">
            <h2><img src="mini_projet/animation\icons8-dog-100.png" alt="">Member Form</h2>
        </div>
          <div class="formbold-main-wrapper">
              <!-- Author: FormBold Team -->
              <!-- Learn More: https://formbold.com -->
                <form action="member_form_conn.php" method="POST">
                    <div class="col-lg-5 col-12 mx-auto d-flex justify-content-center">
                    <h5 style = "font-weight: 700">Personal Informations</h5>
                    <br><br><br>
                    </div>
                    <div class="formbold-input-flex">
                        <div>
                        <label for="prenom_m" class="formbold-form-label"> First Name </label>
                        <input
                        type="text"
                        name="prenom_m"
                        class="formbold-form-input"
                        pattern="[a-zA-Z]+ *"
                        required
                        />
                    </div>
                    <div>
                        <label for="nom_m" class="formbold-form-label"> Last Name </label>
                        <input required
                        type="text"
                        name="nom_m"
                        class="formbold-form-input"
                        pattern="[a-zA-Z]+ *"
                        />
                    </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div>
                            <label for="date_nai_m" class="formbold-form-label"> Date of Birth </label>
                            <input  required
                            type="date" 
                            name="date_nai_m" 
                            class="formbold-form-input"
                            />
                        </div>
                        <div>
                            <label for="cin_m" class="formbold-form-label"> CIN </label>
                            <input required
                            type="text"
                            name="cin_m"
                            class="formbold-form-input"
                            pattern="[a-zA-Z0-9]+"/>
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div>
                            <label for="addr_m" class="formbold-form-label"> Address </label>
                            <input required 
                            type="text"
                            name="addr_m"
                            placeholder="House 105, 24 Jerifate Street"
                            class="formbold-form-input"
                            />
                        </div>
                        <div>
                            <label for="num_tele_m" class="formbold-form-label"> Phone Number </label>
                            <input required
                            type="text"
                            name="num_tele_m"
                            
                            class="formbold-form-input"
                            pattern="^0(6|7) ?([0-9]{2} ?){4} *"
                        
                            />
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div>
                            <label for="email_m" class="formbold-form-label"> Email </label>
                            <input required
                            type="text"
                            name="email_m"
                            placeholder="example@gmail.com"
                            pattern="[^ @]*@[^ @]*"
                            class="formbold-form-input"
                            />
                        </div>
                        <div>
                            <label for="pass_m" class="formbold-form-label"> Account Password </label>
                            <input required 
                            type="password"
                            name="pass_m"
                            class="formbold-form-input"
                            />
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                    <div>
                        <label for="etat_soc_m" class="formbold-form-label"> Social Status </label>
                        <select class = "formbold-form-input"  name = "etat_soc_m" required>
                        <option value="single">Single</option>
                        <option value="married">Married</option>
                        <option value="divorced">Divorced</option>
                        <option value="widowed">Widowed</option>
                        </select>
                    </div>
                    <div>
                        <label for="pro_m" class="formbold-form-label"> Profession </label>
                        <input required
                        type="text"
                        name="pro_m"
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
                        name="q1_m"
                        class="formbold-form-input"
                        required
                        />
                        </div>
                        <div>
                        <label for="" class="formbold-form-label">What is your motivation to collaborate with us?</label>
                        <input
                        type="text"
                        name="q2_m"
                        class="formbold-form-input"
                        required
                        />
                        </div>
                        <div>
                        <label for="" class="formbold-form-label">What skills do you consider valuable for our association?</label>
                        <input
                        type="text"
                        name="q3_m"
                        class="formbold-form-input"
                        required
                        />
                        </div>
                        <div>
                        <label for="" class="formbold-form-label">Do you have any physical or health limitations to consider?</label>
                        <input
                        type="text"
                        name="q4_m"
                        class="formbold-form-input"
                        required
                        />
                        </div>
                        <div>
                        <label for="" class="formbold-form-label">How many hours per week would you be willing to dedicate to your volunteer commitment as a member?</label>
                        <input
                        type="text"
                        name="q5_m"
                        class="formbold-form-input"
                        required
                        />
                        </div>
                        <div>
                        <label for="" class="formbold-form-label">Do you prefer working independently or as part of a team?</label>
                        <input
                        type="text"
                        name="q6_m"
                        class="formbold-form-input"
                        required
                        />
                        </div>
                        <div>
                        <label for="" class="formbold-form-label">Would you be willing to provide professional references or evidence of your experience in the healthcare or animal care field?</label>
                        <input
                        type="text"
                        name="q7_m"
                        class="formbold-form-input"
                        required
                        />
                        </div>
                        <div>
                        <label for="" class="formbold-form-label">Do you want to add something to support your volunteer demand?</label>
                        <input
                        type="text"
                        name="q8_m"
                        class="formbold-form-input"
                        required
                        />
                        </div>
                        
                    
                    







                    <!--question -->
                    <a href="rdv_mem.php">
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
                        <h5 class="site-footer-title mb-3">Contact Infomations</h5>

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
