<?php

/*echo "<pre>";
echo print_r($_POST);
echo "<pre>";
*/
//cadastro
function virg($num)
{
    if (count(explode(',', $num)) > 0) {
        $num = str_replace(',', '.', $num);
    }
    return $num;
}

if (!isset($_POST["pcd"])) {
    $pcd = 0;
} else {
    $pcd = $_POST["pcd"];
}

$nome = $_POST['nome'];
$dn = $_POST['nasc'];

switch ($_POST['curso']) {

    case 'Enfermagem':

        $c1 = 1;
        break;
    case 'Informatica':

        $c1 = 2;
        break;
    case 'Administraçao':

        $c1 = 3;
        break;
    case 'Edificaçoes':

        $c1 = 4;
        break;
};

switch ($_POST['publica']) {

    case 'Escola Pública':

        $publica = 1;
        break;
    case 'Escola Particular':

        $publica = 0;
        break;
};


$c2 = 1;
$bairro = $_POST['bairro'];



$lp6 = virg($_POST['lp6']);
$ar6 = virg($_POST['a6']);
$ef6 = virg($_POST['ef6']);
$li6 = virg($_POST['i6']);
$ma6 = virg($_POST['m6']);
$ci6 = virg($_POST['c6']);
$ge6 = virg($_POST['g6']);
$hi6 = virg($_POST['h6']);
$re6 = virg($_POST['r6']);

$lp7 = virg($_POST['lp7']);
$ar7 = virg($_POST['a7']);
$ef7 = virg($_POST['ef7']);
$li7 = virg($_POST['i7']);
$ma7 = virg($_POST['m7']);
$ci7 = virg($_POST['c7']);
$ge7 = virg($_POST['g7']);
$hi7 = virg($_POST['h7']);
$re7 = virg($_POST['r7']);

$lp8 = virg($_POST['lp8']);
$ar8 = virg($_POST['a8']);
$ef8 = virg($_POST['ef8']);
$li8 = virg($_POST['i8']);
$ma8 = virg($_POST['m8']);
$ci8 = virg($_POST['c8']);
$ge8 = virg($_POST['g8']);
$hi8 = virg($_POST['h8']);
$re8 = virg($_POST['r8']);

$lp9 = virg($_POST['lp9']);
$ar9 = virg($_POST['a9']);
$ef9 = virg($_POST['ef9']);
$li9 = virg($_POST['i9']);
$ma9 = virg($_POST['m9']);
$ci9 = virg($_POST['c9']);
$ge9 = virg($_POST['g9']);
$hi9 = virg($_POST['h9']);
$re9 = virg($_POST['r9']);

$lp = ($lp6 + $lp7 + $lp8 + $lp9) / 4;
$ar = ($ar6 + $ar7 + $ar8 + $ar9) / 4;
$ef = ($ef6 + $ef7 + $ef8 + $ef9) / 4;
$li = ($li6 + $li7 + $li8 + $li9) / 4;
$ma = ($ma6 + $ma7 + $ma8 + $ma9) / 4;
$ci = ($ci6 + $ci7 + $ci8 + $ci9) / 4;
$ge = ($ge6 + $ge7 + $ge8 + $ge9) / 4;
$hi = ($hi6 + $hi7 + $hi8 + $hi9) / 4;
$re = ($re6 + $re7 + $re8 + $re9) / 4;


$media = ($lp + $ar + $ef + $li + $ma + $ci + $ge + $hi + $re) / 9;


require_once('../models/model.php');
$model = new model_usuario();
$test = $model->cadastrar($nome, $c1, $c2, $dn, $lp, $ar, $ef, $li, $ma, $ci, $ge, $hi, $re, $bairro, $publica, $pcd, $media);

switch ($test) {
    case 'candidato cadastrado com sucesso':

        header('location:../views/success.php');
        break;

    case 'ERRO ao cadastrar a nota':

        header('location:../views/inicio.php?erro_nota');
        break;

    case 'ERRO ao cadastrar o candidato':

        header('location:../views/inicio.php?erro_candidato');
        break;
    default:

        header('location:../views/inicio.php');
        break;
}
