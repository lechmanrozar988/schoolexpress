<?php
// Initialize the database connection
$db = new mysqli("localhost", "username", "password", "database_name");

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Perform SQL queries or other operations here

// Close the database connection
$db->close();
?>
