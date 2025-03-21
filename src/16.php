<?php
// Example PHP code to track and manage school projects

// Function to add a new project
function addProject($title, $description) {
    echo "New project added: $title\n";
}

// Function to update an existing project
function updateProject($projectID, $title, $description) {
    echo "Project updated: ID = $projectID, Title = $title, Description = $description\n";
}

// Function to delete a project by its ID
function deleteProject($projectId) {
    echo "Project deleted: ID = $projectId\n";
}
?>
