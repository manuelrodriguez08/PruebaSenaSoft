

<?php

$conexion = mysql_connect("localhost","rodriguez","rodriguez");
            

$usu = $_POST['usuario'];
$con = $_POST['contra'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$fechaN = $_POST['fechan'];
$email = $_POST['email'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$categoria = $_POST['tipo'];




mysql_select_db("ejercicio",$conexion);

$sql = "INSERT INTO usuarios(usuario,contrasena,nombre,apellido,fechaNacimiento,email,direccion,telefono,tipoUsuario) VALUES('$usu','$con','$nombre','$apellido','$fechaN','$email','$direccion',$telefono,'$categoria')";

if(mysql_query($sql)){
    echo "Se cargaron los datos a la tabla";
}else{
    echo 'no se pudo llenar la tabla debido a:'.  mysql_error();
}


echo "<br>";
echo "<br>";
echo "<form action='MostrarTodo.php' > <input type='submit' value='Menu Principal'></form>";


?>
       