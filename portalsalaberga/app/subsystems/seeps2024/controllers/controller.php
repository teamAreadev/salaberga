<?php

//cadastro
function virg($num)
{
    if (count(explode(',', $num)) > 0) {
        $num = str_replace(',', '.', $num);
    }
    return $num;
}

//Lógica para POST Pcd
if (!isset($_POST["pcd"])) {
    $pcd = 0;
} else {
    $pcd = $_POST["pcd"];
}

$c2 = 1;
$nome = $_POST['nome'];
$dn = $_POST['nasc'];

//Lógica para o Post Curso
switch ($_POST['curso']) {

    case 'Enfermagem':

        $c1 = 1;
        break;
    case 'Informatica':

        $c1 = 2;
        break;
    case 'Administracao':

        $c1 = 3;
        break;
    case 'Edificacoes':

        $c1 = 4;
        break;
};

//Lógica para o Post Escola
switch ($_POST['publica']) {

    case 'Escola Pública':

        $publica = 1;
        break;
    case 'Escola Privada':

        $publica = 0;
        break;
};


//Lógica para o Post de Bairros
switch ($_POST['bairro']) {

    case 'Outros Bairros':

        $bairro = '0';
        break;
    case 'Outra Banda':

        $bairro = '1';
        break;
};

//Variável para dividir as notas de Ed Física


//6° ano

if(!isset($_POST['ef6'])){
    $ef6 = 1;

} else {
    $ef6 = $_POST['ef6'];
}

$lp6 = virg($_POST['lp6']);
$ar6 = virg($_POST['a6']);
$li6 = virg($_POST['i6']);
$ma6 = virg($_POST['m6']);
$ci6 = virg($_POST['c6']);
$ge6 = virg($_POST['g6']);
$hi6 = virg($_POST['h6']);
$re6 = virg($_POST['r6']);

//7° ano
if(!isset($_POST['ef7'])){
    $ef7 = 1;

} else {
    $ef7 = $_POST['ef7'];
}


$lp7 = virg($_POST['lp7']);
$ar7 = virg($_POST['a7']);
$li7 = virg($_POST['i7']);
$ma7 = virg($_POST['m7']);
$ci7 = virg($_POST['c7']);
$ge7 = virg($_POST['g7']);
$hi7 = virg($_POST['h7']);
$re7 = virg($_POST['r7']);

//8° ano

if(!isset($_POST['ef8'])){
    $ef8 = 1;

} else {
    $ef8 = $_POST['ef8'];
}


$lp8 = virg($_POST['lp8']);
$ar8 = virg($_POST['a8']);
$li8 = virg($_POST['i8']);
$ma8 = virg($_POST['m8']);
$ci8 = virg($_POST['c8']);
$ge8 = virg($_POST['g8']);
$hi8 = virg($_POST['h8']);
$re8 = virg($_POST['r8']);

//9° ano
if(!isset($_POST['ef9'])){
    $ef9 = 1;

} else {
    $ef9 = $_POST['ef9'];
}


$lp9 = virg($_POST['lp9']);
$ar9 = virg($_POST['a9']);
$li9 = virg($_POST['i9']);
$ma9 = virg($_POST['m9']);
$ci9 = virg($_POST['c9']);
$ge9 = virg($_POST['g9']);
$hi9 = virg($_POST['h9']);
$re9 = virg($_POST['r9']);

//Média de todos os anos
$ef = ((float)$ef6 + (float)$ef7 + (float)$ef8 + (float)$ef9) / 4;
$lp = ($lp6 + $lp7 + $lp8 + $lp9) / 4;
$ar = ($ar6 + $ar7 + $ar8 + $ar9) / 4;
$li = ($li6 + $li7 + $li8 + $li9) / 4;
$ma = ($ma6 + $ma7 + $ma8 + $ma9) / 4;
$ci = ($ci6 + $ci7 + $ci8 + $ci9) / 4;
$ge = ($ge6 + $ge7 + $ge8 + $ge9) / 4;
$hi = ($hi6 + $hi7 + $hi8 + $hi9) / 4;
$re = ($re6 + $re7 + $re8 + $re9) / 4;


echo '</br>Média em ed Física foi</br>' . $ef;


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
