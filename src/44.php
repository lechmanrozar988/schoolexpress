<?php
session_start();

if (!isset($_SESSION['project_id'])) {
    $_SESSION['project_id'] = 0;
}

// Add your project management logic here

// If no project was found, redirect to login page
if (empty($_SESSION['project_id'])) {
    header("Location: login.php");
}
?>
