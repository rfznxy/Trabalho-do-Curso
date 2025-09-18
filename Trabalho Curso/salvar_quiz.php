<?php
require 'conexao.php'; // arquivo que cria $pdo

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $continuar = $_POST['continuar'] ?? '';
    $faculdade = $_POST['faculdade'] ?? '';
    $curso     = $_POST['curso'] ?? '';
    $parar     = $_POST['parar'] ?? '';
    $melhor    = $_POST['melhor'] ?? '';

    try {
        $sql = "INSERT INTO quiz (continuar, faculdade, curso, parar, melhor) 
                VALUES (:continuar, :faculdade, :curso, :parar, :melhor)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':continuar' => $continuar,
            ':faculdade' => $faculdade,
            ':curso'     => $curso,
            ':parar'     => $parar,
            ':melhor'    => $melhor
        ]);

        echo "<h2>✅ Respostas enviadas com sucesso!</h2>";
        echo "<a href='quiz.html'>Voltar ao Quiz</a>";
    } catch (PDOException $e) {
        echo "❌ Erro ao salvar: " . $e->getMessage();
    }
}
?>
