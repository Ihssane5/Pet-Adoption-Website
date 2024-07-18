<?php 
session_start();
/*if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id_an"])) {
    $_SESSION['id_an'] = $_GET['id_an'];
}*/
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["nom_m"])){

    $nom_m = $_POST["nom_m"];
    $prenom_m = $_POST["prenom_m"];
    $date_nai_m = $_POST["date_nai_m"];
    $cin_m = $_POST["cin_m"];
    $num_tele_m = $_POST["num_tele_m"];
    $email_m = $_POST["email_m"];
    $pass_m = $_POST["pass_m"];
    $addr_m = $_POST["addr_m"];
    $etat_soc_m = $_POST["etat_soc_m"];
    $pro_m = $_POST["pro_m"];
    $q1_m = $_POST["q1_m"];
    $q2_m = $_POST["q2_m"];
    $q3_m = $_POST["q3_m"];
    $q4_m = $_POST["q4_m"];
    $q5_m = $_POST["q5_m"];
    $q6_m = $_POST["q6_m"];
    $q7_m = $_POST["q7_m"];
    $q8_m = $_POST["q8_m"];
    try {
        $conn = mysqli_connect("localhost:3308","root","","adoption_db");
        $sql = "SELECT * FROM membre a  WHERE a.cin_m = '{$cin_m}'";
        $query = mysqli_query($conn,$sql);
        if (mysqli_num_rows($query) != 0) { 
            $_SESSION['etat_m'] = 1;
            $res = mysqli_fetch_assoc($query);
            $id_m = $res["id_m"];
            $sql_dm = "SELECT * FROM membre WHERE id_m = $id_m ";
            $query_dm = mysqli_query($conn,$sql_dm);
            $res_dm = mysqli_fetch_assoc($query_dm);
            if($res_dm["etat_d_m"] == "pinned") {
                header("location:member_form.php?error=user");
                exit();
                mysqli_close($conn);
            }
       }
       else {
        $_SESSION['etat_m'] = 0;
       }
        // les variables de la session 
        $_SESSION["nom_m"] = $nom_m;
        $_SESSION["prenom_m"] = $prenom_m;
        $_SESSION["date_nai_m"] = $date_nai_m;
        $_SESSION["cin_m"] = $cin_m;
        $_SESSION["num_tele_m"] = $num_tele_m;
        $_SESSION["email_m"] = $email_m;
        $_SESSION["pass_m"] = $pass_m;
        $_SESSION["addr_m"] = $addr_m;
        $_SESSION["etat_soc_m"] = $etat_soc_m;
        $_SESSION["pro_m"] = $pro_m;
        $_SESSION["q1_m"] = $q1_m;
        $_SESSION["q2_m"] = $q2_m;
        $_SESSION["q3_m"] = $q3_m;
        $_SESSION["q4_m"] = $q4_m;
        $_SESSION["q5_m"] = $q5_m;
        $_SESSION["q6_m"] = $q6_m;
        $_SESSION["q7_m"] = $q7_m;
        $_SESSION["q8_m"] = $q8_m;
        mysqli_close($conn);
        header("location:rdv_mem.php");
        exit();
    }catch (Exception $e) {
        // If an exception is caught, handle it
        header("location:adopt_form.php");
        exit();
    }
}
    

if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["date_rdv"]) {
    // execution de l'insertion des informations 
    $date_rdv = $_POST['date_rdv'];
    $heure_rdv = $_POST["heure_rdv"];
    $nom_m = $_SESSION["nom_m"];
    $prenom_m = $_SESSION["prenom_m"];
    $date_nai_m = $_SESSION["date_nai_m"];
    $cin_m = $_SESSION["cin_m"];
    $num_tele_m = $_SESSION["num_tele_m"];
    $email_m = $_SESSION["email_m"];
    $pass_m = $_SESSION["pass_m"];
    $addr_m = $_SESSION["addr_m"];
    $etat_soc_m = $_SESSION["etat_soc_m"];
    $pro_m = $_SESSION["pro_m"];
    $q1_m = $_SESSION["q1_m"];
    $q2_m = $_SESSION["q2_m"];
    $q3_m = $_SESSION["q3_m"];
    $q4_m = $_SESSION["q4_m"];
    $q5_m = $_SESSION["q5_m"];
    $q6_m = $_SESSION["q6_m"];
    $q7_m = $_SESSION["q7_m"];
    $q8_m = $_SESSION["q8_m"];
    $etat_m = $_SESSION["etat_m"];
    $etat_d_m ="pinned";

    try {
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
        if($etat_m == 0)  {
            // nouveur membre ----> insertion
            $sql_m  = "INSERT INTO membre(nom_m,prenom_m,date_nai_m,cin_m,num_tele_m,
            email_m,pass_m,addr_m,etat_soc_m,pro_m,q1_m,q2_m,q3_m,q4_m,q5_m,q6_m,q7_m,q8_m,etat_d_m,id_rdv,id_asso)VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $stmt = mysqli_prepare($conn, $sql_m);
            $id_asso = 1;
            // Bind parameters
            mysqli_stmt_bind_param($stmt,"sssssssssssssssssssss",$nom_m,$prenom_m,$date_nai_m,$cin_m,$num_tele_m,
            $email_m,$pass_m,$addr_m,$etat_soc_m,$pro_m,$q1_m,$q2_m,$q3_m,$q4_m,$q5_m,$q6_m,$q7_m,$q8_m,$etat_d_m,$id_rdv,$id_asso);
            // Execute insertion in rdv table
            mysqli_stmt_execute($stmt);
            
            //I don't need that !!!

            // select id adopteur 
            /*$sql_id_m= "SELECT id_m FROM membre ORDER BY id_m DESC LIMIT 1";
            $res_id_m = mysqli_fetch_assoc(mysqli_query($conn ,$sql_id_m));
            $id_m = $res_id_m["id_m"];*/

            // insert dans la table demander
            /*$sql_ad_dm  = "INSERT INTO demander(id_ad,id_an,etat_d_a)VALUES(?,?,?)";
            $stmt = mysqli_prepare($conn, $sql_ad_dm);
            mysqli_stmt_bind_param($stmt,"sss",$id_ad,$id_an,$etat_d_a);*/



            // Execute insertion in rdv table (m not suure)
            //mysqli_stmt_execute($stmt);
            mysqli_close($conn);
            session_destroy();
            header("location:rdv_mem.php?success=booked");
            exit();
        }
        else {
            // update the information based on the cin values
            $sql_id_m = "SELECT id_m FROM membre WHERE cin_m = '{$cin_m}'";
            $res_id_m = mysqli_fetch_assoc(mysqli_query($conn,$sql_id_m));
            $id_asso = 1;
            $id_m = $res_id_m["id_m"];
            $sql_m = "UPDATE membre
            SET num_tele_m = ?, email_m = ?, pass_m = ?, addr_m = ?, etat_soc_m = ?, pro_m = ?, q1_m = ?, q2_m = ?, q3_m= ?, q4_m = ?, q5_m = ?, q6_m = ?, q7_m = ?, q8_m = ?, id_rdv = ?, id_asso = ?,etat_d_m = ?
            WHERE id_m = $id_m";
            $stmt =mysqli_prepare($conn,$sql_m);
            mysqli_stmt_bind_param($stmt,'sssssssssssssssss', $num_tele_m, $email_m, $pass_m, $addr_m, $etat_soc_m, $pro_m, $q1_m, $q2_m, $q3_m, $q4_m, $q5_m, $q6_m, $q7_m, $q8_m, $id_rdv, $id_asso,$etat_d_m);
            mysqli_stmt_execute($stmt);
            // Execute insertion in demande table
            mysqli_stmt_execute($stmt);
            mysqli_close($conn);
            session_destroy();
            header("location:rdv_mem.php?success=booked");
            exit();
        }
        
            // Close the statement and connection
    } catch (Exception $e) {
        // If an exception is caught, handle it
        header("location:adopt_form.php");
        exit();
    }

    /*header("location:rdv_ado.php?success=booked");
    exit();*/
    
}

















?>