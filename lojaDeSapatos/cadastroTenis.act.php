<?php
include('connect.php');

extract($_POST);
extract($_FILES);

$destino = "fotos/" . md5(time()) . ".jpg";
move_uploaded_file($imagem['tmp_name'], $destino);

$msg = "";

if (mysqli_query($conn, "INSERT INTO tb_tenis (Nome, Marca, Categoria, Tamanho, Cor, Material, Preço, Estoque, Foto) VALUES ('$nome', '$marca', '$categoria', '$tamanho', '$cor', '$material', '$preco', '$estoque', '$destino')")) {
    $msg = "Registro criado com sucesso!";
} else {
    $msg = "Erro ao gravar registro: " . mysqli_error($conn);
}

session_start();
$_SESSION['msg'] = $msg;

header("location: cadastroTenis.php");
?>