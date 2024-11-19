<?php
function privadaGeral()
{
    require_once('../../config/connect.php');
    $stmtSelect = $conexao->prepare("
        SELECT candidato.nome, candidato.id_curso1_fk, candidato.publica, candidato.bairro, candidato.pcd, nota.media
        FROM candidato 
        INNER JOIN nota ON nota.candidato_id_candidato = candidato.id_candidato AND candidato.publica = 0
        ORDER BY nota.media DESC LIMIT 10
    ");
    $stmtSelect->execute();
    $result = $stmtSelect->fetchAll(PDO::FETCH_ASSOC);

    require_once('../../assets/fpdf/fpdf.php');
    $pdf = new FPDF();
    $pdf->AddPage();

    // Cabeçalho com larguras ajustadas
    $pdf->Image('../../assets/images/logo.png', 8, 8, 15, 0, 'PNG');
    $pdf->SetFont('Arial', 'B', 25);
    $pdf->Cell(185, 10, ('PRIVADA GERAL'), 0, 1, 'C');
    $pdf->SetFont('Arial', 'B', 8);
    $pdf->Cell(321, 0, ('PCD = PESSOA COM DEFICIENCIA'), 0, 1, 'C');
    $pdf->Cell(315, -10, ('AC = AMPLA CONCORRENCIA'), 0, 1, 'C');
    $pdf->Cell( 332, 0, ('COTISTA = RESIDENTE DO BAIRRO'), 0, 1, 'C');
    $pdf->SetFont('Arial', 'b', 12);
    $pdf->Cell(185, 25, '', 0, 1, 'C');

    // Fonte do cabeçalho
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->SetFillColor(93, 164, 67); //fundo verde
    $pdf->SetTextColor(255, 255, 255);  //texto branco
    $pdf->Cell(10, 7, 'CH', 1, 0, 'C', true);
    $pdf->Cell(90, 7, 'Nome', 1, 0, 'C', true);
    $pdf->Cell(32, 7, 'Curso', 1, 0, 'C', true);
    $pdf->Cell(18, 7, 'Origem', 1, 0, 'C', true);
    $pdf->Cell(26, 7, 'Segmento', 1, 0, 'C', true);
    $pdf->Cell(15, 7, 'Media', 1, 1, 'C', true);

    // Resetar cor do texto para preto
    $pdf->SetTextColor(0, 0, 0);
    $pdf->SetFont('Arial', '', 10);

    // Dados com cores alternadas
    $classificacao = 001;

    foreach ($result as $row) {
        // Definir curso
        switch ($row['id_curso1_fk']) {
            case 1:
                $curso = ('ENFERMAGEM');
                break;
            case 2:
                $curso = ('INFORMATICA');
                break;
            case 3:
                $curso = ('ADMINISTRACAO');
                break;
            case 4:
                $curso = ('EDIFICACOES');
                break;
            default:
                $curso = ('Não definido');
                break;
        }

        // Definir escola
        $escola = ($row['publica'] == 1) ? ('PUBLICA') : ('PRIVADA');

        // Definir cota
        if ($row['pcd'] == 1) {
            $cota = 'PCD';
        } else if ($row['publica'] == 0 && $row['bairro'] == 1) {
            $cota = 'COSTISTA';
        } else {
            $cota = 'AC';
        }

        // Definir cor da linha
        $cor = $classificacao % 2 ? 255 : 192;
        $pdf->SetFillColor($cor, $cor, $cor);

        // Imprimir linha no PDF
        $pdf->Cell(10, 7, sprintf("%03d", $classificacao), 1, 0, 'C', true);
        $pdf->Cell(90, 7, strToUpper(($row['nome'])), 1, 0, 'L', true);
        $pdf->Cell(32, 7, $curso, 1, 0, 'L', true);
        $pdf->Cell(18, 7, $escola, 1, 0, 'L', true);
        $pdf->Cell(26, 7, $cota, 1, 0, 'L', true);
        $pdf->Cell(15, 7, number_format($row['media'], 2), 1, 1, 'C', true);
        
        $classificacao++;
    }

    $pdf->Output('classificacao.pdf', 'I');
}

privadaGeral();
