<?php 

function cadastrar_curso($nome_curso){

    require_once('../config/connect.php');

    $result_cadastro = $conexao->prepare("INSERT INTO curso values(NULL, :nome_curso);");
    $result_cadastro->bindValue(':nome_curso', $nome_curso);
    $result_cadastro->execute();

    if($result_cadastro){

        return "Curso cadastrado com sucesso";
    }else{

        return "Erro ao cadastrar o curso";
    }
}
?>