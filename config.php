<?php
$host = 'localhost';
$dbname = 'meusite';
$usuario = 'root';
$senha = '';

$conn = new mysqli($host, $usuario, $senha, $dbname);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
?>
