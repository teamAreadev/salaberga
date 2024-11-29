<?php
if (isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['escola'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $escola = $_POST['escola'];

    switch ($escola) {

        case 'EEEP Professor Francisco':
            require_once('../escolas_parceiras/eeep_prof_francisco_aristoteles/SS/models/model.php');
            $key = logar($email, $senha);

            switch ($key) {
                case 0:
                case 1:
                    if ($key == 1) {
                        header('location:eeep_prof_francisco_aristoteles/SS/views/inicio_ADM.php');
                        exit();
                    } else if ($key == 0) {
                        header('location:eeep_prof_francisco_aristoteles/SS/views/inicio.php');
                        exit();
                    }
                case 2:
                    header('location:index.php?erro');
                    exit();
            }
            break;

        case 'EEEP Luiza de Teodoro':
            require_once('../escolas_parceiras/eeep_luiza_de_teodoro/SS/models/model.php');
            $key = logar($email, $senha);

            switch ($key) {
                case 0:
                case 1:
                    if ($key == 1) {
                        header('location:eeep_luiza_de_teodoro/SS/views/inicio_ADM.php');
                        exit();
                    } else if ($key == 0) {
                        header('location:eeep_luiza_de_teodoro/SS/views/inicio.php');
                        exit();
                    }
                    //caso a variavel fosse igual a erro
                case 2:
                    header('location:index.php?erro');
                    exit();
            }
            break;
            
        case 'EEEP Antônio Valmir':
            require_once('../escolas_parceiras/eeep_antonio_valmir/SS/models/model.php');
            $key = logar($email, $senha);

            switch ($key) {
                case 0:
                case 1:
                    if ($key == 1) {
                        header('location:eeep_antonio_valmir/SS/views/inicio_ADM.php');
                        exit();
                    } else if ($key == 0) {
                        header('location:eeep_antonio_valmir/SS/views/inicio.php');
                        exit();
                    }
                    //caso a variavel fosse igual a erro
                    break;
                case 2:
                    header('location:index.php?erro');
                    exit();
            }
            break;

        case 'EEEP Maria Carmem':
            require_once('../escolas_parceiras/eeep_maria_carmem/SS/models/model.php');
            $key = logar($email, $senha);

            switch ($key) {
                case 0:
                case 1:
                    if ($key == 1) {
                        header('location:eeep_maria_carmem/SS/views/inicio_ADM.php');
                        exit();
                    } else if ($key == 0) {
                        header('location:eeep_maria_carmem/SS/views/inicio.php');
                        exit();
                    }
                    //caso a variavel fosse igual a erro
                case 2:
                    header('location:index.php?erro');
                    exit();
            }
            break;

        default:

            header('location:index.php');
    }
}
