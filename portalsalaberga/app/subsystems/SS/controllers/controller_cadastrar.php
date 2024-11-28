<?php

if (isset($_POST['nomeC']) && isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['status'])){
    
    $nomeC = $_POST['nomeC'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $status = $_POST['status'];
    require_once('../models/model.php');
    cadastrarUsuario($nomeC, $email, $senha, $status);
}