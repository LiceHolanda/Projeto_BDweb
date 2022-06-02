<?php

$usuario = 'root';
$password = '';
$database = 'login';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $password, $database);

if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}
//else{
//    echo "Conexao ok";
//
//}
?>