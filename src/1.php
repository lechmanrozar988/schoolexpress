 <?php
 // Database configuration
 $dbHost     = 'localhost';
 $dbUsername = 'root';
 $dbPassword = '';
 $dbName     = 'schoolexpress';
 
 // Create connection
 $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
 
 // Check connection
 if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
 }
 
 // SQL query to fetch information of register students
 $sql = "SELECT * FROM student WHERE schoolID='$school'";
 
 // Execute the query
 $result = $conn->query($sql);
 if ($result->num_rows > 0) {
 // output data of each row
 while($row = $result->fetch_assoc()) {
 echo "Name: ". $row["name"]. " - ID: ". $row["ID"]. "<br>";
 }
 } else {
 echo "0 results";
 }
 ?>