<?php

require_once('../models/model.php');

//cadastro
if (isset($oi)) {

    function virg($num)
    {
        if (count(explode(',', $num)) > 0) {
            $num = str_replace(',', '.', $num);
        }
        return $num;
    }

    // Criar uma instância da classe Candidato
    $candidato = new Candidato();
    // Chamar o método pesquisarCotas()
    $candidato->pesquisarCotas();


    $nome = $_POST['nome'];
    $dn = $_POST['dn'];
    $c1 = $_POST['c1'];
    $c2 = 1;
    $bairro = $_POST['bairro'];
    $publica = $_POST['publica'];

    $lp6 = virg($_POST['lp6']);
    $ar6 = virg($_POST['ar6']);
    $ef6 = virg($_POST['ef6']);
    $li6 = virg($_POST['li6']);
    $ma6 = virg($_POST['ma6']);
    $ci6 = virg($_POST['ci6']);
    $ge6 = virg($_POST['ge6']);
    $hi6 = virg($_POST['hi6']);
    $re6 = virg($_POST['re6']);

    $lp7 = virg($_POST['lp7']);
    $ar7 = virg($_POST['ar7']);
    $ef7 = virg($_POST['ef7']);
    $li7 = virg($_POST['li7']);
    $ma7 = virg($_POST['ma7']);
    $ci7 = virg($_POST['ci7']);
    $ge7 = virg($_POST['ge7']);
    $hi7 = virg($_POST['hi7']);
    $re7 = virg($_POST['re7']);

    $lp8 = virg($_POST['lp8']);
    $ar8 = virg($_POST['ar8']);
    $ef8 = virg($_POST['ef8']);
    $li8 = virg($_POST['li8']);
    $ma8 = virg($_POST['ma8']);
    $ci8 = virg($_POST['ci8']);
    $ge8 = virg($_POST['ge8']);
    $hi8 = virg($_POST['hi8']);
    $re8 = virg($_POST['re8']);

    $lp9 = virg($_POST['lp9']);
    $ar9 = virg($_POST['ar9']);
    $ef9 = virg($_POST['ef9']);
    $li9 = virg($_POST['li9']);
    $ma9 = virg($_POST['ma9']);
    $ci9 = virg($_POST['ci9']);
    $ge9 = virg($_POST['ge9']);
    $hi9 = virg($_POST['hi9']);
    $re9 = virg($_POST['re9']);

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

    $cand = new candidato();
    $cand->cadastrar($nome, $c1, $c2, $dn, $lp, $ar, $ef, $li, $ma, $ci, $ge, $hi, $re, $bairro, $publica, $media);
} else {

    header('location:../inicio2.php');
    exit();
}
