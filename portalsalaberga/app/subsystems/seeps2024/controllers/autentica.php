<?php

//se existe um POST email e password e não estiver vazio o POST email e password
if (isset($_POST['email']) && isset($_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])) {

    //requerindo o arquivo model.php
    require_once('../models/model.php');

    //criando as variaveis
    $email = $_POST['email'];
    $password = $_POST['password'];

    //criando o objeto model
    //criando a variavel test para chamar a função logar
    $test = logar($email, $password);

    switch ($test) {
        //caso a variavel fosse igual a certo
        case 'certo':

            header('location:../views/inicio.php');
            break;

        //caso a variavel fosse igual a erro
        case 'erro':
            header('location:../index.php?erro');
            break;

        default:
            header('location:../index.php');
            break;
    }
} else {

    //se não
    header('location:../index.php');
    exit();
}
