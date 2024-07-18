<?php
// Database connection
$db_host = "localhost:3308";
$db_user = "root";
$db_password = "";
$db_name = "adoption_db";

$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the POST data exists
if(isset($_POST['id']) && isset($_POST['state'])) {
    // Sanitize input data
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $state = mysqli_real_escape_string($conn, $_POST['state']);

    // Update the demand state in the database
    $sql = "UPDATE demander SET etat_d_a = '$state' WHERE id_ad = '$id'";
    if(mysqli_query($conn, $sql)) {
        // Return a success response
        echo json_encode(array("success" => true));
    } else {
        // Return an error response
        echo json_encode(array("success" => false, "error" => "Error updating demand state"));
    }
} else {
    // Return an error response if POST data is missing
    echo json_encode(array("success" => false, "error" => "Missing POST data"));
}

// Close database connection
mysqli_close($conn);
?>
