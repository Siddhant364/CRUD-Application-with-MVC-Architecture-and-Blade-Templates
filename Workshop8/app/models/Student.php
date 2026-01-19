
<?php
class Student {
    private $pdo;
    
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
    
    public function all() {
        $sql = "SELECT * FROM students ORDER BY id DESC";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function find($id) {
        $sql = "SELECT * FROM students WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    public function create($name, $email, $course) {
        $sql = "INSERT INTO students (name, email, course) VALUES (:name, :email, :course)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            ':name' => $name,
            ':email' => $email,
            ':course' => $course
        ]);
    }
    
    public function update($id, $name, $email, $course) {
        $sql = "UPDATE students SET name = :name, email = :email, course = :course WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            ':id' => $id,
            ':name' => $name,
            ':email' => $email,
            ':course' => $course
        ]);
    }
    
    public function delete($id) {
        $sql = "DELETE FROM students WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([':id' => $id]);
    }
}
?>
