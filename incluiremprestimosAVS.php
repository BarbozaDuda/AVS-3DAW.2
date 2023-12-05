<?php
$servername = 'localhost';
$username = 'OnlyDudinha';
$password = '123';
$dbname = 'provaAvs';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die('Erro na conexão com o banco de dados: ' . $conn->connect_error);
}

$empres = $_POST['empres'];
$pedinte = $_POST['pedinte'];
$credor = $_POST['credor'];

$sql = "UPDATE eprestimos SET pedinte_1 = '$pedinte', credor_2 = '$credor' WHERE emprestimo = $empres";

if ($conn->query($sql) === TRUE) {
    echo 'Emprestimo incluído com sucesso!';
} else {
    echo 'Erro ao incluir emprestimo: ' . $conn->error;
}

$conn->close();
?>