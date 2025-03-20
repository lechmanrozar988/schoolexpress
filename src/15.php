<?php
// Include necessary libraries
require_once 'vendor/autoload.php';

// Define constants
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'school_projects');

// Connect to the database
$pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);

// SQL query for fetching all project information
$sql = "SELECT * FROM projects ORDER BY project_id DESC";
$stmt = $pdo->query($sql);
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Display the results
foreach ($result as $row) {
    echo "Project ID: " . $row['project_id'] . ", Title: " . $row['title'] . " - Status: " . $row['status'];
}

?>
