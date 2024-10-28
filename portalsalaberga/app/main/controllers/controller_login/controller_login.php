<?php

if (isset($_POST['login']) && isset($_POST['Email']) && isset($_POST['Password']) && !empty($_POST['Email']) && !empty($_POST['Password'])) {

    $email = $_POST['Email'];
    $senha = $_POST['Password'];
    
    require_once('../../models/model_dados.php');
    login($email, $senha);
}
