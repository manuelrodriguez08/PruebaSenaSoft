<?php
$conexion = mysql_connect("localhost","rodriguez","rodriguez");

mysql_select_db("ejercicio",$conexion);

$desa = $_GET['faseID'];
$titu = $_GET['nombre'];
$des= $_GET['codigo'];




if($mostrar = mysql_query( "DELETE FROM fases WHERE  faseID= $desa")){
    
    echo "Si Borro";
    
}else {
    
    echo "no borro: ".  mysql_error();
}

echo "<br>";
echo "<br>";
echo "<form action='MostrarTodo.php' > <input type='submit' value='Menu Principal'></form>";
?>

