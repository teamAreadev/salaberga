<?php

$dsn = 'mysql:host=localhost;dbname=antonio_valmir';
$username = "root";
$password = "";

try {
    $conexao = new PDO($dsn, $username, $password);
    
} catch (PDOException $exception) {
    echo "Connection error: " . $exception->getMessage();
}

?>
