<?php

if (isset($_POST['curso']) && isset($_POST['tipo'])) {

    $curso = $_POST['curso'];
    $tipo = $_POST['tipo'];

    if ($curso == 1 && $tipo == 'classificados') {

        header('location:../views/resultados/classificados/classificados_enfermagem.php');
    } else if ($curso == 2 && $tipo == 'classificados') {

        header('location:../views/resultados/classificados/classificados_informatica.php');
    } else if ($curso == 3 && $tipo == 'classificados') {

        header('location:../views/resultados/classificados/classificados_adm.php');
    } else if ($curso == 4 && $tipo == 'classificados') {

        header('location:../views/resultados/classificados/classificados_edificacao.php');
    } else if ($curso == 1 && $tipo == 'classificaveis') {

        header('location:../views/resultados/classificaveis/classificaveis_enfermagem.php');
    } else if ($curso == 2 && $tipo == 'classificaveis') {

        header('location:../views/resultados/classificaveis/classificaveis_informatica.php');
    } else if ($curso == 3 && $tipo == 'classificaveis') {

        header('location:../views/resultados/classificaveis/classificaveis_adm.php');
    } elseif ($curso == 4 && $tipo == 'classificaveis') {

        header('location:../views/resultados/classificaveis/classificaveis_edificacao.php');
    } else {
        header('location:../views/inicio.php');
    }
} else {
    header('location:../views/inicio.php');
}
