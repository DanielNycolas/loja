<?php
    include('connect.php');
    extract($_POST);
    extract($_FILES);

    $destino = "fotos/" . md5(time()) . ".jpg";
    move_uploaded_file($foto['tmp_name'],$destino);
    
    if (mysqli_query($conn, "UPDATE `tb_tenis` SET `Nome` = '$nome',  `Marca` = '$marca', `Categoria` = '$categoria', `Tamanho` = '$tamanho', `Cor` = '$cor', `Material` = '$material', `Preço` = '$preco', `Estoque` = '$estoque', `Foto` = '$destino' WHERE `tb_tenis`.`ID` = '$ID'")) {
      $msg = "<p class=green>Registro Alterado com Sucesso!</p>";
    }else{
        $msg = "<p class=red>Erro ao Alterar Registro: ". $conn->error . "</p>";
    }
    @session_start();
    $_SESSION['msg'] = $msg;


    header("location:atualizar.php?ID=$ID");
?>
