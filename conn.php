<?php
$host = "localhost"; 
$usuario = "root";
$senha = "";
$banco = "universidade";
 
$conn = mysql_connect($host, $usuario, $senha);
$db = mysql_select_db($banco, $conn);