<?php
// Inclui a conexão
include 'conexao.php';

// Verifica se os dados foram enviados via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $designacaoCurso = $_POST['curso-principal'];
    $categoriaCurso = $_POST['categoriacurso'];
    $dataInicio = $_POST['data'];
    $hora = $_POST['hora'];
    $nome = $_POST['nome'];
    $nacionalidade = $_POST['nacionalidade'];
    $província = $_POST['província'];
    $munícipio = $_POST['municipio'];
    $rua  = $_POST['rua'];
    $nºBilhete = $_POST['nºbilhete'];
    $nºPassaporte = $_POST['passaporte'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $habilitacaoLiteraria = $_POST['estudo'];
    $especialidade = $_POST['especialidade'];
    $Ocupacao  = $_POST['ocupacao'];
    $categoriaProfissional = $_POST['categoria'];
    $servico  = $_POST['servico'];
    $telefoneEmpresa = $_POST['telefoneEmpresa'];

    // Prepara a consulta SQL para inserção de dados
    $sql = "INSERT INTO marcacao (designacaoCurso, categoriaCurso,dataInicio,hora,nome,nacionalidade,província,munícipio,rua,nºBilhete,nºPassaporte,email,telefone,habilitacaoLiteraria,especialidade,Ocupacao,categoriaProfissional,servico,telefoneEmpresa  ) VALUES ('$designacaoCurso', '$categoriaCurso', '$dataInicio ', '$hora', '$nome','$nacionalidade', '$província', '$munícipio', '$rua', '$nºBilhete', '$nºPassaporte', '$email', '$telefone', '$habilitacaoLiteraria', '$especialidade', '$Ocupacao', '$categoriaProfissional', '$servico ', '$telefoneEmpresa')";

    // Executa a consulta
    if ($conn->query($sql) === TRUE) {
        header("Location:index.php");
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}
// Fecha a conexão
$conn->close();

?>