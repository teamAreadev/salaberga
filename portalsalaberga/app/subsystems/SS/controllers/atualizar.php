<?php
//requerindo o arquivo model.php
require_once('../models/model.php');
//função para transforma todos os numeros que tem virgula em número
function virg($num)
{
  if (count(explode(',', $num)) > 0) {
    $num = str_replace(',', '.', $num);
  }
  return $num;
}

//criando as variaveis com as função virg
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

//fazendo a media de todas as notas
$md = ($lp + $ar + $ef + $li + $ma + $ci + $ge + $hi + $re) / 9;

//chamando a função atualizar
$cand->atualizar($lp, $ar, $ef, $li, $ma, $ci, $ge, $hi, $re, $md, $id);
