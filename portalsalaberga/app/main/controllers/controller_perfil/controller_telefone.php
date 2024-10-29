<?php
 if (isset($_POST['Telefone']) && !empty($_POST['Telefone'])){
    $telefone = $_POST['Telefone'];
    require_once('../../models/model_dados.php');
    alterarTelefone($telefone);
 }
?>