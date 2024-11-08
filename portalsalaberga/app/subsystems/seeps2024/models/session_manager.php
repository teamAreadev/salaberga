<?php
require_once('config/Database.php');
session_start();

try {
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    for ($curso = 1; $curso <= 4; $curso++) {
        $dadosCurso = [];



        // Total de inscritos
        $stmt = $pdo->prepare("SELECT COUNT(*) as total FROM candidato WHERE id_curso1_fk = ?");
        $stmt->execute([$curso]);
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        $dadosCurso['total'] = $resultado['total'];

        // PCD
        $stmt = $pdo->prepare("SELECT COUNT(*) as total FROM candidato WHERE pcd = '1' AND id_curso1_fk = ?");
        $stmt->execute([$curso]);
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        $dadosCurso['pcd'] = $resultado['total'];

        // Bairro e Escola Pública
        $stmt = $pdo->prepare("SELECT COUNT(*) as total FROM candidato WHERE bairro = '1' AND publica = '1' AND id_curso1_fk = ?");
        $stmt->execute([$curso]);
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        $dadosCurso['bairro_publica'] = $resultado['total'];

        // Bairro e Escola Privada
        $stmt = $pdo->prepare("SELECT COUNT(*) as total FROM candidato WHERE bairro = '1' AND publica = '0' AND id_curso1_fk = ?");
        $stmt->execute([$curso]);
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        $dadosCurso['bairro_privada'] = $resultado['total'];

        // Escola Pública
        $stmt = $pdo->prepare("SELECT COUNT(*) as total FROM candidato WHERE publica = '1' AND id_curso1_fk = ?");
        $stmt->execute([$curso]);
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        $dadosCurso['publica'] = $resultado['total'];

        // Armazenar na sessão
        $_SESSION["curso_$curso"] = $dadosCurso;

        // Debug - imprimir dados armazenados

    }
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}

// Debug - imprimir todas as sessões no final
