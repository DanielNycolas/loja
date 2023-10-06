<?php include('head.php'); ?>
<body>
    <?php 
    include('connect.php');
    $ID = $_GET['ID'];
    $busca = mysqli_query($conn, "SELECT * FROM `tb_tenis` WHERE `ID` = '$ID'");
    $tenis = mysqli_fetch_array($busca);
    @session_start();
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
    <div class="container">
        <div class="formulario">
        <h2>Cadastro de Tênis</h2>
        <form action="atualizar.act.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="ID" id="ID" value="<?php echo $tenis['ID'];?>">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="<?php echo $tenis['Nome'];?>"></p><br>

        <label for="marca">Marca:</label>
        <input type="text" name="marca" id="marca" value="<?php echo $tenis['Marca'];?>"></p><br>

        <label for="categoria">Categoria:</label>
        <input type="text" name="categoria" id="categoria" value="<?php echo $tenis['Categoria'];?>"></p><br>

        <label for="tamanho">Tamanho:</label>
        <input type="text" name="tamanho" id="tamanho" value="<?php echo $tenis['Tamanho'];?>"></p><br>

        <label for="cor">Cor:</label>
        <input type="text" name="cor" id="cor" value="<?php echo $tenis['Cor'];?>"></p><br>

        <label for="material">Material:</label>
        <input type="text" name="material" id="material" value="<?php echo $tenis['Material'];?>"></p><br>

        <label for="preco">Preço:</label>
        <input type="number" name="preco" id="preco" value="<?php echo $tenis['Preço'];?>"></p><br>

        <label for="estoque">Estoque:</label>
        <input type="number" name="estoque" id="estoque" value="<?php echo $tenis['Estoque'];?>"></p><br>

        <label for="destino">Imagem:</label>
        <input type="file" name="imagem" id="imagem" accept="image/*" value="<?php echo $tenis['Foto'];?>"></p><br>

        <input type="submit" value="Atualizar" id="c">
        </form>
    </div>
</div>
</body>
</html>