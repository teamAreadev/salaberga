<?php

if(isset($_POST['nome']) && isset($_POST['senha'])){
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    require_once('model.php');
    logar($nome, $senha);
}