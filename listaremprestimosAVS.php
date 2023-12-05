<?php
$servername = 'localhost';
$username = 'OnlyDudinha';
$password = '123';
$dbname = 'provaAvs';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die('Erro na conexão com o banco de dados: ' . $conn->connect_error);
}

$sql = 'SELECT * FROM emprestimos2 ORDER BY emprestimo, nome';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo 'Nome: ' . $row['nome'] . '<br>';
        echo 'CPF: ' . $row['cpf'] . '<br>';
        echo 'Identidade: ' . $row['identidade'] . '<br>';
        echo 'Email: ' . $row['email'] . '<br>';
        echo 'Emprestimo: ' . $row['emprestimo'] . '<br>';
        echo '<br>';
    }
} else {
    echo 'Nenhum emprestimo encontrado.';
}

$conn->close();
?>