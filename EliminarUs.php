<?php
$conexion = mysql_connect("localhost","rodriguez","rodriguez");

mysql_select_db("ejercicio",$conexion);

$user = $_GET['usuarioID'];
$titu = $_GET['nombre'];
$des= $_GET['apellido'];
$obj = $_GET['fechaNacimiento'];
$fec= $_GET['email'];
$dur = $_GET['direccion'];
$tel = $_GET['telefono'];
$jef = $_GET['tipoUsuario'];

if($mostrar = mysql_query( "DELETE FROM usuarios WHERE usuarioID='$user' ")){
    
    echo "Si Borro";
    
}else {
    
    echo "no borro: ".  mysql_error();
}

echo "<br>";
echo "<br>";
echo "<form action='MostrarTodo.php' > <input type='submit' value='Menu Principal'></form>";


?>

