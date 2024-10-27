<?php 

if(isset($_POST['pre_cadastro']) && isset($_POST['precpf']) && isset($_POST['preemail']) && !empty($_POST['precpf']) && !empty($_POST['preemail'])){

    $email = $_POST['preemail'];
    $cpf = $_POST['precpf'];

    require_once('../../models/model.php');
    pre_cadastro($email, $cpf);
}else{
    header('location:../../views/autenticação/precadastro.php');
}
?>