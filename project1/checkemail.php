<?php
include("reg.php"); // Assuming this file contains your database connection logic

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email'])) {
    $email = $_POST['email'];

    // Use a prepared statement to prevent SQL injection
    $query = "SELECT * FROM person_details WHERE email=?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    // Check if the email exists in the database
    if ($result && mysqli_num_rows($result) > 0) {
        echo 'exists';
    } else {
        echo 'not_exists';
    }
}
?>
