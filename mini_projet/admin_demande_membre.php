<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Helpa Admin</title>
    <link rel="icon" type="image/x-icon" href="images/fav.png">

    <!-- CSS FILES -->        
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link href="css/templatemo-kind-heart-charity.css" rel="stylesheet">
    <style>
.container7 {
  flex: 0 0 65%; /* Take up 55% of the available space */
  padding: 20px; /* Adjust padding as needed */
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  /*background-color: #f9f9f9;*/
}

.demande {
  border: 1px solid #ccc;
  padding: 15px;
  margin-bottom: 20px;
  border-radius: 8px;
  background-color: #f9f9f9;
}

.btn-accept,
.btn-refuser {
  padding: 8px 16px;
  margin-top: 10px;
  cursor: pointer;
  border: none;
  border-radius: 4px;
}

.btn-accept {
  background-color: #5bc1ac;
  color: #fff;
}

.btn-refuser {
  background-color: #ff6b6b;
  color: #fff;
  margin-left: 8px
}
/*newwww*/
.container1 {
  display: flex;
  justify-content: space-between;
  align-items: center;
  max-width: 1000px; /* Adjust as needed */
  margin: 0 auto;
}
.image-container {
  flex: 0 0 40%; /* Take up 40% of the available space */
  margin-left: 20px; /* Add space between the appointment form and the image (20)*/
  max-height: calc(100vh - 200px); /* Set a maximum height for the image container */
  overflow: hidden; /* Hide overflow content */
  position: sticky; /* Make the image container sticky */
  top: 20px; /* Adjust top position as needed */
}
.image-container img {
  max-width: 100%;
  width: auto;
  height: 100%;
  display: block;
}
.success-message {
  position: fixed;
  top: 20px;
  left: 50%;
  transform: translateX(-50%);
  background-color: #5bc1ac;
  color: #fff;
  padding: 10px 20px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
  z-index: 1000;
}

/*for the zoom*/
.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.4);
}

/* Style for the modal content */
.modal-content {
    background-color: rgba(255, 255, 255, 0.9);
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 50%;
    word-wrap: break-word; 
}

/* Close button style */
.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
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
                            <a class="nav-link click-scroll" href="Home_adm.php">Admin HomePage</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="send_mail_me.html">Send Email</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="appointement.php">Appointement</a>
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

    <br><br><br><br>

    <main>
        <div class="container1">

            <div class="image-container">
                <img src="mini_projet/images/admin_dog.png" alt="Appointment Image">
            </div>

            <div class="container7">
                <h2>Pending Member Demands</h2>
                <div id="demandes">
                    <?php
                    // Connecting
                    $db_host = "localhost:3308";
                    $db_user = "root";
                    $db_password = "";
                    $db_name = "adoption_db";

                    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

                    // Query to retrieve member demands
                    $sql = "SELECT * FROM membre "; 
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {

                            // checking if demand is pinned
                            $id_m = $row["id_m"];
                            $etat_d_m = $row["etat_d_m"];

                            if($etat_d_m == "pinned"){

                                //now we can get some data
                                $id_rdv = $row["id_rdv"];
                                $sql_rdv = "SELECT * FROM rendez_vous WHERE id_rdv= '$id_rdv'";
                                $result_rdv = mysqli_query($conn, $sql_rdv);
                                $row_rdv = mysqli_fetch_assoc($result_rdv);
                                $date_rdv = $row_rdv["date_rdv"];
                                $heure_rdv = $row_rdv["heure_rdv"];

                                // Display member demand information
                                echo "<div class='demande' id='demand-" . $id_m . "'>"; // Adding unique ID 

                                echo "<p><strong>Name:</strong> " . $row['nom_m'] . " " . $row['prenom_m'] . "</p>";
                                echo "<p><strong>Email:</strong> " . $row['email_m'] . "</p>";
                                echo "<p><strong>Appoitement:</strong> " . $date_rdv . " at ".$heure_rdv."</p>";

                                //view more button
                                echo "<button class='btn-toggle-info'>View more</button>";
                                echo "<div class='additional-info' style='display: none;'>";
                                echo "<br>";

                                //echo "<button onclick='openModal()'>View more</button>";



                                // more details
                                /*echo "<div id='myModal' class='modal'>";
                                echo "<div class='modal-content'>";
                                echo "<span class='close' onclick='closeModal()'>&times;</span>";*/
                                echo "<p><strong>CIN:</strong> " . $row['cin_m']. "</p>";
                                echo "<p><strong>Date of birth:</strong> " . $row['date_nai_m'] . "</p>";
                                echo "<p><strong>Adress:</strong> " . $row['addr_m'] . "</p>";
                                echo "<p><strong>Social status:</strong> " . $row['etat_soc_m'] . "</p>";
                                echo "<p><strong>Profession:</strong> " . $row['pro_m'] . "</p>";
                                echo "<p><strong>Phone number:</strong> " . $row['num_tele_m'] . "</p>";
                                echo "<p><strong>Response of Q1:</strong> " . $row['q1_m'] . "</p>";
                                echo "<p><strong>Response of Q2:</strong> " . $row['q2_m'] . "</p>";
                                echo "<p><strong>Response of Q3:</strong> " . $row['q3_m'] . "</p>";
                                echo "<p><strong>Response of Q4:</strong> " . $row['q4_m'] . "</p>";
                                echo "<p><strong>Response of Q5:</strong> " . $row['q5_m'] . "</p>";
                                echo "<p><strong>Response of Q6:</strong> " . $row['q6_m'] . "</p>";
                                echo "<p><strong>Response of Q7:</strong> " . $row['q7_m'] . "</p>";
                                echo "<p><strong>Response of Q8:</strong> " . $row['q8_m'] . "</p>";

    
                                echo "</div>";
                                //echo "</div>";
    
                                echo "<div class='buttons-container'>";
                                echo "<button class='btn-accept' onclick='accepterDemande(" . $row['id_m'] . ")'>Accept</button>";
                                echo "<button class='btn-refuser' onclick='refuserDemande(" . $row['id_m'] . ")'>Refuse</button>";
                                echo "</div>";
                                echo "</div>";
                            }
                            

                        }
                    } else {
                        echo "No Member demands found.";
                    }
                    mysqli_close($conn);
                    ?>
                </div>
            </div>
        </div>
    </main>
    <br>
    <br>
    <br>
    <br>

    <!-- Footer and JavaScript imports -->
    
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
           

            

    <script src="admin_membre.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>
    <script>
        /*function openModal() {
        // Get the modal element
        var modal = document.getElementById('myModal');

        // Display the modal
        modal.style.display = "block";
        }

        function closeModal() {
        // Get the modal element
        var modal = document.getElementById('myModal');

        // Hide the modal
        modal.style.display = "none";
        }*/
    </script>
</body>
</html>
