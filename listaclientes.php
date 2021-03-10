<html>
    
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">   
</head>
<body>
<div class="container">
<?php
include("conect.php");
pintaMenu();
$conexion=conectarse();
$consulta = "SELECT * FROM CLIENTES";
$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
/********************* CÁLCULO DEL NÚMERO DE PÁGINAS *****************/
$num_total_registros = mysqli_num_rows($resultado);
$TAMANO_PAGINA = 3;
if ( !isset($_GET["pagina"])) {
	$inicio = 0; //inicio es el OFFSET
	$pagina=1;
} else {
	$pagina = $_GET["pagina"];
	$inicio=($pagina-1)*$TAMANO_PAGINA;
}
$total_paginas = ceil($num_total_registros/$TAMANO_PAGINA );
echo "<p>Se muestran páginas de $TAMANO_PAGINA registros</p>";
echo "<p>Mostrando página $pagina de $total_paginas</p>";
$cadena_limit = " limit $inicio, $TAMANO_PAGINA";
$consulta = "SELECT * FROM CLIENTES".$cadena_limit;
echo $consulta;
$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos paginada");
/********* FIN DE CÁLCULO DE PÁGINA *****************/
echo "<table class='table table-hover'>";
echo "<tr><th>Id_cliente</th><th>Nombre</th><th>Ciudad</th><th>Edad</th><th>Fecha de Nacimiento</th></tr>";
while ($fila = mysqli_fetch_array( $resultado ))
{
 echo "<tr>";
 $cadena= "<td>" . $fila['idcliente'] . "</td><td>" . $fila['nombre'] . "</td><td>" . $fila['ciudad'] . "</td><td>".$fila['edad']."</td><td>".$fila['fecha_nacimiento']."</td>";
 $enlace ="<a onclick='return Confirmacion()' href=borracliente.php?idcliente=" . $fila['idcliente'].">Borrar</a>";
 $cadena = $cadena."<td>$enlace</td>";
 $enlaceActualiza ="<a href=actualizacliente.php?idcliente=" . $fila['idcliente'].">  Actualiza</a>";
 $cadena = $cadena."<td>$enlaceActualiza</td>";
 echo $cadena;
 echo "</tr>";
}
echo "</table>";

mysqli_close( $conexion );
//DESPUES DE IMPRIMIR LA TABLA MUESTRA LOS ENLACES A LAS PÁGINAS
if ( $total_paginas >1 ) { 
	for ($i=1;$i<$total_paginas;$i++){

	}
}


?>
<!-- script confirmación de borrado -->
<script>
	function Confirmacion(){
		if ( confirm('¿Está seguro de eliminar el cliente?')==true ) {
			alert("El cliente se borrará");
			return true;
	    } else {
			return false;
		}
	}
</script>	
	
</div>
</body>
</html>
