<?php
session_start();

if (!isset($_SESSION['project_id'])) {
    // Redirect to login page or handle user authentication accordingly
    header('Location: login.php');
    exit();
}

?>
