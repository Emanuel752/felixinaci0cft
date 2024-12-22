<?php
// Inclui a conexão
include 'connection.php';

// Verifica se os dados foram enviados via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $morada = $_POST['morada'];
    $nacionalidade = $_POST['nacionalidade'];
    $email = $_POST['email'];
    $descricao = $_POST['descricao'];
    $telefone = $_POST['telefone'];
    $nºbi = $_POST['nºbi'];
    $passaporte = $_POST['passaporte'];
    $curso = $_POST['curso-principal'];
    $categoriacurso = $_POST['curso-subopcoes'];

    // Prepara a consulta SQL para inserção de dados
    $sql = "INSERT INTO marcacao (nome,morada,nacionalidade,email,descricao,telefone,nºbi,passaporte,curso,categoriacurso) VALUES ('$nome', '$morada' , '$nacionalidade', '$email', '$descricao', '$telefone', '$nºbi', '$passaporte', '$curso', '$categoriacurso')";

    // Executa a consulta
    if ($conn->query($sql) === TRUE) {
        echo "Novo registro criado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

// Fecha a conexão
$conn->close();
?>