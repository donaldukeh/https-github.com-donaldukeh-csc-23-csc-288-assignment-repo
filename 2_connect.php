<?php
// Database configuration
$host     = "localhost";
$user     = "root";
$password = "";
$dbname   = "student_db";

// Enable error reporting for mysqli
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    // Create connection
    $conn = new mysqli($host, $user, $password, $dbname);

    // Set charset to avoid issues with special characters
    $conn->set_charset("utf8mb4");

    // Optional: Uncomment for debugging
    // echo "Database connected successfully!";
} catch (Exception $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
