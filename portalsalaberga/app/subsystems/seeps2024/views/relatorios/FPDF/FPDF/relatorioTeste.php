<?php
require_once("fpdf.php");

$pdf = new FPDF("P","pt","A4");
$pdf->AddPage();

	// RelatÃ³rio Enfermagem
 
$pdf->SetFont('arial','B',18);
//$pdf->Image("imagens/Imagem102.png", 1, 1,'PNG');
$pdf->Ln(10);
$pdf->Cell(0,5,"ENFERMAGEM",0,1,'C');
$pdf->Ln(12);
$pdf->SetFont('arial','B',12);
$pdf->Cell(0,5,utf8_decode('PÚBLICA'),0,1,'C');
$pdf->Cell(0,5,"","",1,'C');
$pdf->Ln(20);
$pdf->setFillColor(120, 120, 90);




//	$sql = mysql_query("SELECT*FROM alunos WHERE curso ='enfermagem' ORDER BY media_final DESC");
//$i=1;
//$str = utf8_decode("MÃ©dia Geral");
//cabeÃ§alho da tabela
$pdf->SetFont('arial','B',14);
$pdf->Cell(40,20,utf8_decode('Não'),1,0,"C",1);
$pdf->Cell(495,20,'Candidato',1,0,"C",1);
//$pdf->Cell(120,20,$str,1,1,"C");



//linhas da tabela
/*$pdf->SetFont('arial','',12);
			$pdf->setFillColor(255, 255, 255);
			while($row = mysql_fetch_array($sql)){
				$pdf->Cell(40, 20, $i++, 1, 0, "C", 1);
				$pdf->Cell(380, 20, utf8_decode($row['nome']), 1, 0, "L", 1);
				$pdf->Cell(120,20,$row['media_final'],1,1,"C");
			}
		
*/		
		#$pdf->Cell(120,20,utf8_decode("Ã¨der"),1,1,"L");
	
$pdf->Output("arquivo.pdf","F");//D para Download e F salva arquivo.

?>
