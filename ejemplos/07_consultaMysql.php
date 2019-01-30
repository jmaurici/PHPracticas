<?php
require "./includes/bd.php";

$db = new DB();
$datosTabla = $db->registrosTodosmysqli("books");
//var_dump($datosTabla);
Header("Content-type:application/json");
$json = json_encode($datosTabla);
echo $json;

?>