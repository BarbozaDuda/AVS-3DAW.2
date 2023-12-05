<?php
$servername = 'localhost';
$username = 'onlyDudinha';
$password = '123';
$dbname = 'provaAvs';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die('Erro na conexão com o banco de dados: ' . $conn->connect_error);
}

$cpf = $_POST['cpf'];
$novoEmp = $_POST['novoEmp'];

$sql = "UPDATE emprestimos SET salaempr = $novoEmp WHERE cpf = '$cpf'";

if ($conn->query($sql) === TRUE) {
    echo 'Emprestimo alterado com sucesso!';
} else {
    echo 'Erro ao alterar emprestimo

$conn->close();
?>