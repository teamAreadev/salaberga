<?php
function privadaAC($curso)
{
    require_once('../config/connect.php');

    session_start();

    // Verificar se a conexão foi estabelecida
    if (!$conexao) {
        die('Erro ao conectar ao banco de dados.');
    }

    // Verificar o status da sessão e definir o valor de $n
    if (isset($_SESSION['status'])) {
        if ($_SESSION['status'] == 1) {
            $n = 122;
        } else if ($_SESSION['status'] == 0) {
            $n = 105;
        } else {
            die('Status de sessão inválido.');
        }
    } else {
        die('Sessão não iniciada.');
    }

    // Preparar a consulta SQL com base no status da sessão
    if ($_SESSION['status'] == 1) {
        $stmtSelect = $conexao->prepare("
            SELECT candidato.id_candidato, candidato.id_cadastrador, candidato.nome, candidato.id_curso1_fk, candidato.publica, candidato.bairro, candidato.pcd, nota.media
            FROM candidato 
            INNER JOIN nota ON nota.candidato_id_candidato = candidato.id_candidato 
            WHERE candidato.publica = 1 
            AND candidato.bairro = 0 
            AND candidato.pcd = 0
            AND candidato.id_curso1_fk = :curso
            ORDER BY nota.media DESC,
            candidato.data_nascimento DESC,
            nota.l_portuguesa DESC,
            nota.matematica DESC
        ");
    } else if ($_SESSION['status'] == 0) {
        $stmtSelect = $conexao->prepare("
            SELECT candidato.nome, candidato.id_curso1_fk, candidato.publica, candidato.bairro, candidato.pcd
            FROM candidato 
            INNER JOIN nota ON nota.candidato_id_candidato = candidato.id_candidato 
            WHERE candidato.publica = 1 
            AND candidato.bairro = 0 
            AND candidato.pcd = 0
            AND candidato.id_curso1_fk = :curso
            ORDER BY nome ASC
        ");
    }

    // Verificar se a consulta foi preparada corretamente
    if (!$stmtSelect) {
        die('Erro ao preparar a consulta SQL.');
    }

    // Vincular o valor do curso e executar a consulta
    $stmtSelect->bindValue(':curso', $curso);
    $stmtSelect->execute();
    $result = $stmtSelect->fetchAll(PDO::FETCH_ASSOC);

    // Verificar se a consulta retornou resultados
    if (empty($result)) {
        die('Nenhum dado encontrado para o curso especificado.');
    }

    require_once('../assets/fpdf/fpdf.php');
    $pdf = new FPDF('L', 'mm', 'A4');
    $pdf->AddPage();

    // Cabeçalho com larguras ajustadas
    $pdf->Image('../assets/images/logo.png', 8, 8, 15, 0, 'PNG');
    $pdf->SetFont('Arial', 'B', 25);
    $pdf->Cell(90, 5, ('PUBLICA AC'), 0, 1, 'C');
    $pdf->SetFont('Arial', 'B', 8);
    $pdf->Cell(188, 10, ('PCD = PESSOA COM DEFICIENCIA | COTISTA = INCLUSO NA COTA DO BAIRRO | AC = AMPLA CONCORRENCIA'), 0, 1, 'C');
    $pdf->SetFont('Arial', 'b', 12);
    $pdf->Cell(185, 10, '', 0, 1, 'C');

    // Fonte do cabeçalho
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->SetFillColor(93, 164, 67); // Fundo verde
    $pdf->SetTextColor(255, 255, 255); // Texto branco
    $pdf->Cell(10, 7, 'CH', 1, 0, 'C', true);
    $pdf->Cell($n, 7, 'Nome', 1, 0, 'C', true);
    $pdf->Cell(30, 7, 'Curso', 1, 0, 'C', true);
    $pdf->Cell(18, 7, 'Origem', 1, 0, 'C', true);
    if ($_SESSION['status'] == 1) { 
        $pdf->Cell(26, 7, 'Segmento', 1, 0, 'C', true);
        $pdf->Cell(20, 7, 'Id Aluno', 1, 0, 'C', true);
        $pdf->Cell(15, 7, 'Media', 1, 0, 'C', true);
        $pdf->Cell(35, 7, 'Resp. Cadastro', 1, 1, 'C', true);
    } else {
        $pdf->Cell(26, 7, 'Segmento', 1, 1, 'C', true); 
    }
    // Resetar cor do texto para preto
    $pdf->SetTextColor(0, 0, 0);
    $pdf->SetFont('Arial', '', 8);

    // Dados com cores alternadas
    $classificacao = 1;

    foreach ($result as $row) {
        // Definir curso
        switch ($row['id_curso1_fk']) {
            case 1:
                $cursoNome = 'ENFERMAGEM';
                break;
            case 2:
                $cursoNome = 'INFORMATICA';
                break;
            case 3:
                $cursoNome = 'ADMINISTRACAO';
                break;
            case 4:
                $cursoNome = 'EDIFICACOES';
                break;
            default:
                $cursoNome = 'Não definido';
                break;
        }

        // Definir escola
        $escola = ($row['publica'] == 1) ? 'PUBLICA' : 'PRIVADA';

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
        $pdf->Cell($n, 7, strtoupper($row['nome']), 1, 0, 'L', true);
        $pdf->Cell(30, 7, $cursoNome, 1, 0, 'L', true);
        $pdf->Cell(18, 7, $escola, 1, 0, 'L', true);
        $pdf->Cell(26, 7, $cota, 1, 0, 'L', true);
        if ($_SESSION['status'] == 1) {
            $pdf->Cell(20, 7, $row['id_candidato'], 1, 0, 'C', true);
            $pdf->Cell(15, 7, number_format($row['media'], 2), 1, 0, 'C', true);
            $pdf->Cell(35, 7, $row['id_cadastrador'], 1, 1, 'C', true);
        } else {
            $pdf->Cell(26, 7, $cota, 1, 1, 'L', true); 
        }
        $classificacao++;
    }

    $pdf->Output('classificacao.pdf', 'I');
}

// Chame a função com o parâmetro de curso
privadaAC($curso);
?>
