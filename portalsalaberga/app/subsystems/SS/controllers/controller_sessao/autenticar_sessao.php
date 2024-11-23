<?php
session_start();

// Pega o nome do arquivo atual
$current_page = basename($_SERVER['PHP_SELF']);

// Função para verificar se já está na página correta
function isCurrentPage($page)
{
    global $current_page;
    return $current_page === $page;
}

// Só redireciona se NÃO estiver na página correta
if (isset($_SESSION['login']) && $_SESSION['login']) {
    if (!isCurrentPage('inicio.php')) {
        header('Location: inicio.php');
        exit();
    }
}
?>