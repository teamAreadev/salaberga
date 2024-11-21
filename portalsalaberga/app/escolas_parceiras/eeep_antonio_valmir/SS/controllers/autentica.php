<?php

//se existe um POST email e password e não estiver vazio o POST email e password
if (isset($_POST['email']) && isset($_POST['senha']) && !empty($_POST['email']) && !empty($_POST['senha'])) {

    //requerindo o arquivo model.php
    require_once('../models/model.php');

    //criando as variaveis
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //criando o objeto model
    //criando a variavel test para chamar a função logar
    $login = logar($email, $senha);

    switch ($login) {
        //caso a variavel fosse igual a certo
        case 1:

            header('location:../views/inicio.php');
            exit();

        //caso a variavel fosse igual a erro
        case 0:
            header('location:../index.php?erro');
            exit();
    }
}

