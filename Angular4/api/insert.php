<?php
require_once 'conexao.php';

$data = json_decode(file_get_contents("php://input"));

$nome = mysqli_real_escape_string($conn, $data->nome);
$telefone = mysqli_real_escape_string($conn, $data->telefone);
$data = date('d/m/Y', strtotime(mysqli_real_escape_string($conn, $data->data)));
$operadora = mysqli_real_escape_string($conn, $data->operadora);

$query = "INSERT into contatos (nome,telefone,data,operadora) VALUES ('$nome','$telefone','$data','$operadora')";

mysqli_query($conn, $query);
echo true;
?>
