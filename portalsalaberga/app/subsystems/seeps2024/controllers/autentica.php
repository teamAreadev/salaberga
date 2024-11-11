<?php

if (isset($_POST['email']) && isset($_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])) {

    require_once('../models/model.php');
    $email = $_POST['email'];
    $password = $_POST['password'];

    $model = new model_usuario;
    $test = $model->logar($email, $password);

    switch ($test) {
        case 'certo':

            header('location:../views/inicio2.php');
            break;

        case 'erro':
            header('location:../index.php?erro');
            break;

        default:
            header('location:../index.php');
            break;
    }
} else {

    header('location:../index.php');
    exit();
}
