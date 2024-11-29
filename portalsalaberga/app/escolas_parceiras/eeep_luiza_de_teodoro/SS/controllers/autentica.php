<?php

//se existe um POST email e password e não estiver vazio o POST email e password
if (isset($_GET['email']) && isset($_GET['senha']) && !empty($_GET['email']) && !empty($_GET['senha'])) {

    //requerindo o arquivo model.php
    
    //criando as variaveis
    $email = $_GET['email'];
    $senha = $_GET['senha'];
    
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
    
