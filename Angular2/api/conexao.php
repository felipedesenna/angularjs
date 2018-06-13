<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$host = 'localhost';
$user = 'root';
$pass = 'vertrigo';
$banco = 'lista_telefonica';

$conn = new mysqli($host, $user, $pass, $banco);

$result = $conn->query("SELECT * FROM contatos");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"Nome":"' . $rs["NOME"] . '",';
    $outp .= '"Telefone":"' . $rs["TELEFONE"] . '",';
    $outp .= '"Data":"' . $rs["DATA"] . '",';
    $outp .= '"Operadora":"' . $rs["OPERADORA"] . '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>
