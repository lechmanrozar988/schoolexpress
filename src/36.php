<?php
// Initialize session
session_start();

// Check if user is already logged in
if(isset($_SESSION['user_id'])) {
    // Redirect to home page
    header("location: index.php");
} else {
    // Display error message
    echo "Please log in first.";
}
?>
