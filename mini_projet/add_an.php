<?php 

if($_SERVER['REQUEST_METHOD'] == "POST") {
    try {
        $conn = mysqli_connect("localhost:3308","root","","adoption_db");
        //connection test
        if(!$conn) {
            header("location:add_an.html?error=unexpected_error");
            exit();
        }
        else {
            $codes_an = array(); 
            $code_an = $_POST["code_an"];
            $ps_nom_an = $_POST["ps_nom_an"];
            $sex_an = $_POST["sex_an"];
            $genre_an = $_POST["genre_an"];
            $size_an = $_POST["size_an"];
            $age_an = $_POST["age_an"];
            $date_arr_an = $_POST["date_arr_an"];
            $img_path = $_POST["img_path"];
            $sql_code_an = "SELECT code_an FROM animal";
            $query_code_an = mysqli_query($conn,$sql_code_an);
            while($row = mysqli_fetch_assoc($query_code_an)) {
                $codes_an[] = $row["code_an"];
            }
            if(in_array($code_an,$codes_an)) {
                header("location:add_an.html?error=code");
                exit();
            }
            $etat_an = "not adopted";
            // keep the special character 
            // sql insertion
            $sql = "INSERT INTO animal(
                code_an,ps_nom_an,sex_an,genre_an,size_an,age_an,date_arr_an,img_path,etat_an)
                VALUES (?,?,?,?,?,?,?,?,?)";
            $stmt = mysqli_prepare($conn, $sql);
                // Bind parameters
            mysqli_stmt_bind_param($stmt, "sssssssss", $code_an,$ps_nom_an,$sex_an,$genre_an,$size_an,$age_an,$date_arr_an,$img_path,$etat_an);
            // Execute the statement
            if(mysqli_stmt_execute($stmt)) { 
                header("location:add_an.html?success=inserted");
                exit();
            }
            else {
                header("location:add_an.html?error=inserted");
                exit();
            }
                // Close the statement and connection
            mysqli_stmt_close($stmt);         
            mysqli_close($conn);
        }
    }
    catch (Exception $e) {
        // If an exception is caught, handle it
        header("location:add_an.html?error=unexpected_error");
        exit();
    }
}
?>