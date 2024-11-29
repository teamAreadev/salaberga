<?php
function privadaAC()
{
    require_once('../config/connect.php');
    
    session_start();
    
    $stmtSelect = $conexao->query("
        SELECT id, nome, email, status FROM usuario;
    ");
    $result = $stmtSelect->fetchAll(PDO::FETCH_ASSOC);
    
    require_once('../assets/fpdf/fpdf.php');
    $pdf = new FPDF('P', 'mm', 'A4');
    $pdf->AddPage();
    
    // Cabeçalho com larguras ajustadas
    $pdf->Image('../assets/images/logo.png', 8, 8, 15, 0, 'PNG');
    $pdf->SetFont('Arial', 'B', 25);
    $pdf->Cell(65, 8, 'Usuarios', 0, 1, 'C');
    $pdf->SetFont('Arial', 'b', 12);
    $pdf->Cell(70, 5, 'Relatorio de usuario', 0, 1, 'C');
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(210, 10, '', 0, 1, 'C');
    
    // Fonte do cabeçalho
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->SetFillColor(93, 164, 67); // fundo verde
    $pdf->SetTextColor(255, 255, 255); // texto branco
    $pdf->Cell(10, 7, 'ID', 1, 0, 'C', true);
    $pdf->Cell(100, 7, 'Nome', 1, 0, 'C', true);
    $pdf->Cell(60, 7, 'Email', 1, 0, 'C', true);
    $pdf->Cell(20, 7, 'Status', 1, 1, 'C', true);
    
    // Resetar cor do texto para preto
    $pdf->SetTextColor(0, 0, 0);
    $pdf->SetFont('Arial', '', 10);
    
    // Loop para imprimir todas as linhas do resultado
    foreach ($result as $row) {
        // Determinar a cor da linha
        $cor = $row['id'] % 2 ? 255 : 192;
        $pdf->SetFillColor($cor, $cor, $cor);

        // Definir status
        switch ($row['status']) {
            case 1:
                $status = 'Admin';
                break;
            case 2:
                $status = 'Cliente';
                break;
        }

        // Imprimir linha no PDF
        $pdf->Cell(10, 7, $row['id'], 1, 0, 'C', true);
        $pdf->Cell(100, 7, strtoupper($row['nome']), 1, 0, 'L', true);
        $pdf->Cell(60, 7, $row['email'], 1, 0, 'L', true);
        $pdf->Cell(20, 7, $status, 1, 1, 'L', true);
    }
    
    $pdf->Output('usuario.pdf', 'I');
}

privadaAC();
