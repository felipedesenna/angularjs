<?php
require_once 'conexao.php';

$data = json_decode(file_get_contents("php://input"));

$query = "DELETE FROM contatos WHERE idcontatos=$data->del_id";

mysqli_query($conn, $query);
echo true;
?>
