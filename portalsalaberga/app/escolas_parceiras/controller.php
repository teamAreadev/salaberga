<?php

if (isset($_POST['nome']) && isset($_POST['senha']) && isset($_POST['escola']) ){
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $escola = $_POST['escola'];

     if ($escola == 'EEEP Gonzaga Mota'){
        require_once('../escolas_parceiras/eeep_gonzaga_mota/SS/models/model.php');
        logar($nome, $senha);
     } else
     if ($escola == 'EEEP Luiza de Teodoro'){
         require_once('../escolas_parceiras/eeep_luiza_teodoro/SS/models/model.php');
         logar($nome, $senha);
     } else
     if ($escola == 'EEEP Antônio Valmir'){
         require_once('../escolas_parceiras/eeep_antonio_valmir/SS/models/model.php');
         logar($nome, $senha);
     } 


}
