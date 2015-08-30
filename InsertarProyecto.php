<?php

$conexion = mysql_connect("localhost","rodriguez","rodriguez");
            

$titu = $_POST['titulo'];
$des= $_POST['descripcion'];
$obj = $_POST['objetivo'];
$fec= $_POST['fecha'];
$dur = $_POST['duracion'];
$jef = $_POST['jefes'];




mysql_select_db("ejercicio",$conexion);

$sql = "INSERT INTO proyectos(titulo,descripcion,objetivo,fechaInicio,duracion,jefeProyecto) VALUES('$titu','$des','$obj','$fec','$dur','$jef')";

if(mysql_query($sql)){
    echo "Se cargaron los datos a la tabla";
}else{
    echo 'no se pudo llenar la tabla debido a:'.  mysql_error();
}

echo "<br>";
echo "<br>";
echo "<form action='MostrarTodo.php' > <input type='submit' value='Menu Principal'></form>";

?>