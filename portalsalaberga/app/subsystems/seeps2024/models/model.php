<?php

require_once('../config/connect.php');

class model_usuario extends connect
{

    //atributos
    protected $candidato;
    protected $curso;
    protected $nota;
    protected $usuario;

    //metodos especiais 
    function __construct()
    {

        parent::__construct();
        $this->candidato = "candidato";
        $this->curso = "curso";
        $this->nota = "nota";
        $this->usuario = "usuario";
    }

    //metodos
    function cadastrar($nome, $c1, $c2, $dn, $lp, $ar, $ef, $li, $ma, $ci, $ge, $hi, $re, $bairro, $publica, $pcd, $media)
    {

        $result_cadastrar_candidato = $this->connect->prepare("INSERT INTO candidato VALUES(NULL, :nome, :c1, :c2, :dn, :bairro, :publica, :pcd, 0, NULL)");
        $result_cadastrar_candidato->bindValue(':nome', $nome);
        $result_cadastrar_candidato->bindValue(':c1', $c1);
        $result_cadastrar_candidato->bindValue(':c2', $c2);
        $result_cadastrar_candidato->bindValue(':dn', $dn);
        $result_cadastrar_candidato->bindValue(':bairro', $bairro);
        $result_cadastrar_candidato->bindValue(':pcd', $pcd);

        $result_cadastrar_candidato->execute();

        $result_check_id = $this->connect->prepare("SELECT * FROM candidatos WHERE nome = :nome2");
        $result_check_id->bindValue(':nome2', $nome);
        $result_check_id->execute();
        $dados = $result_check_id->fetchAll();
        foreach ($dados as $value => $x) {

            $id_candidato = $x['candidato'];
        }

        $result_cadastrar_nota = $this->connect->prepare("INSERT INTO nota VALUES(:lp, :ar, :ef, :li, :ma, :ci, :ge, :hi, :re, :id, :media )");
        $result_cadastrar_nota->BindValue(':lp', $lp);
        $result_cadastrar_nota->BindValue(':ar', $ar);
        $result_cadastrar_nota->BindValue(':ef', $ef);
        $result_cadastrar_nota->BindValue(':li', $li);
        $result_cadastrar_nota->BindValue(':ma', $ma);
        $result_cadastrar_nota->BindValue(':ci', $ci);
        $result_cadastrar_nota->BindValue(':ge', $ge);
        $result_cadastrar_nota->BindValue(':hi', $hi);
        $result_cadastrar_nota->BindValue(':re', $re);
        $result_cadastrar_nota->BindValue(':id', $x);
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
}
