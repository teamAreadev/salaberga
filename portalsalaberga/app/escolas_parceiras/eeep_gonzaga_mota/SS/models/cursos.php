<?php
function cursos()
{

    require_once('../config/connect.php');
    $result_curso = $conexao->prepare("SELECT nome_curso FROM curso");
    $result_curso->execute();

    return $tabela_curso = $result_curso->fetchAll(PDO::FETCH_ASSOC);
}

function cadastrar_curso($nome_curso, $cor)
{
    require_once('../config/connect.php');

    $smt_check = $conexao->prepare("SELECT * FROM curso WHERE nome_curso = :nome_curso");
    $smt_check->bindValue(':nome_curso', $nome_curso);
    $smt_check->execute();
    $fetchAll = $smt_check->rowCount();

    if ($fetchAll > 0) {

        $smt_cadastrar_curso = $conexao->prepare("INSERT INTO nota VALUE(NULL, :nome_curso)");
        $smt_cadastrar_curso->bindValue(':nome_curso', $nome_curso);
        $smt_cadastrar_curso->execute();

        if ($smt_cadastrar_curso) {

            return "curso cadastrado com sucesso!";
        } else {

            return "erro ao cadastrar o curso!";
        }
    }else{

        return "curso Já existente";
    }
}

function deletar_curso($nome_curso)
{
    require_once('../config/connect.php');
    $smt_deletar_curso = $conexao->prepare("DELETE FROM curso WHERE nome_curso = :nome_curso");
    $smt_deletar_curso->bindValue(':nome_curso', $nome_curso);
    $smt_deletar_curso->execute();

    if ($smt_deletar_curso) {

        return "curso deletado com sucesso";
    } else {

        return "ERRO ao deletar o curso";
    }
}
