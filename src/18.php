<?php
// Define constants
$project_id = "1234567890";
$project_name = "My Project";

// Connect to database
$conn = mysqli_connect("localhost", "username", "password", $project_id);

if ($conn) {
    echo "Connection successful!";
} else {
    echo "Connection failed.";
}

// SQL query to retrieve project details
$sql = "SELECT * FROM projects WHERE id = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "i", $project_id);

if (mysqli_stmt_execute($stmt)) {
    echo "Project details retrieved successfully!";
} else {
    echo "Error executing query: " . mysqli_stmt_error($stmt);
}

// Close the connection
mysqli_close($conn);
?>
