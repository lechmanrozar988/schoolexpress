<?php
// Initialize session
session_start();

// Check if user is already logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to login page
    header("Location: /login.php");
    exit();
}

// Connect to the database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "schoolproject";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Code to be executed by the PHP code

// Close database connection
$conn->close();

?>
