<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "bd_lojasapatos";

$conn = @mysqli_connect($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}
?>