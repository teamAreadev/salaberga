<?php
session_start();
//se existe um POST email e password e não estiver vazio o POST email e password
if (isset($_POST['email']) && isset($_POST['senha']) && !empty($_POST['email']) && !empty($_POST['senha'])) {

    //requerindo o arquivo model.php
    
    //criando as variaveis
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    //criando a variavel test para chamar a função logar
    require_once('../models/model.php');
    $login = logar($email, $senha);
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
            header('Location: ../../../main/views/autenticação/login.php');
            exit();
    }
}

if (isset($_GET['sair'])) {
    
    // Destroi todas as sessões
    session_unset();
    session_destroy();
    header('Location: ../../../main/views/autenticacao/login.php');
    exit();
}
    
