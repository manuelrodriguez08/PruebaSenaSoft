<?php
$conexion = mysql_connect("localhost","rodriguez","rodriguez");

mysql_select_db("ejercicio",$conexion);


$titu = $_GET['nombre'];
$des= $_GET['apellido'];
$obj = $_GET['fechaNacimiento'];
$fec= $_GET['email'];
$dur = $_GET['direccion'];
$tel = $_GET['telefono'];
$jef = $_GET['tipoUsuario'];

if($mostrar = mysql_query( "DELETE FROM usuarios WHERE nombre='$titu' AND apellido='$des' AND fechaNacimiento='$obj' AND email='$fec' AND direccion='$dur' AND telefono='$tel'  AND tipoUsuario='$jef'")){
    
    echo "Si Borro";
    
}else {
    
    echo "no borro: ".  mysql_error();
}

echo "<br>";
echo "<br>";
echo "<form action='MostrarTodo.php' > <input type='submit' value='Menu Principal'></form>";


?>

