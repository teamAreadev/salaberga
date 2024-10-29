<?php

if (isset($_GET['login']) && $_GET['login'] == 'a') {
    header('Location: ../../views/aluno/subsistema_aluno.php');
    exit();
} else if (isset($_GET['login']) && $_GET['login'] == 'p') {
    header('Location: ../../views/professor/subsistema_professor.php');
    exit();
}

if (isset($_POST['login']) && isset($_POST['Email']) && isset($_POST['Password']) && !empty($_POST['Email']) && !empty($_POST['Password'])) {

    $email = $_POST['Email'];
    $senha = $_POST['Password'];
    require_once('../../models/model_dados.php');
    login($email, $senha);

} else {
    header('Location: ../../views/autenticação/login.php?login=erro');
    exit();
}
?>