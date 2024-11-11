


<?php

require_once('candidato.class.php');
    function virg($num){
        if(count(explode(',', $num)) > 0){
          $num = str_replace(',', '.', $num);
        }
      return $num;
    }
  


$id = $_POST['id'];

$lp = virg($_POST['lp']);
$ar = virg($_POST['ar']);
$ef = virg($_POST['ef']);
$li = virg($_POST['li']);
$ma = virg($_POST['ma']);
$ci = virg($_POST['ci']);
$ge = virg($_POST['ge']);
$hi = virg($_POST['hi']);
$re = virg($_POST['re']);

$md = ($lp+$ar+$ef+$li+$ma+$ci+$ge+$hi+$re)/9;

$cand = new candidato();
$cand->atualizar($lp, $ar, $ef, $li, $ma, $ci, $ge, $hi, $re, $md, $id);



?>


