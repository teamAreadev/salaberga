<?php

if (isset($_POST['nome']) && isset($_POST['senha']) && isset($_POST['escola'])) {
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $escola = $_POST['escola'];

    switch ($escola) {

        case 'EEEP Professor Francisco':
            require_once('../escolas_parceiras/eeep_prof_francisco_aristoles/SS/models/model.php');
            $key = logar_escola($nome, $senha);

            if ($key == 1) {

                header('location:eeep_prof_francisco_aristoles/SS/views/inicio_ADM.php');
            } else if ($key == 0) {

                header('location:eeep_prof_francisco_aristoles/SS/views/inicio.php');
            } else if ($key == 2) {

                header('location:index.php?erro');
            } else {

                header('location:index.php?teste');
            }
            break;

        case 'EEEP Luiza de Teodoro':
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            header('Location: ./eeep_luiza_de_teodoro/controllers/autentica.php?email='.$email.'&senha='.$senha);
            
        case 'EEEP Antônio Valmir':
            require_once('../escolas_parceiras/eeep_antonio_valmir/SS/models/model.php');
            $key = logar_escola($nome, $senha);

            if ($key == 1) {

                header('location:eeep_antonio_valmir/SS/views/inicio_ADM.php');
            } else if ($key == 0) {

                header('location:eeep_antonio_valmir/SS/views/inicio.php');
            } else if ($key == 2) {

                header('location:index.php?erro');
            } else {

                header('location:index.php?teste');
            }
            break;

        case 'EEEP Maria Carmem':
            require_once('../escolas_parceiras/eeep_maria_carmem/SS/models/model.php');
            $key = logar_escola($nome, $senha);

            if ($key == 1) {

                header('location:eeep_maria_carmem/SS/views/inicio_ADM.php');
            } else if ($key == 0) {

                header('location:eeep_maria_carmem/SS/views/inicio.php');
            } else if ($key == 2) {

                header('location:index.php?erro');
            } else {

                header('location:index.php?teste');
            }
            break;

        default:

            header('location:index.php');
    }
}
