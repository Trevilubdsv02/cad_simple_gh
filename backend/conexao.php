<?php
/* 

Dados da conexão: 

$host = 'localhost';
$database = 'cad_simples';
$user = 'root';
$password = '';

*/
ini_set('default_charset','UTF-8');
header('Content-Type: text/html; charset=utf-8');
error_reporting(E_ALL);
session_start();
$_SESSION["link"] = new mysqli('localhost', 'root', '', 'cad_simples' );
if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());
?>