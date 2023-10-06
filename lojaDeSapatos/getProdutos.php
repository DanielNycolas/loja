<?php
include('connect.php');

$query = "SELECT * FROM tb_tenis";
$result = mysqli_query($conn, $query);

$produtos = array();

while ($row = mysqli_fetch_assoc($result)) {
    $produtos[] = $row;
}

echo json_encode($produtos);
?>