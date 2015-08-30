<?php

$conexion = mysql_connect("localhost","rodriguez","rodriguez");

mysql_select_db("ejercicio",$conexion);


$titu = $_GET['titulo'];
$des= $_GET['descripcion'];
$obj = $_GET['objetivo'];
$fec= $_GET['fechainicio'];
$dur = $_GET['duracion'];
$tel = $_GET['jefeproyecto'];


if($mostrar = mysql_query( "DELETE FROM proyectos WHERE titulo='$titu' AND descripcion='$des' AND objetivo='$obj' AND fechainicio='$fec' AND duracion='$dur' AND jefeproyecto='$tel'")){
    
    echo "Si Borro";
    
}else {
    
    echo "no borro: ".  mysql_error();
}

echo "<br>";
echo "<br>";
echo "<form action='MostrarTodo.php' > <input type='submit' value='Menu Principal'></form>";

?>
