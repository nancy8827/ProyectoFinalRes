<?php
header("Access-Control-Allow-Origin: *");
include("conexion.php");


$sentencia = "select * from receta";


$query = mysqli_query($conexion,$sentencia);

$cantidadRegistros = mysqli_num_rows($query);

if($cantidadRegistros > 0){

	while($row = mysqli_fetch_array($query)){
		echo "tiempo: ".$row["tiempo"]."<br/>";
		echo "nombre: ".$row["nombre"]."<br/>";
		echo "tipo: ".$row["tipo"]."<br/><br/>";

	}

}else{
	echo "No hay registros";
}

mysqli_close($conexion);
?>