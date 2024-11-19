<?php

require_once('config/connect');


function pesquisarCotas()
{
	require_once('config/connect');
	// Iniciar a sessão

	session_start();

	// Array para armazenar todos os resultados

	$resultados = [];

	// Para cada curso (1 a 4)

	for ($curso = 1; $curso <= 4; $curso++) {
		// Criar array para armazenar dados do curso

		$dadosCurso = [];

		// 1. PCD
		$stmt = $conexao->prepare("SELECT COUNT(*) as total FROM candidato 
									 WHERE pcd = 1 AND id_curso1_fk = ?");
		$stmt->execute([$curso]);
		$resultado = $stmt->fetch(PDO::FETCH_ASSOC);
		$dadosCurso['pcd'] = $resultado['total'];

		// 2. Bairro e Escola Pública
		$stmt = $conexao->prepare("SELECT COUNT(*) as total FROM candidato 
									 WHERE bairro = 1 AND publica = 1 AND id_curso1_fk = ?");
		$stmt->execute([$curso]);
		$resultado = $stmt->fetch(PDO::FETCH_ASSOC);
		$dadosCurso['bairropublica'] = $resultado['total'];

		// 3. Bairro e Escola Privada
		$stmt = $conexao->prepare("SELECT COUNT(*) as total FROM candidato 
									 WHERE bairro = 1 AND publica = 0 AND id_curso1_fk = ?");
		$stmt->execute([$curso]);
		$resultado = $stmt->fetch(PDO::FETCH_ASSOC);
		$dadosCurso['bairroprivada'] = $resultado['total'];

		// 4. Total do curso
		$stmt = $conexao->prepare("SELECT COUNT(*) as total FROM candidato 
									 WHERE id_curso1_fk = ?");
		$stmt->execute([$curso]);
		$resultado = $stmt->fetch(PDO::FETCH_ASSOC);
		$dadosCurso['total'] = $resultado['total'];

		// 5. Escola Pública
		$stmt = $conexao->prepare("SELECT COUNT(*) as total FROM candidato 
									 WHERE publica = 1 AND id_curso1_fk = ?");
		$stmt->execute([$curso]);
		$resultado = $stmt->fetch(PDO::FETCH_ASSOC);
		$dadosCurso['publica'] = $resultado['total'];

		// Armazenar dados do curso na sessão
		$_SESSION["curso_{$curso}"] = $dadosCurso;
	}
}


function atualizar($lp, $ar, $ef, $li, $ma, $ci, $ge, $hi, $re, $md, $id)
{
	try {
		
		require_once('config/connect');
		
		$sql = "UPDATE nota SET l_portuguesa=:lp, arte=:ar, educacao_fisica=:ef, l_inglesa=:li, matematica=:ma, ciencias=:ci, geografia=:ge, historia=:hi, religiao=:re, media=:md WHERE candidato_id_candidato = :id;";
		$consulta = $conexao->prepare($sql);
		$consulta->BindValue(':lp', $lp);
		$consulta->BindValue(':ar', $ar);
		$consulta->BindValue(':ef', $ef);
		$consulta->BindValue(':li', $li);
		$consulta->BindValue(':ma', $ma);
		$consulta->BindValue(':ci', $ci);
		$consulta->BindValue(':ge', $ge);
		$consulta->BindValue(':hi', $hi);
		$consulta->BindValue(':re', $re);
		$consulta->BindValue(':md', $md);
		$consulta->BindValue(':id', $id);
		$consulta->execute();
	} catch (PDOException $erro) {
		echo $erro;
	} finally {
		echo '<script language="JavaScript"> 
        window.location="success.php"; 
        </script>';
	}
}

function relatorio($c, $p)
{
	try {

		require_once('config/connect');
		
		$sql = "select * from candidato 
			inner join nota
			on candidato.id_candidato  = nota.candidato_id_candidato and candidato.id_curso1_fk =:c and nota.publica =:p; 
			";
		$consulta = $conexao->prepare($sql);
		$consulta->BindValue(':c', $c);
		$consulta->BindValue(':p', $p);
		$consulta->execute();

		switch ($c) {
			case 1:
				$curso = "ENFERMAGEM";
				break;
			case 2:
				$curso = "INFORMÁTICA";
				break;
			case 3:
				$curso = "MEIO AMBIENTE";
				break;
			case 4:
				$curso = "EDIFICAÇÕES";
				break;
		}

		switch ($p) {
			case 0:
				$tipo = "PRIVADA";
				break;
			case 1:
				$tipo = "PÚBLICA";
				break;
		}


		echo $curso . "  -  " . $tipo . '<br>';
		echo '<br>';
		echo '<br>';


		$dados = $consulta->fetchAll();
		foreach ($dados as $valor => $d) {
			$a = $d['id_curso1_fk'];
			switch ($a) {
				case 1:
					$curso = "ENFERMAGEM";
					break;
				case 2:
					$curso = "INFORMÁTICA";
					break;
				case 3:
					$curso = "MEIO AMBIENTE";
					break;
				case 4:
					$curso = "EDIFICAÇÕES";
					break;
			}


			$b = $d['id_curso2_fk'];
			switch ($b) {
				case 1:
					$curso2 = "ENFERMAGEM";
					break;
				case 2:
					$curso2 = "INFORMÁTICA";
					break;
				case 3:
					$curso2 = "MEIO AMBIENTE";
					break;
				case 4:
					$curso2 = "EDIFICAÇÕES";
					break;
			}

			echo "idCandidato: " . $d['id_candidato'] . '<br>';
			echo "idNota: " . $d['id_candidato'] . '<br>';
			echo "Nome: " . $d['nome'] . '<br>';
			echo "Opção 1: " . $curso . '<br>';
			echo "Opção 2: " . $curso2 . '<br>';
			echo "Data Nascimento: " . $d['data_nascimento'] . '<br>';
			echo "Bairro: " . $d['bairro'] . '<br>';

			echo "Id_Estrangeira: " . $d['candidato_id_candidato'] . '<br>';
			$media = ($d['l_portuguesa'] + $d['arte'] +
				$d['educacao_fisica'] + $d['l_inglesa'] + $d['matematica'] + $d['ciencias'] + $d['geografia'] + $d['historia'] + $d['religiao']) / 9;


			echo "Média: " . $media . '<br>';

			echo '<br>';
		}
	} catch (PDOException $erro) {
		echo $erro;
	}
}

