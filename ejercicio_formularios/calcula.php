<?php

echo $_POST["Nombre"]."".$_POST["apellidos"]."".$_POST["Ciclo"]."".$_POST["Curso"]."<br>";

$notamedia=($_POST["PROG"]+$_POST["ED"]+$_POST["LLMM"]+$_POST["BBDD"])/4;
echo "La nota media es: " .$notamedia ."<br>";


$notamax=max($_POST["PROG"],$_POST["ED"],$_POST["LLMM"],$_POST["BBDD"]);
$notamin=min($_POST["PROG"],$_POST["ED"],$_POST["LLMM"],$_POST["BBDD"]);

echo "La nota mas baja es " .$notamin ."<br>";
echo "La nota mas alta es " .$notamax;

?>
