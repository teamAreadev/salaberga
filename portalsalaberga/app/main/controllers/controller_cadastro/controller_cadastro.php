<?php
    
if(isset($_POST['cadastrar']) && isset($_POST['UserName']) && isset($_POST['Cpf']) && isset($_POST['Email']) && isset($_POST['Senha']) && !empty($_POST['UserName']) && !empty($_POST['Cpf']) && !empty($_POST['Email']) && !empty($_POST['Senha'])){

    $nome = $_POST['UserName'];
    $cpf = $_POST['Cpf'];
    $email = $_POST['Email'];
    $senha = $_POST['Senha'];

    require_once('../../models/model_cadastro.php');
    cadastrar($nome, $cpf, $email, $senha);
  
  
}else {
    header('location:../../views/autenticação/cadastro.php');
    exit();
}
?>
