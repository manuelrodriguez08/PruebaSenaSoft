<?php

$conexion = mysql_connect("localhost","rodriguez","rodriguez");

mysql_select_db("ejercicio",$conexion);

$del = $_GET['proyectoID']; 
$titu = $_GET['titulo'];
$des= $_GET['descripcion'];
$obj = $_GET['objetivo'];
$fec= $_GET['fechainicio'];
$dur = $_GET['duracion'];
$tel = $_GET['jefeproyecto'];


if($mostrar = mysql_query( "DELETE FROM proyectos WHERE proyectoID='$del'")){
    
    echo "Si Borro";
    
}else {
    
    echo "no borro: ".  mysql_error();
}

echo "<br>";
echo "<br>";
echo "<form action='MostrarTodo.php' > <input type='submit' value='Menu Principal'></form>";

?>
