<?php
session_start();
try{
    $conn = mysqli_connect("localhost:3308","root","","adoption_db");
    if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["nom_don_c"])) {
        $nom_don_c= $_POST["nom_don_c"];
        $credit_c_n= $_POST["credit_c_num"];
        $exp_m= $_POST["exp_m"];
        if($exp_m>12 || $exp_m < 1) {
            header("location:donate_c.php?error=month");
            exit();
        }
        $exp_y= $_POST["exp_y"];
        if($exp_y < date('y')) {
            header("location:donate_c.php?error=year");
            exit();
        }
        $code_v_c=$_POST["code_v_c"];
        if(strlen($code_v_c)!=3) {
            header("location:donate_c.php?error=cvc");
            exit();
        }
        $nom_don = $_SESSION["nom_don"];
        $prenom_don = $_SESSION["prenom_don"];
        $email_don = $_SESSION["donation-email"] ;
        $devise = $_SESSION["devise"] ;
        $freq = $_SESSION["DonationFrequency"];
        $montant  = $_SESSION["flexRadioDefault"];
        $id_assoc = 1;

        $sql_don = "INSERT INTO donateur(nom_don,prenom_don,email_don,devise,nom_don_c,
        credit_c_n,exp_m,exp_y,code_v_c,freq,montant,id_asso)
        VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";
        //
        $stmt = mysqli_prepare($conn, $sql_don);
        // Bind parameters
        mysqli_stmt_bind_param($stmt, "ssssssssssss", $nom_don,$prenom_don,$email_don,$devise,$nom_don_c,$credit_c_n,$exp_m,$exp_y,$code_v_c,$freq,$montant,$id_assoc);
    // Execute the statement
        if(mysqli_stmt_execute($stmt)) { 
            header("location:thanks.php");
            exit();
        }
        
        else {
            header("location:donate_c.php?error=donate");
        }
    }
    
    





}

catch (Exception $e) {
    // If an exception is caught, handle it
    header("location:donate_c.php?error=unexpected_error");
    exit();
}




?>