<?php

function pre_cadastro($email, $cpf)
{

    require('../../config/Database.php');
    try {
        // Usando prepared statements para prevenir SQL injection
        $sql = "SELECT email, cpf FROM usuario WHERE email = :email AND cpf = :cpf";
        $stmt = $conexao->prepare($sql);

        // Bind dos valores
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':cpf', $cpf);

        // Executa a consulta
        $stmt->execute();
        $dados = $stmt->rowCount();

        if ($dados > 0) {
            header('location:../controller_cadastro/controller_pre_cadastro.php?certo');
            exit();
        } else {
            header('location:../controller_cadastro/controller_pre_cadastro.php?erro');
            exit();
        }
    } catch (PDOException $e) {
        error_log("Erro no banco de dados: " . $e->getMessage());
        echo "Ocorreu um erro ao processar sua solicitação.";
    }
}

function cadastrar($nome, $email, $cpf, $senha){

    require('../config/Database.php');

    
}
