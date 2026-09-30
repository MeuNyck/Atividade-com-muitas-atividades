<?php

$celsius = (float)$_POST["celsius"];
$fahrenheit = ($celsius * 9 / 5) + 32;

include "view_saida.php";
?>