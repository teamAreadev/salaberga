<?php

Class Candidato {



	public function cadastrar($nome, $c1, $c2, $dn, $lp, $ar, $ef, $li, $ma, $ci, $ge, $hi, $re, $bairro, $publica, $m){

		try{
			require_once("../Database.php");
			$sql= "insert into candidato values(null, :nome, :c1, :c2, :dn, :bairro, 0, null)";
			$consulta = $pdo->prepare($sql);
			$consulta->BindValue(':nome',$nome);
			$consulta->BindValue(':c1',$c1);
			$consulta->BindValue(':c2',$c2);
			$consulta->BindValue(':dn',$dn);
			$consulta->BindValue(':bairro',$bairro);
			$consulta->execute();



			$sql2="select * from candidato where nome=:nome2;";
			$consulta2 = $pdo->prepare($sql2);
			$consulta2->BindValue(':nome2',$nome);
			$consulta2->execute();
   			$dados = $consulta2->fetchAll();
		   			foreach($dados as $valor =>$d){
		   				$x = $d['id_candidato'];
		   			}


			$sql3="insert into nota values(:lp, :ar, :ef, :li, :ma, :ci, :ge, :hi, :re, :id, :publica, :media);";
			$consulta3 = $pdo->prepare($sql3);
			$consulta3->BindValue(':lp',$lp);
			$consulta3->BindValue(':ar',$ar);
			$consulta3->BindValue(':ef',$ef);
			$consulta3->BindValue(':li',$li);
			$consulta3->BindValue(':ma',$ma);
			$consulta3->BindValue(':ci',$ci);
			$consulta3->BindValue(':ge',$ge);
			$consulta3->BindValue(':hi',$hi);
			$consulta3->BindValue(':re',$re);
			$consulta3->BindValue(':id',$x);
			$consulta3->BindValue(':publica',$publica);
			$consulta3->BindValue(':media',$m);
			$consulta3->execute();

            
            
		}catch(PDOException $erro){
			ECHO $erro;
		}finally{
        echo '<script language="JavaScript"> 
        window.location="success.php"; 
        </script>';   
		}
		

	}



	public function pesquisarCotas() {
		try {
			require_once('../Database.php');
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
			// Iniciar a sessão
			session_start();
			
			// Array para armazenar todos os resultados
			$resultados = [];
			
			// Para cada curso (1 a 4)
			for ($curso = 1; $curso <= 4; $curso++) {
				// Criar array para armazenar dados do curso
				$dadosCurso = [];
				
				// 1. PCD
				$stmt = $pdo->prepare("SELECT COUNT(*) as total FROM candidato 
									 WHERE pcd = 1 AND id_curso1_fk = ?");
				$stmt->execute([$curso]);
				$resultado = $stmt->fetch(PDO::FETCH_ASSOC);
				$dadosCurso['pcd'] = $resultado['total'];
				
				// 2. Bairro e Escola Pública
				$stmt = $pdo->prepare("SELECT COUNT(*) as total FROM candidato 
									 WHERE bairro = 1 AND publica = 1 AND id_curso1_fk = ?");
				$stmt->execute([$curso]);
				$resultado = $stmt->fetch(PDO::FETCH_ASSOC);
				$dadosCurso['bairropublica'] = $resultado['total'];
				
				// 3. Bairro e Escola Privada
				$stmt = $pdo->prepare("SELECT COUNT(*) as total FROM candidato 
									 WHERE bairro = 1 AND publica = 0 AND id_curso1_fk = ?");
				$stmt->execute([$curso]);
				$resultado = $stmt->fetch(PDO::FETCH_ASSOC);
				$dadosCurso['bairroprivada'] = $resultado['total'];
				
				// 4. Total do curso
				$stmt = $pdo->prepare("SELECT COUNT(*) as total FROM candidato 
									 WHERE id_curso1_fk = ?");
				$stmt->execute([$curso]);
				$resultado = $stmt->fetch(PDO::FETCH_ASSOC);
				$dadosCurso['total'] = $resultado['total'];
				
				// 5. Escola Pública
				$stmt = $pdo->prepare("SELECT COUNT(*) as total FROM candidato 
									 WHERE publica = 1 AND id_curso1_fk = ?");
				$stmt->execute([$curso]);
				$resultado = $stmt->fetch(PDO::FETCH_ASSOC);
				$dadosCurso['publica'] = $resultado['total'];
				
				// Armazenar dados do curso na sessão
				$_SESSION["curso_{$curso}"] = $dadosCurso;
			}
			
			// Exibir resultados
			echo "<h2>Resultados por Curso</h2>";
			
			for ($i = 1; $i <= 4; $i++) {
				echo "<h3>Curso {$i}</h3>";
				echo "PCD: {$_SESSION["curso_{$i}"]['pcd']} candidatos<br>";
				echo "Bairro + Escola Pública: {$_SESSION["curso_{$i}"]['bairropublica']} candidatos<br>";
				echo "Bairro + Escola Privada: {$_SESSION["curso_{$i}"]['bairroprivada']} candidatos<br>";
				echo "Total: {$_SESSION["curso_{$i}"]['total']} candidatos<br>";
				echo "Escola Pública: {$_SESSION["curso_{$i}"]['publica']} candidatos<br>";
				echo "<hr>";
			}
			
		} catch(PDOException $e) {
			echo "Erro na conexão: " . $e->getMessage();
		}
	}
	
		

	/* Este código:

Inicia uma sessão usando session_start()

Para cada curso, cria um array associativo com as seguintes informações:

pcd: total de candidatos PCD
bairropublica: total de candidatos do bairro com escola pública
bairroprivada: total de candidatos do bairro com escola privada
total: total de candidatos no curso
publica: total de candidatos de escola pública
Armazena os dados de cada curso em uma sessão separada usando:

Php
Insert code

$_SESSION["curso_1"]
$_SESSION["curso_2"]
$_SESSION["curso_3"]
$_SESSION["curso_4"]
Exibe os resultados formatados

Você pode acessar esses dados em qualquer parte do seu sistema usando:

Php
Insert code

$dadosCurso1 = $_SESSION["curso_1"];
$dadosCurso2 = $_SESSION["curso_2"];
// etc.
E para acessar informações específicas:

Php
Insert code

$pcdCurso1 = $_SESSION["curso_1"]["pcd"];
$publicaCurso2 = $_SESSION["curso_2"]["publica"];
// etc. */





	public function atualizar($lp, $ar, $ef, $li, $ma, $ci, $ge, $hi, $re, $md, $id){

		try{
            $pdo = new PDO("mysql:host=localhost;dbname=u750204740_seeps","u750204740_seeps","Gl311426!@##");
            //$pdo = new PDO("mysql:host=localhost;dbname=selecao_2023","root","");

			$sql="UPDATE nota SET l_portuguesa=:lp, arte=:ar, educacao_fisica=:ef, l_inglesa=:li, matematica=:ma, ciencias=:ci, geografia=:ge, historia=:hi, religiao=:re, media=:md WHERE candidato_id_candidato = :id;";
			$consulta = $pdo->prepare($sql);
			$consulta->BindValue(':lp',$lp);
			$consulta->BindValue(':ar',$ar);
			$consulta->BindValue(':ef',$ef);
			$consulta->BindValue(':li',$li);
			$consulta->BindValue(':ma',$ma);
			$consulta->BindValue(':ci',$ci);
			$consulta->BindValue(':ge',$ge);
			$consulta->BindValue(':hi',$hi);
			$consulta->BindValue(':re',$re);
			$consulta->BindValue(':md',$md);
			$consulta->BindValue(':id',$id);
			$consulta->execute();            

		}catch(PDOException $erro){
			ECHO $erro;
		}finally{
        echo '<script language="JavaScript"> 
        window.location="success.php"; 
        </script>';   
		}
		

	}













public function relatorio($c, $p){
		try{
		    $pdo = new PDO("mysql:host=localhost;dbname=u750204740_seeps","u750204740_seeps","Gl311426!@##");
            //$pdo = new PDO("mysql:host=localhost;dbname=selecao_2023","root","");

			$sql="select * from candidato 
			inner join nota
			on candidato.id_candidato  = nota.candidato_id_candidato and candidato.id_curso1_fk =:c and nota.publica =:p; 
			";
			$consulta = $pdo->prepare($sql);
			$consulta->BindValue(':c',$c);
			$consulta->BindValue(':p',$p);
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


echo $curso."  -  ".$tipo.'<br>';
		   					echo '<br>';		   				
		   					echo '<br>';


   			$dados = $consulta->fetchAll();
		   			foreach($dados as $valor => $d){
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

		   				echo "idCandidato: ".$d['id_candidato'].'<br>';
		   				echo "idNota: ".$d['id_candidato'].'<br>';
		   				echo "Nome: ".$d['nome'].'<br>';
		   				echo "Opção 1: ".$curso.'<br>';
		   				echo "Opção 2: ".$curso2.'<br>';
		   				echo "Data Nascimento: ".$d['data_nascimento'].'<br>';
		   				echo "Bairro: ".$d['bairro'].'<br>';
		   				
		   				echo "Id_Estrangeira: ".$d['candidato_id_candidato'].'<br>';
		   				$media = ($d['l_portuguesa'] + $d['arte'] + 
		   				$d['educacao_fisica'] + $d['l_inglesa'] + $d['matematica'] + $d['ciencias'] + $d['geografia'] + $d['historia']+ $d['religiao'])/9;


		   				echo "Média: ".$media.'<br>';

		   					echo '<br>';

		   			}

		   		}catch(PDOException $erro){
			ECHO $erro;
		}

}






}





?>
