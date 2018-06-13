<?php
/*$host = 'localhost';
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

echo json_encode($response);*/
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
