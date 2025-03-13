
<?php

// This is just an example, you can modify it to fit your needs
$result = array();

// Connect to the database and get a list of all projects
$conn = new mysqli("localhost", "my_user", "my_password", "my_db");
$projects = $conn->query("SELECT * FROM projects")->fetchAll(PDO::FETCH_ASSOC);

// Loop through each project and get its tasks
foreach($projects as $project) {
    $tasks = $conn->query("SELECT * FROM tasks WHERE project_id=" . $project['id'])->fetchAll(PDO::FETCH_ASSOC);
    // Add the tasks to the result array
    $result[$project['id']] = $tasks;
}

// Disconnect from the database
$conn->close();

return json_encode($result);

?>