<?php

if (isset($_POST['curso']) && isset($_POST['tipo'])) {

    $curso = $_POST['curso'];
    $tipo = $_POST['tipo'];

    if ($curso == 1 && $tipo == 'clasificados') {

        header('location:../views/resultados/classificados/classificados_enfermagem');
    } else if ($curso == 2 && $tipo == 'clasificados') {

        header('location:../views/resultados/classificados/classificados_informatica');
    } else if ($curso == 3 && $tipo == 'clasificados') {

        header('location:../views/resultados/classificados/classificados_adm');
    } else if ($curso == 4 && $tipo == 'clasificados') {

        header('location:../views/resultados/classificados/classificaveis_edificacao');
    } else if ($curso == 1 && $tipo == 'clasificaveis') {

        header('location:../views/resultados/classificaveis/classificaveis_enfermagem');
    } else if ($curso == 2 && $tipo == 'clasificaveis') {

        header('location:../views/resultados/classificaveis/classificaveis_informatica');
    } else if ($curso == 3 && $tipo == 'clasificaveis') {

        header('location:../views/resultados/classificaveis/classificaveis_adm');
    } elseif ($curso == 4 && $tipo == 'clasificaveis') {

        header('location:../views/resultados/classificaveis/classificaveis_edificacao');
    } else {
        header('location:../views/inicio.php');
    }
}
