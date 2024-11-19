<?php
classificadosEnfermagem();
function classificadosEnfermagem()
{
    require_once('../../config/connect.php');
    $stmtSelect = $conexao->prepare("
        SELECT candidato.nome, candidato.id_curso1_fk, nota.media 
        FROM candidato 
        INNER JOIN nota ON nota.candidato_id_candidato = candidato.id_candidato
        ORDER BY nota.media DESC LIMIT 10
        ");
    $stmtSelect->execute();
    $result = $stmtSelect->fetchAll(PDO::FETCH_ASSOC);
  
    require_once('../../assets/fpdf/fpdf.php');
    $pdf = new FPDF();
    $pdf->AddPage();
   
    // Cabeçalho com larguras ajustadas
    $pdf->Image('../../assets/images/logo.png', 8, 8, 15, 0, 'PNG');
    $pdf->SetFont('Arial', 'B', 20);
    $pdf->Cell(185, 10, 'CLASSIFICADOS', 0, 1, 'C');
    $pdf->SetFont('Arial', 'b', 12);
    $pdf->Cell(185, 5, '- Enfermagem -', 0, 1, 'C');
    $pdf->Cell(185, 15, '', 0, 1, 'C');
   
    // Fonte do cabeçalho
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->SetFillColor(93,164,67); //fundo preto
    $pdf->SetTextColor(255, 255, 255);  //fundo branco
    $pdf->Cell(10, 10, 'CH', 1, 0, 'C', true);
    $pdf->Cell(140, 10, 'Nome', 1, 0, 'C', true);
    $pdf->Cell(25, 10, 'Curso', 1, 0, 'C', true);
    $pdf->Cell(15, 10, 'Media', 1, 1, 'C', true);

    // Resetar cor do texto para preto
    $pdf->SetTextColor(0, 0, 0); //fonte cor preta
    $pdf->SetFont('Arial', '', 10);

    // Dados com cores alternadas
    $classificacao = 1;

    //substituir o n do curso pelo nome
    foreach ($result as $row) {
      
      switch ($row['id_curso1_fk']) {
        case 1:
          $txt = 'Enfermagem';
          $curso = utf8_decode($txt);
          break;
          case 2:
          $txt = 'Infomática';
          $curso = utf8_decode($txt);
          case 3:
            $txt = 'Administração';
            $curso = utf8_decode($txt);
          case 4:
            $txt = 'Edificações';
            $curso = utf8_decode($txt);
        default:
          # code...
          break;
      } 

      
  }

  
  foreach ($result as $row) {
    $cor = $classificacao % 2 ? 255 : 192;
    $pdf->SetFillColor($cor, $cor, $cor);
    
    $pdf->Cell(10, 7, $classificacao, 1, 0, 'L', true);
    $pdf->Cell(140, 7, strToUpper($row['nome']), 1, 0, 'L', true);
    $pdf->Cell(25, 7, $curso, 1, 0, 'L', true);
    $pdf->Cell(15, 7, number_format($row['media'], 2), 1, 1, 'L', true);
    $classificacao++;
}
    $pdf->Output('classificacao.pdf', 'I');
}
