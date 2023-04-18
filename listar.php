<?php
include("conexion.php");
$con = conexion();

$doc = $_GET["doc"];
$nom = $_GET["nom"];
$ape = $_GET["ape"];
$dir = $_GET["dir"];
$cel = $_GET["cel"];

$sql = "select * from persona";
pg_query($con, $sql);

echo "Documento: ", $doc;
echo "Nombre: ", $nom;
echo "Apellido", $ape;
echo "Direccion", $dir;
echo "Celular", $cel;
?>