<?php


include_once ("modelo/Estudiante.php");

//use Datos\Estudiante ;
use Datos\Persona as P;

$per1 = new P("44333211G", "Paco","19930215",'S',183);
$est1 = new Datos\Estudiante(123,"20180612","44333211G", "Paco","19930215",'S',183);


echo "Numero de personas : ". P::getContadorP()."<BR/>";
echo "Numero de estudiantes :". Datos\Estudiante::getContadorE();

//var_dump($est1);
