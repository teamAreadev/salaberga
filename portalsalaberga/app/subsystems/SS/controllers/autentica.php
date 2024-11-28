<?php
session_start();
//se existe um POST email e password e não estiver vazio o POST email e password
if (isset($_POST['nome']) && isset($_POST['senha']) && !empty($_POST['nome']) && !empty($_POST['senha'])) {

    //requerindo o arquivo model.php
    
    //criando as variaveis
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    
    //criando a variavel test para chamar a função logar
    require_once('../models/model.php');
    $login = logar($nome, $senha);
    switch ($login) {
        //caso a variavel fosse igual a certo
        case 0:
        case 1:
            if ($login == 1){
            header('location:../views/inicio_ADM.php');
            exit();
            } else if ($login == 0){
            header('location:../views/inicio.php');
            exit();
            }
        //caso a variavel fosse igual a erro
        case 2:
            header('location:../index.php?erro');
            exit();
    }
}

if (isset($_GET['sair'])) {
    
    // Destroi todas as sessões
    session_unset();
    header('Location: ../index.php');
    exit();
}
    
