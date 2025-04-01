<?php
// Define constants
const PROJECT_NAME = 'School Project Tracker';
const DATABASE_URL = 'mongodb://localhost:27017';

// Initialize connection to MongoDB database
$connection = new mongodb($DATABASE_URL);
$db = $connection->selectDB();

// Check if the project exists in the database
if ($project = $db->get('projects', ['name' => PROJECT_NAME])) {
    echo "Project already exists. Please specify a different name.";
} else {
    // Insert project data into the database
    $project = array(
        'name' => PROJECT_NAME,
        'description' => 'This is a new school project.',
        'deadline' => date('Y-m-d', strtotime('+1 day')),
        'status' => 'pending',
    );

    // Insert the project data into the database
    if ($inserted = $db->insert($project)) {
        echo "Project successfully inserted: \n";
        var_dump($inserted);
    } else {
        echo "Failed to insert project. Reason: " . error_get_last()['message'];
    }
}

// Close MongoDB connection
$connection->close();
?>
