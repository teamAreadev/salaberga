<?php

$dsn = 'mysql:host=localhost;dbname= u750204740_Maria_Carmem';
$username = " u750204740_Maria_Carmem";
$password = "Maria_Carmem!@##qwe123";

try {
    $conexao = new PDO($dsn, $username, $password);
    
} catch (PDOException $exception) {
    echo "Connection error: " . $exception->getMessage();
}

?>
