<?php
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "schoolexpress");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the project id from the URL parameters
$project_id = $_GET["project_id"];

// Retrieve the project data from the database
$sql = "SELECT * FROM projects WHERE id = '$project_id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row["name"];
    }
} else {
    echo "No project found with that id";
}

// Close the connection to the database
mysqli_close($conn);
?>