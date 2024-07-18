<?php
session_start();
try{
    $conn = mysqli_connect("localhost:3308","root","","adoption_db");
    if($_SERVER["REQUEST_METHOD"]=="POST") {
        $email = $_POST["email"];
        $pass = $_POST["pass"];
        $choice = $_POST["choice"];
        // admin part
        switch($choice) {
            case "admin":
                $sql_adm = "SELECT email_adm, pass_adm From admin";
                $res_adm = mysqli_fetch_assoc(mysqli_query($conn,$sql_adm));
                if($res_adm["email_adm"] == $email && $res_adm["pass_adm"] == $pass) {
                    header("location:Home_adm.html");
                }
                else {
                    header("location:login.html?error=admin");
                }
                break;
            case "adopter":
                $sql_ad = "SELECT * From adopteur 
                WHERE email_ad = '{$email}' and pass_ad = '{$pass}'";
                $res_ad = mysqli_query($conn,$sql_ad);
                if(mysqli_num_rows($res_ad) == 0) {
                    header("location:login.html?error=adopter");
                }
                else {
                    $_SESSION["ad"] = True;
                    $res_ad=  mysqli_fetch_assoc($res_ad);
                    $_SESSION["id"] = $res_ad["id_ad"];
                    header("location:status.php");
                }
                break;
            case "volunteer":
                $sql_m = "SELECT * From membre
                WHERE email_m = '{$email}' and pass_m = '{$pass}'";
                $res_m = mysqli_query($conn,$sql_m);
                if(mysqli_num_rows($res_m) == 0) {
                    header("location:login.html?error=member");
                }
                else {
                    $_SESSION["ad"] = False;
                    $res_m=  mysqli_fetch_assoc($res_m);
                    $_SESSION["id"] = $res_m["id_m"];
                    header("location:status.php");
                }
                break;
            echo $_SESSION["id"] . $_SESSION["ad"];

    }
}










}
catch (Exception $e) {
    // If an exception is caught, handle it
    header("location:login.html?error=unexpected_error");
    exit();
}








?>