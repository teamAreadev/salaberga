<?php
if(isset($_POST['nome'])){

  $nome = $_POST['nome'];

  require_once('../models/model.php');
  $nome = notas($nome);

  header('location:../atualizar_nota.php?nome='. $nome);
}
//requerindo o arquivo model.php
require_once('../models/model.php');

