<?php
function compruebaLogeado(){
session_start();
echo "<h1>Usuario: ".$_SESSION["usuario_logeado"]."</h1>";
/* 
//
if ( isset($_SESSION["usuario_logeado"])) {
    /* if ( $_SESSION["usuario_logeado"]!="admin" ) {
        header("Location: login.html"); 
 
     }

 }  else { //si no está creada la variable de sesión
   header("Location: login.html"); 
 } */
}

function conectarse() {
$usuario = "admin";
$contrasena = "1234";// puede ser “” 
$servidor = "localhost";
$basededatos = "tienda";
$conexion = mysqli_connect( $servidor, $usuario, $contrasena ) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
return $conexion;

}

function pintaMenu(){
	echo '<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Bosco S.L</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
    <!-- Dropdown -->
    
     <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="listaclientes.php" id="navbardrop" data-toggle="dropdown">
        Clientes
      </a>
      <div class="dropdown-menu">
		   <a class="dropdown-item" href="listaclientes.php">Listar</a>
        <a class="dropdown-item" href="insertacliente.html">Nuevo</a>
        <a class="dropdown-item" href="borracliente.html">Borrar</a>
       
      </div>
    </li>
    
      <li class="nav-item">
        <a class="nav-link" href="#">Artículos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Dónde estámos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contacto</a>
      </li>
      
    </ul>
  </div>
</nav>';
	
	
	}
?>
