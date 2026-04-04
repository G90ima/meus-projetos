<?php
header('Content-Type: application/json');

// Configurações de conexão
$host = 'localhost';
$db = 'nome_do_banco';
$user = 'usuario';
$pass = 'senha';

// Cria a conexão
$conn = new mysqli($host, $user, $pass, $db);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Executa a query
$sql = "SELECT * FROM tabela_exemplo";
$result = $conn->query($sql);

$data = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

echo json_encode($data);

$conn->close();
?>
