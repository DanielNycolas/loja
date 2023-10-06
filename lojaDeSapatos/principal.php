<?php include('head.php'); ?>
<?php include('connect.php'); ?>
<?php include('menu.php'); ?>

<div class="bottom-layer">
        <ul>
            <li><a href="#">Página Inicial</a></li>
            <li><a href="#">Corinthians</a></li>
            <li><a href="#">Produtos</a></li>
            <li><a href="#">Promoções</a></li>
            <li><a href="#">Contato</a></li>
        </ul>
    </div>
    <div class="promotion-section">
    <img src="assets/imgs/banner3.jpg" alt="Promoção">
    <p>ATÉ 30% DE DESCONTO</p>
    <p class="news">NOVOS MODELOS</p>
    <p class="exclusives">EXCLUSIVOS</p>
</div>
<div class="catalog-section">
    <div class="catalog-item">
        <img src="assets/imgs/lancamentos.svg" alt="Categoria 1">
        <div class="overlay">
            <h3>Lançamentos</h3>
        </div>
        <div class="discount-seal">Até 20% off</div>
    </div>
    <div class="catalog-item">
        <img src="assets/imgs/025246ND.svg" alt="Categoria 2">
        <div class="overlay">
            <h3>Femininos</h3>
        </div>
        <div class="discount-seal">Até 15% off</div>
    </div>
    <div class="catalog-item">
        <img src="assets/imgs/masculino.svg" alt="Categoria 3">
        <div class="overlay">
            <h3>Masculinos</h3>
        </div>
        <div class="discount-seal">Até 15% off</div>
    </div>
</div>

<div class="section-title">
    <h1>Modelos Disponíveis</h1>
    <h2>Escolha o Seu Estilo</h2>
</div>
<div class="product-section">

<?php
include('connect.php');

$sql = "SELECT * FROM tb_tenis";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Erro na consulta SQL: " . mysqli_error($conn));
}


if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="product">';
        echo '<img src="' . $row["Foto"] . '" alt="' . $row["Nome"] . '">';
        echo '<div class="product-details">';
        echo '<h4>' . $row["Categoria"] . '</h4>';
        echo '<h2>' . $row["Nome"] . '</h2>';
        echo '<p>Marca: ' . $row["Marca"] . '</p>';
        echo '<p>Cor: ' . $row["Cor"] . '</p>';
        echo '<p>Preço: R$ ' . $row["Preço"] . '</p>';
        
        // Botões de Atualizar e Apagar
        echo '<div class="action-buttons">';
        echo "<a href='atualizar.php?ID=$row[ID]'><i class='fa-solid fa-pencil'></i></a>";
        echo "<a href='javascript:excluir($row[ID])'><i class='fa-solid fa-eraser'></i></a>";
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "Nenhum tênis encontrado";
}
?>

</div>
<footer style="background-color: #454545; color: #fff; padding: 10px; text-align: center;">
  <p>&copy; 2023 BankStore. Todos os direitos reservados.</p>
</footer>
</body>
</html>