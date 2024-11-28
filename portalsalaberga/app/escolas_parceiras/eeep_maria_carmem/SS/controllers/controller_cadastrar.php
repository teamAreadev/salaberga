<?php

if (isset($_POST['nomeC']) && isset($_POST['UserName']) && isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['status']) && isset($_POST['cargo'])){
    $nomeC = $_POST['nomeC'];
    $userName = $_POST['UserName'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $status = $_POST['status'];
    $cargo = $_POST['cargo'];
    require_once('../models/model.php');
    cadastrarUsuario($nomeC, $userName, $email, $senha, $status, $cargo);
}