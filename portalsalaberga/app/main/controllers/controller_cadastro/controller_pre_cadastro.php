<?php

if (isset($_POST['pre_cadastro']) && isset($_POST['preemail']) && isset($_POST['precpf']) && !empty($_POST['preemail']) && !empty($_POST['precpf'])) {

    $email = $_POST['preemail'];
    $cpf = $_POST['precpf'];

    require('../../models/model_cadastro.php');
    pre_cadastro($email, $cpf);
    
} else {
    header('location:../../views/autenticação/precadastro.php');
}

if (isset($_GET['certo'])) {
    header('location:../../views/autenticação/cadastro.php');
    
}
if (isset($_GET['erro'])) {
    header('location:../../views/autenticação/precadastro.php?erro');
}
