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

        $result_cadastrar_candidato = $this->connect->prepare("INSERT INTO candidato VALUES(NULL, :nome, :id_curso1_fk, :id_curso2_fk, :data_nascimento, :bairro, :publica, :pcd, 0, NULL)");
        $result_cadastrar_candidato->bindValue(':nome', $nome);
        $result_cadastrar_candidato->bindValue(':id_curso1_fk', $c1);
        $result_cadastrar_candidato->bindValue(':id_curso2_fk', $c2);
        $result_cadastrar_candidato->bindValue(':data_nascimento', $dn);
        $result_cadastrar_candidato->bindValue(':bairro', $bairro);
        $result_cadastrar_candidato->bindValue(':publica', $publica);
        $result_cadastrar_candidato->bindValue(':pcd', $pcd);

        $result_cadastrar_candidato->execute();

        $result_check_id = $this->connect->prepare("SELECT * FROM candidato WHERE nome = :nome");
        $result_check_id->bindValue(':nome', $nome);
        $result_check_id->execute();
        $dados = $result_check_id->fetch();
        $id_candidato = $dados['id_candidato'];
        
        $result_cadastrar_nota = $this->connect->prepare("INSERT INTO nota VALUES(:lp, :ar, :ef, :li, :ma, :ci, :ge, :hi, :re, :candidato_id_candidato, :media )");
        $result_cadastrar_nota->BindValue(':lp', $lp);
        $result_cadastrar_nota->BindValue(':ar', $ar);
        $result_cadastrar_nota->BindValue(':ef', $ef);
        $result_cadastrar_nota->BindValue(':li', $li);
        $result_cadastrar_nota->BindValue(':ma', $ma);
        $result_cadastrar_nota->BindValue(':ci', $ci);
        $result_cadastrar_nota->BindValue(':ge', $ge);
        $result_cadastrar_nota->BindValue(':hi', $hi);
        $result_cadastrar_nota->BindValue(':re', $re);
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

        $result_logar = $this->connect->prepare("SELECT * FROM usuario WHERE email = :email AND senha = :senha");
        $result_logar->bindValue(':email', $email);
        $result_logar->bindValue(':senha', $password);
        $result_logar->execute();

        if ($result_logar->rowCount() > 0) {

            return "certo";
        } else {

            return "erro";
        }
    }
}
