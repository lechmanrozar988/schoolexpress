<?php 
  // Define variables and initialize arrays
  $student_name = "John Doe";
  $course_name = "Mathematics II";
  $assignment_number = 123456;
  
  // Generate a random number between 0 and 99
  $random_number = rand(0, 99);
  
  // Print the variables in the correct format
  echo "<h1>Project Assignment: " . $course_name . "</h1>";
  echo "<p>Student Name: " . $student_name . "</p>";
  echo "<p>Assignment Number: " . $assignment_number . "</p>";
  echo "<p>Random Number: " . $random_number . "</p>";
?>
