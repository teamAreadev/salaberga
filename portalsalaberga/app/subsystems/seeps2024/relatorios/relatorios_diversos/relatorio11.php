<?php


//RECEBE O VALOR REFERENTE AO CURSO
$c = $_GET['c'];
switch($c){
    case 1:
        $curso = utf8_decode("ENFERMAGEM");
        break;
    case 2:
        $curso = utf8_decode("INFORMÁTICA");
        break;
    case 3:
        $curso = utf8_decode("MEIO AMBIENTE");
        break;
    case 4:
        $curso = utf8_decode("EDIFICAÇÕES");
        break;
}


//RECEBE O VALOR REFERENTE À PÚBLICA OU PRIVADA
$p = $_GET['p'];
switch($p){
    case 0:
        $tipo = utf8_decode("PRIVADA");
        break;
    case 1:
        $tipo = utf8_decode("PÚBLICA");
        break;
}

//RECEBE O VALOR REFERENTE À COTA
$b = $_GET['b'];
switch($b){
    case 0:
        $cota = utf8_decode("");
        break;
    case 1:
        $cota = utf8_decode(" - COTISTA");
        break;
}

        require_once("FPDF/FPDF/fpdf.php");
$pdo = new PDO("mysql:host=localhost;dbname=id10902219_selesal_2021","root","");


		$consultar = $pdo->prepare("select * from candidato 
      inner join nota
      on candidato.id_candidato  = nota.candidato_id_candidato and candidato.id_curso1_fk =:c and nota.publica =:p and candidato.bairro=:b order by nota.media desc;");

        $consultar->BindValue(':c',$c);
        $consultar->BindValue(':p',$p);
        $consultar->BindValue(':b',$b);
		$consultar->execute();
		$vl = $consultar->rowCount();

$pdf= new FPDF("P","pt","A4");
$pdf->AddPage();

	// RelatÃ³rio Enfermagem
 
$pdf->SetFont('arial','B',18);
//$pdf->Image("imagens/Imagem102.png", 1, 1,'PNG');
$pdf->Ln(10);
$pdf->Cell(0,5,$curso,0,1,'C');
$pdf->Ln(12);
$pdf->SetFont('arial','B',12);
$pdf->Cell(0,5,$tipo,0,1,'C');
$pdf->Cell(0,5,"","",1,'C');
$pdf->Ln(20);
$pdf->setFillColor(160, 160, 160);

$pdf->SetFont('arial','',10);
$pdf->Cell(30,20,'CH',1,0,"C",1);
$pdf->Cell(270,20,utf8_decode('NOME'),1,0,"C",1);
$pdf->Cell(90,20,utf8_decode('CURSO 1'),1,0,"C",1);
$pdf->Cell(90,20,utf8_decode('CURSO 2'),1,0,"C",1);
$pdf->Cell(60,20,utf8_decode('MÉDIA'),1,1,"C",1);

$pdf->SetFont('arial','',10);
$pdf->setFillColor(200, 200, 200);
$n=33;
        $t=1;
        $classificavel = 33;
		foreach ($consultar as $key) {

                if($t<$classificavel){
                $pdf->SetFont('arial','B',10);
                }else{
                $pdf->SetFont('arial','',10);
                }
                
		    
            if($t>$n){
                
                $pdf->setFillColor(160, 160, 160);
                $pdf->Cell(30,20,'CH',1,0,"C",1);
                $pdf->Cell(270,20,utf8_decode('NOME'),1,0,"C",1);
                $pdf->Cell(90,20,utf8_decode('CURSO 1'),1,0,"C",1);
                $pdf->Cell(90,20,utf8_decode('CURSO 2'),1,0,"C",1);
                $pdf->Cell(60,20,utf8_decode('MÉDIA'),1,1,"C",1);
                $n=$t+$n+2;
                $pdf->setFillColor(200, 200, 200);


            }

		    //Aplicando cor ás linhas. Fica cor sim, cor não.
		    if($t%2==0){
		        $cor=1;
		    }else{
		        $cor=0;
		    }
		    
		    
		    //Colocando o zero à frente dos numeros menores que 10.
		    if($t<10){
	    		$pdf->Cell(30,20,utf8_decode('0'.$t),1,0,"C",$cor);
	    		$t++;
		    }else{
    			$pdf->Cell(30,20,utf8_decode($t++),1,0,"C",$cor);
		    }
		    	$pdf->Cell(270,20,strtoupper(utf8_decode($key['nome'])),1,0,"L",$cor);
			

		    //Dando nome ao curso 1.
            switch($key['id_curso1_fk']){
                case 1:
                    $curso1 = utf8_decode("ENFERMAGEM");
                    break;
                case 2:
                    $curso1 = utf8_decode("INFORMÁTICA");
                    break;
                case 3:
                    $curso1 = utf8_decode("MEIO AMBIENTE.");
                    break;
                case 4:
                    $curso1 = utf8_decode("EDIFICAÇÕES");
                    break;
            }
            
		    //Dando nome ao curso 2.
            switch($key['id_curso2_fk']){
                case 1:
                    $curso2 = utf8_decode("ENFERMAGEM");
                    break;
                case 2:
                    $curso2 = utf8_decode("INFORMÁTICA");
                    break;
                case 3:
                    $curso2 = utf8_decode("MEIO AMBIENTE");
                    break;
                case 4:
                    $curso2 = utf8_decode("EDIFICAÇÕES");
                    break;
            }
			
			$pdf->Cell(90,20,$curso1,1,0,"C",$cor);
			$pdf->Cell(90,20,$curso2,1,0,"C",$cor);
			$pdf->Cell(60,20,utf8_decode($key['media']),1,1,"C",$cor);

		}




$pdf->Output("arquivo.pdf","I");//D para Download e F salva arquivo.


?>
