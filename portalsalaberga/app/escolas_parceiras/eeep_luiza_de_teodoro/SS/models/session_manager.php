<?php


session_start();

//metodos 
function lista()
{
    require_once('config/connect.php');
    require_once('curso.php');
    $tabela_curso = cursos();
    foreach ($tabela_curso as $curso) {
        $dadosCurso = [];

        // Total de inscritos
        $stmt = $conexao->prepare("SELECT COUNT(*) as total FROM candidato WHERE id_curso1_fk = ?");
        $stmt->execute([$curso['nome_curso']]);
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        $dadosCurso['total'] = $resultado['total'];

        // PCD
        $stmt = $conexao->prepare("SELECT COUNT(*) as total FROM candidato WHERE pcd = '1' AND id_curso1_fk = ?");
        $stmt->execute([$curso['nome_curso']]);
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        $dadosCurso['pcd'] = $resultado['total'];

        // Bairro e Escola Pública
        $stmt = $conexao->prepare("SELECT COUNT(*) as total FROM candidato WHERE bairro = '1' AND publica = '1' AND id_curso1_fk = ?");
        $stmt->execute([$curso['nome_curso']]);
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        $dadosCurso['bairro_publica'] = $resultado['total'];

        // Bairro e Escola Privada
        $stmt = $conexao->prepare("SELECT COUNT(*) as total FROM candidato WHERE bairro = '1' AND publica = '0' AND id_curso1_fk = ?");
        $stmt->execute([$curso['nome_curso']]);
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        $dadosCurso['bairro_privada'] = $resultado['total'];

        // Escola Privada
        $stmt = $conexao->prepare("SELECT COUNT(*) as total FROM candidato WHERE publica = '0' AND id_curso1_fk = ?");
        $stmt->execute([$curso['nome_curso']]);
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        $dadosCurso['privada'] = $resultado['total'];

        // Escola Pública
        $stmt = $conexao->prepare("SELECT COUNT(*) as total FROM candidato WHERE publica = '1' AND id_curso1_fk = ?");
        $stmt->execute([$curso['nome_curso']]);
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        $dadosCurso['publica'] = $resultado['total'];

        // Armazenar na sessão
        $_SESSION["curso_$curso" . $curso['nome_curso']] = $dadosCurso;

        // Debug - imprimir dados armazenados

    }
}
