<?php
// Correção no arquivo 'conexao.php'

// Definindo as variáveis de conexão
$db_host = 'localhost';
$db_database = 'rian'; // Nome correto do banco de dados
$db_user = 'root'; // Usuário do banco de dados
$db_pass = ''; // Senha do banco de dados (em branco para o XAMPP padrão)
$db_charset = 'utf8mb4'; // Charset recomendado para evitar problemas com caracteres especiais
$db_port = '3306'; // Porta padrão do MySQL

// DSN (Data Source Name) para PDO
$dsn = "mysql:host=$db_host;dbname=$db_database;charset=$db_charset;port=$db_port";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Lança exceções em caso de erro
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Retorna os resultados como um array associativo
    PDO::ATTR_EMULATE_PREPARES => false, // Desativa a emulação de prepared statements
];

try {
    // Tentando conectar ao banco de dados
    $pdo = new PDO($dsn, $db_user, $db_pass, $options);
    echo "Conexão estabelecida com sucesso!";
} catch (PDOException $e) {
    // Caso ocorra algum erro na conexão
    die('Erro na conexão: ' . $e->getMessage());
}
?>
