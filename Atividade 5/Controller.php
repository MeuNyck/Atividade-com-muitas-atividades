<?php

$nome = $_POST["nome"];
$nomeP = $_POST["nomep"];
$preco = (float)$_POST["preco"];
$quantidade = (int)$_POST["quantidade"];

$subtotal = $preco * $quantidade;
$desconto = 0;

if ($subtotal >= 200) {
    $desconto = $subtotal * 0.10;
}
$total = $subtotal - $desconto;

include "view_saida.php";
?>