<?php

// database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql query to fetch the data
$sql = "SELECT * FROM projects WHERE projectID='".$projectID."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Project ID: ". $row["projectID"]. "- Name: " . $row["name"]. "- Description: " . $row["description"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
