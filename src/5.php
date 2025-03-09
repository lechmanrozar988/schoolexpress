
<?php

// Connect to the database
$conn = new mysqli("localhost", "user", "password", "database");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query the database for a list of projects
$result = $conn->query("SELECT * FROM projects");

// Display the results in an HTML table
echo "<table border='1'>";
while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["project_name"] . "</td>";
    echo "<td>" . $row["description"] . "</td>";
    echo "<td>" . $row["due_date"] . "</td>";
    echo "<td>" . $row["status"] . "</td>";
    echo "</tr>";
}
echo "</table>";

// Close the connection to the database
$conn->close();
?>