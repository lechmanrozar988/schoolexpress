
<?php

$projects = array(
    array("name" => "Project 1", "status" => "in progress"),
    array("name" => "Project 2", "status" => "completed"),
    array("name" => "Project 3", "status" => "pending")
);

foreach($projects as $project) {
    echo "<tr>";
    echo "<td>" . $project["name"] . "</td>";
    echo "<td>" . $project["status"] . "</td>";
    echo "</tr>";
}

?>