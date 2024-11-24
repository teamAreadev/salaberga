<?php
    
    session_start();
    function cadastrarUsuario($nomeC, $userName, $email, $senha, $status, $cargo)
{
    try {
        require_once('../config/connect.php');
        
        // Primeiro, verifica se o email já existe
        $stmtCheck = $conexao->prepare("SELECT COUNT(*) FROM usuario WHERE email = :email");
        $stmtCheck->bindValue(':email', $email);
        $stmtCheck->execute();
        
        if ($stmtCheck->fetchColumn() > 0) {
            throw new Exception("Este email já está cadastrado no sistema");
        }
        
        // Se o email não existe, procede com a inserção
        $stmtInsert = $conexao->prepare('
            INSERT INTO usuario (username, nome, email, senha, cargo, status) 
            VALUES (:UserName, :nomeC, :email, MD5(:senha), :cargo, :status)
        ');
        
        $stmtInsert->bindValue(':nomeC', $nomeC);
        $stmtInsert->bindValue(':UserName', $userName);
        $stmtInsert->bindValue(':email', $email);
        $stmtInsert->bindValue(':senha', $senha);
        $stmtInsert->bindValue(':cargo', $cargo);
        $stmtInsert->bindValue(':status', $status);
        
        return $stmtInsert->execute();

        //header('Location: ../index.php');
        //exit();
        
    } catch (PDOException $e) {
        // Verifica se é um erro de duplicidade
        if ($e->getCode() == '23000') {
            throw new Exception("Este email já está cadastrado no sistema");
        }
        error_log("Erro ao cadastrar usuário: " . $e->getMessage());
        throw new Exception("Erro ao cadastrar usuário no sistema");
    }
}
    function cadastrar($nome, $c1, $c2, $dn, $lp, $ar, $ef, $li, $ma, $ci, $ge, $hi, $re, $bairro, $publica, $pcd, $media)
    {
        require_once('../config/connect.php');
        //inserido na tabela candidato os dados do candidato
        $result_cadastrar_candidato = $conexao->prepare("INSERT INTO candidato VALUES(NULL, :nome, :id_curso1_fk, :id_curso2_fk, :data_nascimento, :bairro, :publica, :pcd, 0, NULL)");
        $result_cadastrar_candidato->bindValue(':nome', $nome);
        $result_cadastrar_candidato->bindValue(':id_curso1_fk', $c1);
        $result_cadastrar_candidato->bindValue(':id_curso2_fk', $c2);
        $result_cadastrar_candidato->bindValue(':data_nascimento', $dn);
        $result_cadastrar_candidato->bindValue(':bairro', $bairro);
        $result_cadastrar_candidato->bindValue(':publica', $publica);
        $result_cadastrar_candidato->bindValue(':pcd', $pcd);
        $result_cadastrar_candidato->execute();

        //procurando na tabela candidato o nome do candidato
        $result_check_id = $conexao->prepare("SELECT * FROM candidato WHERE nome = :nome");
        $result_check_id->bindValue(':nome', $nome);
        $result_check_id->execute();
        $dados = $result_check_id->fetchAll();
        foreach ($dados as $value => $x) {

            $id_candidato = $x['id_candidato'];
        }

        //inserindo na tabela nota, as notas do candidato cadastrado
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
        require_once('../config/connect.php');
        //inserido na tabela candidato os dados do candidato
        $result_cadastrar_candidato = $conexao->prepare("INSERT INTO candidato VALUES(NULL, :nome, :id_curso1_fk, :id_curso2_fk, :data_nascimento, :bairro, :publica, :pcd, 0, NULL)");
        $result_cadastrar_candidato->bindValue(':nome', $nome);
        $result_cadastrar_candidato->bindValue(':id_curso1_fk', $c1);
        $result_cadastrar_candidato->bindValue(':id_curso2_fk', $c2);
        $result_cadastrar_candidato->bindValue(':data_nascimento', $dn);
        $result_cadastrar_candidato->bindValue(':bairro', $bairro);
        $result_cadastrar_candidato->bindValue(':publica', $publica);
        $result_cadastrar_candidato->bindValue(':pcd', $pcd);
        $result_cadastrar_candidato->execute();

        //procurando na tabela candidato o nome do candidato
        $result_check_id = $conexao->prepare("SELECT * FROM candidato WHERE nome = :nome");
        $result_check_id->bindValue(':nome', $nome);
        $result_check_id->execute();
        $dados = $result_check_id->fetchAll();
        foreach ($dados as $value => $x) {

            $id_candidato = $x['id_candidato'];
        }

        //inserindo na tabela nota, as notas do candidato cadastrado
        $result_cadastrar_nota = $conexao->prepare("INSERT INTO nota VALUES(:l_portuguesa, :arte, NULL, :l_inglesa, :matematica, :ciencias, :geografia, :historia, :religiao, :candidato_id_candidato, :media )");
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

    function logar($nome, $senha)
    {
        require_once('../config/connect.php');
        //verificando se os dados estão no sistema 
        $result_logar = $conexao->prepare("SELECT * FROM usuario WHERE UserName = :nome AND senha = :senha");
        $result_logar->bindValue(':nome', $nome);
        $result_logar->bindValue(':senha', $senha);
        $result_logar->execute();
        $result = $result_logar->fetchAll(PDO::FETCH_ASSOC);
        
        
        //se for o result_logar for maior que 0
        foreach ($result as $key) {
            if (!empty($result)){
                $_SESSION['login'] = true;
                $_SESSION['status'] = $key['status'];
                return $login = $key['status'];
            } else {
                return $login = 2;
            }
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
