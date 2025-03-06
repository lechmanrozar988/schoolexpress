<?php

// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "schoolexpress");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query to retrieve projects from the database
$sql = "SELECT * FROM projects";
$result = mysqli_query($conn, $sql);

// Loop through each project and display its details
while ($row = mysqli_fetch_array($result)) {
    echo "<h2>" . $row["projectName"] . "</h2>";
    echo "<p>" . $row["description"] . "</p>";
}

// Close the database connection
mysqli_close($conn);
