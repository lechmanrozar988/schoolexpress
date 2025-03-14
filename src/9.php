<?php
class Project {
    private $name;
    private $description;
    private $deadline;
    private $status;
    public function __construct($name, $description, $deadline) {
        $this->name = $name;
        $this->description = $description;
        $this->deadline = $deadline;
        $this->status = 'open';
    }
    public function getName() {
        return $this->name;
    }
    public function getDescription() {
        return $this->description;
    }
    public function getDeadline() {
        return $this->deadline;
    }
    public function getStatus() {
        return $this->status;
    }
    public function setStatus($status) {
        $this->status = $status;
    }
}
?>