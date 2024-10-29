<?php

Class Candidato {


	public function cadastrar($nome, $c1, $c2, $dn, $lp, $ar, $ef, $li, $ma, $ci, $ge, $hi, $re, $bairro, $publica, $m){

		try{
		    $pdo = new PDO("mysql:host=localhost;dbname=u750204740_seeps","u750204740_seeps","Gl311426!@##");
//			$pdo = new PDO("mysql:host=localhost;dbname=selecao_2023","root","");
			$sql="insert into candidato values(null, :nome, :c1, :c2, :dn, :bairro, 0, null);";
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
