<?php
require_once 'conexao.php';

$data = json_decode(file_get_contents("php://input"));

$name = mysqli_real_escape_string($conn, $data->Nome);
$email = mysqli_real_escape_string($conn, $data->Telefone);
$gender = mysqli_real_escape_string($conn, $data->Data);
$address = mysqli_real_escape_string($conn, $data->Operadora);

$query = "INSERT into contatos (NOME,TELEFONE,DATA,OPERADORA) VALUES ('$Nome','$Telefone','$Data','$Operadora')";

mysqli_query($conn, $query);
echo true;
?>
