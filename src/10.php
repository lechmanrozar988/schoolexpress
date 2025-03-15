<?php
// Connect to the database
$conn = mysqli_connect("localhost", "db_user", "db_password", "database_name");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query for all projects
$query = "SELECT * FROM projects";
$result = mysqli_query($conn, $query);

// Print the results in a table
echo "<table>";
while ($row = mysqli_fetch_array($result)) {
    echo "<tr><td>" . $row["project_name"] . "</td><td>" . $row["project_description"] . "</td></tr>";
}
echo "</table>";

// Close the database connection
mysqli_close($conn);
?>