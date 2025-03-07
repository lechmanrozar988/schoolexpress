<?php
// Connect to the database
$conn = mysqli_connect("localhost", "db_user", "db_password", "db_name");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the project ID from the URL parameter
$projectId = $_GET["projectId"];

// Query to retrieve the project data
$sql = "SELECT * FROM projects WHERE id = $projectId";

// Execute the query and get the result
$result = mysqli_query($conn, $sql);

// Check if there are any results
if (mysqli_num_rows($result) > 0) {
    // Get the project data
    while ($row = mysqli_fetch_assoc($result)) {
        $projectName = $row["name"];
        $projectDescription = $row["description"];
        $projectDueDate = $row["due_date"];
    }
} else {
    // If there are no results, return an error message
    echo "No project found with that ID";
}

// Close the database connection
mysqli_close($conn);
?>