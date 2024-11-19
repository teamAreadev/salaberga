<?php

//requerindo o arquivo connect.php


//criando a class model_usuario sendo herdada da class connect


    //metodos
   function cadastrar($nome, $c1, $c2, $dn, $lp, $ar, $ef, $li, $ma, $ci, $ge, $hi, $re, $bairro, $publica, $pcd, $media)
{
    require_once('../config/connect.php');
    
    $result_cadastrar_candidato = $conexao->prepare("INSERT INTO candidato VALUES(NULL, :nome, :id_curso1_fk, :id_curso2_fk, :data_nascimento, :bairro, :publica, :pcd, 0, NULL)");
    $result_cadastrar_candidato->bindValue(':nome', $nome);
    $result_cadastrar_candidato->bindValue(':id_curso1_fk', $c1);
    $result_cadastrar_candidato->bindValue(':id_curso2_fk', $c2);
    $result_cadastrar_candidato->bindValue(':data_nascimento', $dn);
    $result_cadastrar_candidato->bindValue(':bairro', $bairro);
    $result_cadastrar_candidato->bindValue(':publica', $publica);
    $result_cadastrar_candidato->bindValue(':pcd', $pcd);
    $result_cadastrar_candidato->execute();

    $id_candidato = $conexao->lastInsertId();

    $result_cadastrar_nota = $conexao->prepare("INSERT INTO nota VALUES(:l_portuguesa, :arte, :educacao_fisica, :l_inglesa, :matematica, :ciencias, :geografia, :historia, :religiao, :candidato_id_candidato, :media )");
    $result_cadastrar_nota->BindValue(':l_portuguesa', $lp);
    $result_cadastrar_nota->BindValue(':arte', $ar);
    $result_cadastrar_nota->BindValue(':educacao_fisica', $ef);
    $result_cadastrar_nota->BindValue(':l_inglesa', $li);
    $result_cadastrar_nota->BindValue(':matematica', $ma);
    $result_cadastrar_nota->BindValue(':ciencias', $ci);
    $result_cadastrar_nota->BindValue(':geografia', $ge);
    $result_cadastrar_nota->BindValue(':historia', $hi);
    $result_cadastrar_nota->BindValue(':religiao', $re);
    $result_cadastrar_nota->BindValue(':candidato_id_candidato', $id_candidato);
    $result_cadastrar_nota->BindValue(':media', $media);
    $result_cadastrar_nota->execute();

    if ($result_cadastrar_candidato && $result_cadastrar_nota) {
        return "candidato cadastrado com sucesso";
    } elseif ($result_cadastrar_candidato) {
        return "ERRO ao cadastrar a nota";
    } elseif ($result_cadastrar_nota) {
        return "ERRO ao cadastrar o candidato";
    }
}


    function cadastrar2($nome, $c1, $c2, $dn, $lp, $ar, $li, $ma, $ci, $ge, $hi, $re, $bairro, $publica, $pcd, $media)
    {

        //inserido na tabela candidato os dados do candidato
        $result_cadastrar_candidato = $this->connect->prepare("INSERT INTO candidato VALUES(NULL, :nome, :id_curso1_fk, :id_curso2_fk, :data_nascimento, :bairro, :publica, :pcd, 0, NULL)");
        $result_cadastrar_candidato->bindValue(':nome', $nome);
        $result_cadastrar_candidato->bindValue(':id_curso1_fk', $c1);
        $result_cadastrar_candidato->bindValue(':id_curso2_fk', $c2);
        $result_cadastrar_candidato->bindValue(':data_nascimento', $dn);
        $result_cadastrar_candidato->bindValue(':bairro', $bairro);
        $result_cadastrar_candidato->bindValue(':publica', $publica);
        $result_cadastrar_candidato->bindValue(':pcd', $pcd);
        $result_cadastrar_candidato->execute();

        //procurando na tabela candidato o nome do candidato
        $result_check_id = $this->connect->prepare("SELECT * FROM candidato WHERE nome = :nome");
        $result_check_id->bindValue(':nome', $nome);
        $result_check_id->execute();
        $dados = $result_check_id->fetchAll();
        foreach ($dados as $value => $x) {

            $id_candidato = $x['id_candidato'];
        }

        //inserindo na tabela nota, as notas do candidato cadastrado
        $result_cadastrar_nota = $this->connect->prepare("INSERT INTO nota VALUES(:l_portuguesa, :arte, NULL, :l_inglesa, :matematica, :ciencias, :geografia, :historia, :religiao, :candidato_id_candidato, :media )");
        $result_cadastrar_nota->BindValue(':l_portuguesa', $lp);
        $result_cadastrar_nota->BindValue(':arte', $ar);
        $result_cadastrar_nota->BindValue(':l_inglesa', $li);
        $result_cadastrar_nota->BindValue(':matematica', $ma);
        $result_cadastrar_nota->BindValue(':ciencias', $ci);
        $result_cadastrar_nota->BindValue(':geografia', $ge);
        $result_cadastrar_nota->BindValue(':historia', $hi);
        $result_cadastrar_nota->BindValue(':religiao', $re);
        $result_cadastrar_nota->BindValue(':candidato_id_candidato', $id_candidato);
        $result_cadastrar_nota->BindValue(':media', $media);
        $result_cadastrar_nota->execute();

        if ($result_cadastrar_candidato && $result_cadastrar_nota) {

            return "candidato cadastrado com sucesso";
        } elseif ($result_cadastrar_candidato) {

            return "ERRO ao cadastrar a nota";
        } elseif ($result_cadastrar_nota) {

            return "ERRO ao cadastrar o candidato";
        }
    }

    function logar($email, $password)
    {
        require_once('../config/connect.php');
        //verificando se os dados estão no sistema 
        $result_logar = $conexao->prepare("SELECT * FROM usuario WHERE email = :email AND senha = :senha");
        $result_logar->bindValue(':email', $email);
        $result_logar->bindValue(':senha', $password);
        $result_logar->execute();

        //se for o result_logar for maior que 0
        if ($result_logar->rowCount() > 0) {

            return "certo";
        } else {

            //se nao
            return "erro";
        }
    }

    function atualizar($lp, $ar, $ef, $li, $ma, $ci, $ge, $hi, $re, $md, $id)
    {
        require_once('../config/connect.php');
        //atualizando as notas do candidato
        $consulta = $conexao->prepare("UPDATE nota SET l_portuguesa=:lp, arte=:ar, educacao_fisica=:ef, l_inglesa=:li, matematica=:ma, ciencias=:ci, geografia=:ge, historia=:hi, religiao=:re, media=:md WHERE candidato_id_candidato = :id;");

        $consulta->BindValue(':l_portuguesa', $lp);
        $consulta->BindValue(':arte', $ar);
        $consulta->BindValue(':educacao_fisica', $ef);
        $consulta->BindValue(':l_inglesa', $li);
        $consulta->BindValue(':matematica', $ma);
        $consulta->BindValue(':ciencias', $ci);
        $consulta->BindValue(':geografia', $ge);
        $consulta->BindValue(':historia', $hi);
        $consulta->BindValue(':religiao', $re);
        $consulta->BindValue('media', $md);
        $consulta->BindValue(':candidato_id_candidato', $id);
        $consulta->execute();
    }

