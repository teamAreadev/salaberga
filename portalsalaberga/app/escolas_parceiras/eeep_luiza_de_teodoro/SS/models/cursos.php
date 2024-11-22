<?php 

function cursos(){

    require_once('../config/connect.php');
    $result_curso = $conexao->prepare("SELECT nome_curso FROM curso");
    $result_curso->execute();

    return $tabela_curso = $result_curso->fetchAll(PDO::FETCH_ASSOC);
}
?>