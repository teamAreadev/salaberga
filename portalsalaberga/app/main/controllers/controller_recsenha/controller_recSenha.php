<?php
if (isset($_POST['recsenha']) && isset($_POST['Email']) && !empty($_POST['Email'])) {

    $email = $_POST['Email'];

    require('../../models/model_dados.php');
    recSenha($email);
}
