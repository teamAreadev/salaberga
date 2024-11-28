<?php
if (isset($_POST['ID'])) {

  $ID = $_POST['ID'];

  require_once('../models/model.php');
  $fetch = notas($ID);

  header('location:../views/atualizar_nota.php?fetch=' . $fetch);
} 

 

