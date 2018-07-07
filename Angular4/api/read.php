<?php
require_once 'conexao.php';

$query = "SELECT * FROM contatos ORDER BY idcontatos ASC";

$result = mysqli_query($conn, $query);
$arr = array();

if(mysqli_num_rows($result) != 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $arr[] = $row;
    }
}

echo $json_info = json_encode($arr);
?>
