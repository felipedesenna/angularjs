<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

/*$host = 'localhost';
$user = 'root';
$pass = 'vertrigo';
$banco = 'lista_telefonica';

$conn = new mysqli($host, $user, $pass, $banco);*/

$conn = new mysqli("localhost", "root", "vertrigo", "lista_telefonica");
?>
