<?php
if (isset($_POST['id'])) {

  $id = $_POST['id'];

  require_once('../models/model.php');
  $result = notas($id);

  if(isset($_POST['erro']) && $_POST['erro'] == 1){
    header('Location: ../views/inicio_ADM.php?erro=1');
  }
} 

 

