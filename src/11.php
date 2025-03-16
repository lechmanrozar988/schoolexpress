<?php
// Connect to the database
$db = mysqli_connect("localhost", "your_username", "your_password");
if (!$db) {
    die("Error connecting to MySQL: " . mysqli_error());
}

// Select the database to use
mysqli_select_db($db, "your_database_name") or die("Could not select database");

// Create a new record in the projects table
$query = "INSERT INTO projects (title, description, deadline) VALUES ('My New Project', 'This is my new project.', NOW())";
mysqli_query($db, $query) or die("Error inserting record: " . mysqli_error());

// Update a record in the projects table
$query = "UPDATE projects SET title='My Updated Project' WHERE id=1";
mysqli_query($db, $query) or die("Error updating record: " . mysqli_error());

// Delete a record from the projects table
$query = "DELETE FROM projects WHERE id=2";
mysqli_query($db, $query) or die("Error deleting record: " . mysqli_error());

// Close the connection to the database
mysqli_close($db);
?>
