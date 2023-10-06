<?php
$ID = $_GET['ID'];
include('connect.php');

if(mysqli_query($conn, "Delete from `tb_tenis` WHERE `ID` = '$ID'")){
    echo "Excluido com sucesso!";
}else{
    echo "Erro ao excluir";
    echo $conn->error;
}