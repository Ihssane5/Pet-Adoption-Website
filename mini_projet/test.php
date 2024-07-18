<?php
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $conn = mysqli_connect("localhost:3307","root"," ","adoption_db");
        try {
            if($conn) {
                $sucess = false;
                $d = 0;
                $code_animal = $_POST["code_an"];
                $info_an = $_POST["info_an"];
                $new_info = $_POST["new_info"];
                $sql = "SELECT code_cage FROM  animal";
                $res = mysqli_query($conn,$sql);
                while ($row = mysqli_fetch_assoc($res)) {  
                    if($row["code_cage"] == $code_animal) {
                        $d = 1;
                        $sql_up = "UPDATE animal SET code_cage = ? WHERE code_cage = ?";
                        $stmt = mysqli_prepare($conn, $sql_up);
                        mysqli_stmt_bind_param($stmt, "ss", $new_info, $code_animal);  
                        $sucess = mysqli_stmt_execute($stmt);
                    }
                        
                }
                if($sucess) {
                    header("location:modify_an.html?sucess=update");
                    exit();
                }
                else {
                    header("location:modify_an.html?error=code");
                    exit();
                }



            }
        }
        catch (mysqli_sql_exception $e) {
            // Catch and handle the exception
            // Optionally, you can log the error or display a custom error message
            header("location:modify_an.html?error=unexpected_error");
            exit();
        }
    }




?>