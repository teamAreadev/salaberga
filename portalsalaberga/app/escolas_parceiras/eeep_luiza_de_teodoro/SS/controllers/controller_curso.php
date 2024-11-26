<?php
if (isset($_POST['cadastrar_curso']) && isset($_POST['nome_curso']) && !empty($_POST['nome_curso']) && isset($_POST['cor_curso']) && !empty($_POST['cor_curso'])) {

    $nome_curso = $_POST['nome_curso'];
    $cor_curso = $_POST['cor_curso'];

    require_once('../models/cursos.php');
    $test = cadastrar_curso($nome_curso, $cor_curso);

    switch ($test) {

        case 1:
            header('location:../views/inicio_ADM.php?certo');
            break;
        case 2:
            header('location:../views/inicio_ADM.php?erro');
            break;
        case 3:
            header('location:../views/inicio_ADM.php?curso_existe');
            break;
        default:
            header('location:../views/inicio_ADM.php');
    }
} else {

    header('location:../views/inicio_ADM.php');
}
