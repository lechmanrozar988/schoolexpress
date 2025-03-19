<?php
// Get the current date and time
$currentDateTime = new DateTime();

// Create a new project object
$project = new Project();

// Set the project name
$project->name = "Project X";

// Set the project start date and time
$project->startDate = $currentDateTime;

// Set the project end date and time
$project->endDate = $currentDateTime->add(new DateInterval('P1Y'));

// Set the project description
$project->description = "This is a new project";

// Add the project to the database
Project::save($project);

// Print out the success message
echo "Successfully added project: $project->name";
?>