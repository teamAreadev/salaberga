<?php

if (isset($_POST['curso']) && isset($_POST['tipo'])) {

    $curso = $_POST['curso'];
    $tipo = $_POST['tipo'];

    if ($curso == 1 && $tipo == 'classificados') {

        require_once('../views/resultados/classificados.php');
        classificados($curso);
    } else if ($curso == 2 && $tipo == 'classificados') {

        require_once('../views/resultados/classificados.php');
        lista_de_espera($curso);

    } else {
        header('location:../views/inicio.php');
    }
} else {
    header('location:../views/inicio.php');
}
