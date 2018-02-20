<?php

include ("../includes/listados.php");
//leerOrdenadoC1("../datos/ordenado.txt");
$datosFichero= generaAssocDesdeDesordenado("../datos/desordenado.txt");
//var_dump($datosFichero);

foreach ($datosFichero as $k => $v) {
    echo"<ul> $k :";
    foreach ($v as $v1)
        echo "<li>$v1</li>";
    echo "</ul>";
}