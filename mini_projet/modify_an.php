<?php 

if($_SERVER['REQUEST_METHOD'] == "POST") {
    try {
        $conn = mysqli_connect("localhost:3308","root","","adoption_db");
        if(!$conn) {
            header("location:add_an.html?error=unexpected_error");
            exit();
        }
        else {
            $array =  array();
            $code_an = $_POST["code_an"];
            $info_an = $_POST["info_an"];
            $new_info = $_POST["new_info"];
            echo $info_an;
            echo $new_info;
            $sql  = "SELECT code_an FROM  animal";
            $res = mysqli_query($conn,$sql);
            // remplir la list avec les codes animal existant
            while($raw = mysqli_fetch_assoc($res)) {
                array_push($array,$raw["code_an"]);
            }
            // existance test
            if(!in_array($code_an,$array)) {
                header("location:modify_an.html?error=code_an");
            }
            else {
                $update = "UPDATE animal SET `$info_an` = ? WHERE code_an = ?";
                $update = mysqli_prepare($conn,$update);
                // Bind parameters
                mysqli_stmt_bind_param($update, "ss", $new_info, $code_an);
                // Execute the statement
                if(mysqli_stmt_execute($update)) {
                    header("location:modify_an.html?success=update");
                    exit();
                }
                else {
                    header("location:modify_an.html?error=update");
                    exit();
                }
                // Close the statement
                mysqli_stmt_close($update);
                
            
            }
            mysqli_close($conn);
        }
    }
    catch (Exception $e) {
        // If an exception is caught, handle it
        header("location:modify_an.html?error=unexpected_error");
        exit();
    }
}

?>