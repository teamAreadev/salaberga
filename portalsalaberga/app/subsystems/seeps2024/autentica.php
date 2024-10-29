<?php
require_once('pdoClass/usuario.class.php');
$email = $_POST['email'];
$senha = $_POST['senha'];
$obj = new Usuario();
$obj->logar($email,$senha);
?>
