<?php
$nome = $_POST["nome"];
$salario = (float)$_POST["salario"];
$cargo = $_POST["cargo"];

$aumento = 0;

switch ($cargo) {
    case "Estagiário":
        $aumento = $salario * 0.10;
        break;
    case "Assistente":
        $aumento = $salario * 0.08;
        break;
    case "Analista":
        $aumento = $salario * 0.05;
        break;
}

$novoSalario = $salario + $aumento;

include "view_saida.php";
?>