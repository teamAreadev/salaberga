<?php 

if(isset($_POST['recsenha']) && isset($_POST['phpemail']) && !empty($_POST['phpemail'])){

    $email = $_POST['phpemail'];

    require('../../models/model_dados.php');
    recSenha($email);
}
?>