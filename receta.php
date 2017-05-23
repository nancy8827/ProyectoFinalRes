<?php
 
 include("conexion.php");
 header("Access-Control-Allow-Origin: *");

$tiempo = $_POST["tiempo"];
$nombre = $_POST["nombre"];
$tipo = $_POST["tipo"];

$sentencia = "insert into reserva(tiempo, nombre, tipo) 
values('".$tiempo."', '".$nombre."','".$tipo."')";

$query = mysqli_query($conexion,$sentencia);

if($query){
	echo "Se creó la receta italiana ".$placa;
}else{
	echo "No fue posible crear la receta";
}

mysqli_close($conexion);



?>