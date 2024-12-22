<?php
$servername = "localhost"; // Endereço do servidor de banco de dados
$username = "root";        // Nome de usuário do banco de dados
$password = "";            // Senha do banco de dados
$dbname = "felixinaciocft";      // Nome do banco de dados

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>