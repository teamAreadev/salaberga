<?php
class Database {
    private $host = "localhost";
    private $db_name = "u750204740_portalsaberga";
    private $username = "u750204740_salaberga";
    private $password = "paoComOvo123!@##";
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->db_name}", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }
    public function getUsuarios() {
           $query = "SELECT * FROM usuario"; // Removido o acento
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

// Exemplo de uso
$database = new Database();
$conn = $database->getConnection();
$usuarios = $database->getUsuarios();

print_r($usuarios);
    

?>
