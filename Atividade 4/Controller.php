<?php

$nome = $_POST["nome"];
$nota1 = (float)$_POST["n1"];
$nota2 = (float)$_POST["n2"];

$media = ($nota1 + $nota2) / 2;

$resultado = "";

if ($media >= 7) {
    $resultado = "Aprovado!";
} elseif ($media >= 5 && $media < 7) {
    $resultado = "Recuperação";
} else {
    $resultado = "Reprovado!";
}

include "view_saida.php";

?>