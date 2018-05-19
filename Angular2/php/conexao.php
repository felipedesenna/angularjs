<?php
$host = 'localhost';
$user = 'root';
$pass = 'vertrigo';
$banco = 'lista_telefonica';

$conn = mysqli_connect($host, $user, $pass, $banco) or die(mysqli_error());

$query = "SELECT * FROM contatos" or die(mysqli_error());

$result = $conn->query($query);
$response = array();

 while ($row = mysqli_fetch_array($result)) {
     $json["id"] = $row[0];
     $json["nome"] = $row[1];
     $json["telefone"] = $row[2];
     $json["data"] = $row[3];
     $json["operadora"] = $row[4];
     array_push($response, $json);
}

echo json_encode($response);
?>
