<?php

$numero1 = (float)$_POST["n1"];
$numero2 = (float)$_POST["n2"];
$operacao = $_POST["calculo"];

switch ($operacao) {
    case "somar":
        $resultado = $numero1 + $numero2;
        break;
    case "subtrair":
        $resultado = $numero1 - $numero2;
        break;
    case "multiplicar":
        $resultado = $numero1 * $numero2;
        break;
    case "dividir":
        if ($numero2 == 0) {
            $resultado = "Não é possível dividir por zero!";
        } else {
            $resultado = $numero1 / $numero2;
        }
        break;
    default:
        $resultado = "Operação inválida";
}
include "view_saida.php";
?>