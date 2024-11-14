<?php
$usuario = 'root';
$senha = '';
$database = 'db_ods';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if ($mysqli->error) {
    die("banco de dados trolou: " . $mysqli->error); 
}
?>