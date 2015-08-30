<?php

$conexion = mysql_connect("localhost","rodriguez","rodriguez");

mysql_select_db("ejercicio",$conexion);

$tarea = $_GET['tareaID'];
$titu = $_GET['nombre'];
$des= $_GET['codigo'];
$ju = $_GET['descripcion'];



if($mostrar = mysql_query( "DELETE FROM tareas WHERE tareaID='$tarea'")){ //nombre='$titu' AND codigo='$des' AND descripcion='$ju'")){
    
    
    echo "Si Borro";
    
}else {
    
    echo "no borro: ".  mysql_error();
}

echo "<br>";
echo "<br>";
echo "<form action='MostrarTodo.php' > <input type='submit' value='Menu Principal'></form>";

?>

