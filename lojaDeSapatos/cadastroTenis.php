<?php
include('head.php');
include('connect.php');
?>
<body>
<p class="mensagem">
        <?php
        session_start();
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
    </p>
    <div class="container">
        <div class="formulario">
        <h2>Cadastro de Tênis</h2>
        <form action="cadastroTenis.act.php" method="post" enctype="multipart/form-data">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>

        <label for="marca">Marca:</label>
        <input type="text" name="marca" id="marca" required>

        <label for="categoria">Categoria:</label>
        <input type="text" name="categoria" id="categoria" required>

        <label for="tamanho">Tamanho:</label>
        <input type="text" name="tamanho" id="tamanho" required>

        <label for="cor">Cor:</label>
        <input type="text" name="cor" id="cor" required>

        <label for="material">Material:</label>
        <input type="text" name="material" id="material" required>

        <label for="preco">Preço:</label>
        <input type="number" name="preco" id="preco" required>

        <label for="estoque">Estoque:</label>
        <input type="number" name="estoque" id="estoque" required>

        <label for="destino">Imagem:</label>
        <input type="file" name="imagem" id="imagem" accept="image/*" required>

        <input type="submit" value="Cadastrar" id="c">
        </form>
    </div>
</div>
</body>
</html>