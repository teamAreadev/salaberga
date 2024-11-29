<?php

$dsn = 'mysql:host=localhost;dbname=u750204740_Maria_Carmem';
$username = "u750204740_Antonio_Valmir";
$password = "Antonho_Valmir!@##qwe123";


try {
    $conexao = new PDO($dsn, $username, $password);
    
} catch (PDOException $exception) {
    echo "Connection error: " . $exception->getMessage();
}

?>
