<?php

session_start();

if (isset($_SESSION['precadastro']) && $_SESSION['precadastro']){
    header('Location: ../autenticação/cadastro.php');
    exit();
} else if (isset($_SESSION['login']) && $_SESSION['login'] && isset($_SESSION['aluno']) && $_SESSION['aluno']){
    header('Location: ../aluno/subsistema_aluno.php');
    exit();
} else if (isset($_SESSION['login']) && $_SESSION['login'] && isset($_SESSION['professor']) && $_SESSION['professor']){
    header('Location: ../professor/subsistema_professor.php');
    exit();
} else {
    header('Location: ../autenticação/precadastro.php?erro');
    exit();
}

?>