<?php 
session_start();
if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id_an"])) {
    $_SESSION['id_an'] = $_GET['id_an'];
}
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["nom_ad"])) {
    $nom_ad = $_POST["nom_ad"];
    $prenom_ad = $_POST["prenom_ad"];
    $date_nai_ad = $_POST["date_nai_ad"];
    $cin_ad = $_POST["cin_ad"];
    $num_tele_ad = $_POST["num_tele_ad"];
    $email_ad = $_POST["email_ad"];
    $pass_ad = $_POST["pass_ad"];
    $addr_ad = $_POST["addr_ad"];
    $etat_soc_ad = $_POST["etat_soc_ad"];
    $pro_ad = $_POST["pro_ad"];
    $q1_ad = $_POST["q1_ad"];
    $q2_ad = $_POST["q2_ad"];
    $q3_ad = $_POST["q3_ad"];
    $q4_ad = $_POST["q4_ad"];
    $q5_ad = $_POST["q5_ad"];
    $q6_ad = $_POST["q6_ad"];
    $q7_ad = $_POST["q7_ad"];
    $q8_ad = $_POST["q8_ad"];
    try {
        $conn = mysqli_connect("localhost:3308","root","","adoption_db");
        $sql = "SELECT * FROM adopteur a  WHERE a.cin_ad = '{$cin_ad}'";
        $query = mysqli_query($conn,$sql);
        if (mysqli_num_rows($query) != 0) { 
            $_SESSION['etat_ad'] = 1;
            $res = mysqli_fetch_assoc($query);
            $id_ad = $res["id_ad"];
            $sql_dm = "SELECT * FROM demander WHERE id_ad = $id_ad ORDER BY  id_dm DESC LIMIT 1";
            $query_dm = mysqli_query($conn,$sql_dm);
            $res_dm = mysqli_fetch_assoc($query_dm);
            if($res_dm["etat_d_a"] == "pinned") {
                header("location:adopt_form.php?error=user");
                exit();
                mysqli_close($conn);
            }
       }
       else {
        $_SESSION['etat_ad'] = 0;
       }
        // les variables de la session 
        $_SESSION["nom_ad"] = $nom_ad;
        $_SESSION["prenom_ad"] = $prenom_ad;
        $_SESSION["date_nai_ad"] = $date_nai_ad;
        $_SESSION["cin_ad"] = $cin_ad;
        $_SESSION["num_tele_ad"] = $num_tele_ad;
        $_SESSION["email_ad"] = $email_ad;
        $_SESSION["pass_ad"] = $pass_ad;
        $_SESSION["addr_ad"] = $addr_ad;
        $_SESSION["etat_soc_ad"] = $etat_soc_ad;
        $_SESSION["pro_ad"] = $pro_ad;
        $_SESSION["q1_ad"] = $q1_ad;
        $_SESSION["q2_ad"] = $q2_ad;
        $_SESSION["q3_ad"] = $q3_ad;
        $_SESSION["q4_ad"] = $q4_ad;
        $_SESSION["q5_ad"] = $q5_ad;
        $_SESSION["q6_ad"] = $q6_ad;
        $_SESSION["q7_ad"] = $q7_ad;
        $_SESSION["q8_ad"] = $q8_ad;
        mysqli_close($conn);
        header("location:rdv_ado.php");
        exit();
    }
    catch (Exception $e) {
        // If an exception is caught, handle it
        header("location:adopt_form.php");
        exit();
    }
}

if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["date_rdv"]) {
    // execution de l'insertion des informations 
    try {
        $date_rdv = $_POST['date_rdv'];
        $heure_rdv = $_POST["heure_rdv"];
        $nom_ad = $_SESSION["nom_ad"];
        $prenom_ad = $_SESSION["prenom_ad"];
        $date_nai_ad = $_SESSION["date_nai_ad"];
        $cin_ad = $_SESSION["cin_ad"];
        $num_tele_ad = $_SESSION["num_tele_ad"];
        $email_ad = $_SESSION["email_ad"];
        $pass_ad = $_SESSION["pass_ad"];
        $addr_ad = $_SESSION["addr_ad"];
        $etat_soc_ad = $_SESSION["etat_soc_ad"];
        $pro_ad = $_SESSION["pro_ad"];
        $q1_ad = $_SESSION["q1_ad"];
        $q2_ad = $_SESSION["q2_ad"];
        $q3_ad = $_SESSION["q3_ad"];
        $q4_ad = $_SESSION["q4_ad"];
        $q5_ad = $_SESSION["q5_ad"];
        $q6_ad = $_SESSION["q6_ad"];
        $q7_ad = $_SESSION["q7_ad"];
        $q8_ad = $_SESSION["q8_ad"];
        $etat_ad = $_SESSION["etat_ad"];
        $id_an = $_SESSION["id_an"];
        $etat_d_a ="pinned";
        $conn = mysqli_connect("localhost:3308","root","","adoption_db");
        // sql d'insertion 
        
        $sql_rdv = "INSERT INTO rendez_vous(date_rdv,heure_rdv)VALUES(?,?)";
        $stmt = mysqli_prepare($conn, $sql_rdv);
        // Bind parameters
        mysqli_stmt_bind_param($stmt,"ss", $date_rdv,$heure_rdv);
        // Execute insertion in rdv table
        mysqli_stmt_execute($stmt);
        // get the id rdv 
        $sql_id_rdv = "SELECT id_rdv FROM rendez_vous ORDER BY id_rdv DESC LIMIT 1;";
        $res_id_rdv = mysqli_fetch_assoc(mysqli_query($conn ,$sql_id_rdv));
        $id_rdv = $res_id_rdv["id_rdv"];
        if($etat_ad == 0)  {
            // nouveur adopteur ----> insertion
            $sql_ad  = "INSERT INTO adopteur(nom_ad,prenom_ad,date_nai_ad,cin_ad,num_tele_ad,
            email_ad,pass_ad,addr_ad,etat_soc_ad,pro_ad,q1_ad,q2_ad,q3_ad,q4_ad,q5_ad,q6_ad,q7_ad,q8_ad,id_rdv,id_asso)VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $stmt = mysqli_prepare($conn, $sql_ad);
            $id_asso = 1;
            // Bind parameters
            mysqli_stmt_bind_param($stmt,"ssssssssssssssssssss",$nom_ad,$prenom_ad,$date_nai_ad,$cin_ad,$num_tele_ad,
            $email_ad,$pass_ad,$addr_ad,$etat_soc_ad,$pro_ad,$q1_ad,$q2_ad,$q3_ad,$q4_ad,$q5_ad,$q6_ad,$q7_ad,$q8_ad,$id_rdv,$id_asso);
            // Execute insertion in rdv table
            mysqli_stmt_execute($stmt);
            // select id adopteur 
            $sql_id_ad = "SELECT id_ad FROM adopteur ORDER BY id_ad DESC LIMIT 1";
            $res_id_ad = mysqli_fetch_assoc(mysqli_query($conn ,$sql_id_ad));
            $id_ad = $res_id_ad["id_ad"];
            // insert dans la table demander
            $sql_ad_dm  = "INSERT INTO demander(id_ad,id_an,etat_d_a)VALUES(?,?,?)";
            $stmt = mysqli_prepare($conn, $sql_ad_dm);
            mysqli_stmt_bind_param($stmt,"sss",$id_ad,$id_an,$etat_d_a);
            // Execute insertion in demand table
            mysqli_stmt_execute($stmt);
            mysqli_close($conn);
            session_destroy();
            header("location:rdv_ado.php?success=booked");
            exit();
        }
        else {
            echo $etat_soc_ad;
            // update the information based on the cin values
            $sql_id_ad = "SELECT id_ad FROM adopteur WHERE cin_ad = '{$cin_ad}'";
            $id_asso = 1;
            $res_id_ad = mysqli_fetch_assoc(mysqli_query($conn,$sql_id_ad));
            $id_ad = $res_id_ad["id_ad"];
            $sql_ad = "UPDATE adopteur 
            SET num_tele_ad = ?, email_ad = ?, pass_ad = ?, addr_ad = ?, etat_soc_ad = ?, pro_ad = ?, q1_ad = ?, q2_ad = ?, q3_ad = ?, q4_ad = ?, q5_ad = ?, q6_ad = ?, q7_ad = ?, q8_ad = ?, id_rdv = ?, id_asso = ?
            WHERE id_ad = $id_ad";
            $stmt =mysqli_prepare($conn,$sql_ad);
            mysqli_stmt_bind_param($stmt,'ssssssssssssssss', $num_tele_ad, $email_ad, $pass_ad, $addr_ad, $etat_soc_ad, $pro_ad, $q1_ad, $q2_ad, $q3_ad, $q4_ad, $q5_ad, $q6_ad, $q7_ad, $q8_ad, $id_rdv, $id_asso);
            mysqli_stmt_execute($stmt);
            $sql_ad_dm  = "INSERT INTO demander(id_ad,id_an,etat_d_a)VALUES(?,?,?)";
            $stmt = mysqli_prepare($conn, $sql_ad_dm);
            mysqli_stmt_bind_param($stmt,"sss",$id_ad,$id_an,$etat_d_a);
            // Execute insertion in demande table
            mysqli_stmt_execute($stmt);
            mysqli_close($conn);
            session_destroy();
            header("location:rdv_ado.php?success=booked");
            exit();
        }
    
            // Close the statement and connection
    }catch (Exception $e) {
        // If an exception is caught, handle it
        header("location:adopt_form.php");
        exit();
    }
    
}

















?>