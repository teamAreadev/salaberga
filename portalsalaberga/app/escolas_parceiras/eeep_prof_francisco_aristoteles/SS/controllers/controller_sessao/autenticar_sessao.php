<?php
session_start();

// Desabilita cache
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");

// Pega o nome do arquivo atual
$current_page = basename($_SERVER['PHP_SELF']);

// Função para verificar se já está na página correta
function isCurrentPage($page)
{
    global $current_page;
    return $current_page === $page;
}

// Só redireciona se NÃO estiver na página correta
if (isset($_SESSION['login']) && $_SESSION['login'] && $_SESSION['status'] == 0) {
    if (!isCurrentPage('inicio.php') && !isCurrentPage('index.php')) {
        header('Location: ../views/inicio.php');
        exit();
    }
} else if (isset($_SESSION['login']) && $_SESSION['login'] && $_SESSION['status'] == 1) {
    if (!isCurrentPage('inicio_ADM.php') && !isCurrentPage('index.php')) {
        header('Location: ../views/inicio_ADM.php');
        exit();
    }
} else if (!isset($_SESSION['login']) || !$_SESSION['login']) {
    if (!isCurrentPage('login.php')) {
        header('Location: ../../../escolas_parceiras/index.php');
        exit();
    }
}
?>
