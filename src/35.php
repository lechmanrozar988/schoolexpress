<?php
// database credentials
$db['host'] = 'localhost';
$db['user'] = 'root';
$db['password'] = '';
$db['dbname'] = 'school_project_tracker';

// project model class
class ProjectModel {
    public function getAllProjects() {
        $query = "SELECT * FROM projects";
        return $this->db->select($query);
    }

    // insert a new project
    public function addProject($name, $description) {
        $query = "INSERT INTO projects (name, description) VALUES (?, ?)";
        return $this->db->insert($query, [$name, $description]);
    }
    
    // delete a project by ID
    public function deleteProject($id) {
        $query = "DELETE FROM projects WHERE id = ?";
        return $this->db->execute($query, [array($id)]);
    }
}

// database connection setup
$db['host'] = 'localhost';
$db['user'] = 'root';
$db['password'] = '';
$db['dbname'] = 'school_project_tracker';

$projectModel = new ProjectModel();
