<?php
if (isset($_POST['nome_curso']) && isset($_POST['cor_curso']) && !empty($_POST['nome_curso']) && !empty($_POST['cor_curso'])) {

    $nome_curso = $_POST['nome_curso'];
    $cor_curso = $_POST['cor_curso'];

    require_once('../models/cursos.php');
    $test = cadastrar_curso($nome_curso, $cor_curso);

    if ($test) {

        header('location:../views/inicio_ADM.php?certo');
    } else {

        header('location:../views/inicio_ADM.php?erro');
    }
}
