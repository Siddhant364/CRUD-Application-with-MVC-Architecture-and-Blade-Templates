<?php
require_once __DIR__ . '/../models/Student.php';

// Ensure BASE_URL is defined
if (!defined('BASE_URL')) {
    define('BASE_URL', '/Workshop8/public');
}

class StudentController {
    private $studentModel;
    private $blade;
    
    public function __construct($pdo, $blade) {
        $this->studentModel = new Student($pdo);
        $this->blade = $blade;
    }
    
    // Display all students
    public function index() {
        $students = $this->studentModel->all();
        echo $this->blade->make('students.index', ['students' => $students])->render();
    }
    
    // Show form to create a new student
    public function create() {
        echo $this->blade->make('students.create')->render();
    }
    
    // Store a new student in the database
    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->studentModel->create(
                $_POST['name'],
                $_POST['email'],
                $_POST['course']
            );
            // Redirect to index immediately after POST
            header('Location: ' . BASE_URL . '/index.php?action=index');
            exit();
        }
    }
    
    // Show form to edit an existing student
    public function edit($id) {
        $student = $this->studentModel->find($id);
        if (!$student) {
            echo "Student not found!";
            exit();
        }
        echo $this->blade->make('students.edit', ['student' => $student])->render();
    }
    
    // Update student in the database
    public function update($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->studentModel->update(
                $id,
                $_POST['name'],
                $_POST['email'],
                $_POST['course']
            );
            // Redirect to index immediately after POST
            header('Location: ' . BASE_URL . '/index.php?action=index');
            exit();
        }
    }
    
    // Delete a student
    public function delete($id) {
        $this->studentModel->delete($id);
        // Redirect to index immediately after deletion
        header('Location: ' . BASE_URL . '/index.php?action=index');
        exit();
    }
}
?>
