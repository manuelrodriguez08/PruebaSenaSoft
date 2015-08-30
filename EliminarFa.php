<?php
$conexion = mysql_connect("localhost","rodriguez","rodriguez");

mysql_select_db("ejercicio",$conexion);


$titu = $_GET['nombre'];
$des= $_GET['codigo'];




if($mostrar = mysql_query( "DELETE FROM fases WHERE nombre='$titu' AND codigo='$des'")){
    
    echo "Si Borro";
    
}else {
    
    echo "no borro: ".  mysql_error();
}

echo "<br>";
echo "<br>";
echo "<form action='MostrarTodo.php' > <input type='submit' value='Menu Principal'></form>";
?>

