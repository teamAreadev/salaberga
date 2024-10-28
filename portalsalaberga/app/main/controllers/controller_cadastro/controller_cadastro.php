<?php
<<<<<<< Updated upstream
    
if(isset($_POST['cadastrar']) && isset($_POST['UserName']) && isset($_POST['Cpf']) && isset($_POST['Email']) && isset($_POST['Senha']) && !empty($_POST['UserName']) && !empty($_POST['Cpf']) && !empty($_POST['Email']) && !empty($_POST['Senha'])){
=======

//matenha este if aqui se não irá ocorrer erro de lógica
if (isset($_GET['erro1'])) {
    header('location:../../views/autenticação/cadastro.php?login=erro1');
    exit();
}
//matenha este if aqui se não irá ocorrer erro de lógica
if (isset($_GET['erro2'])) {
    header('location:../../views/autenticação/cadastro.php?login=erro2');
    exit();
}


if (isset($_POST['cadastrar']) && isset($_POST['UserName']) && isset($_POST['Cpf']) && isset($_POST['Email']) && isset($_POST['Password']) && !empty($_POST['UserName']) && !empty($_POST['Cpf']) && !empty($_POST['Email']) && !empty($_POST['Password'])) {
>>>>>>> Stashed changes

    $nome = $_POST['UserName'];
    $cpf = $_POST['Cpf'];
    $email = $_POST['Email'];
    $senha = $_POST['Senha'];

    require_once('../../models/model_cadastro2.php');
    cadastrar($nome, $cpf, $email, $senha);
<<<<<<< Updated upstream
  
  
}else {
    header('location:../../views/autenticação/cadastro.php');
=======
} else {
    header('location:../../views/autenticação/cadastro.php?erro1');
>>>>>>> Stashed changes
    exit();
}
?>
