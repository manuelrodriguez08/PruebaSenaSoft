<?php

$conexion = mysql_connect("localhost","rodriguez","rodriguez");
            

$nom = $_POST['nombre'];
$cog = $_POST['codigo'];
$d = $_POST['descripcion'];





mysql_select_db("ejercicio",$conexion);

$sql = "INSERT INTO tareas(nombre,codigo,descripcion) VALUES('$nom','$cog','$d')";

if(mysql_query($sql)){
    echo "Se cargaron los datos a la tabla";
}else{
    echo 'no se pudo llenar la tabla debido a:'.  mysql_error();
}

echo "<br>";
echo "<br>";
echo "<form action='MostrarTodo.php' > <input type='submit' value='Menu Principal'></form>";

?>

