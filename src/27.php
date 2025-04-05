<?php
// Define your database connection here
$servername = "your_database_server";
$username = "your_username";
$password = "your_password";
$dbname = "school_project_tracker";

// Create a new MySQL connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Example query to check if the database exists or not
$sql = "SHOW DATABASES LIKE 'school_project_tracker'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "Database 'school_project_tracker' already exists.";
} else {
    echo "Database 'school_project_tracker' does not exist.";
}

// Close the connection
$conn->close();
?>
