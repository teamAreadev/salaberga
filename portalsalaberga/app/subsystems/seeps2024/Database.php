<?php

$dsn = 'mysql:host=localhost;dbname=seeps';
$username = "root";
$password = "";

try {
    $pdo = new PDO($dsn, $username, $password);
    
} catch (PDOException $exception) {
    echo "Connection error: " . $exception->getMessage();
}

?>
