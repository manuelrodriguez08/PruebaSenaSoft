<?php

$conexion = mysql_connect("localhost","rodriguez","rodriguez");

mysql_select_db("ejercicio",$conexion);


$mostrar = mysql_query( "SELECT * FROM usuarios");

echo " <center> <h1> USUARIOS</h1> </center>"; 
            
         echo "  <table border=1px width=70%>
                <tr> 
                    
                    <td> Nombre</td>
                    <td> Apellido</td>
                    <td> Fecha Nacimiento</td>
                    <td> Email</td>
                    <td> Direccion</td>
                    <td> Telefono</td>
                    <td> Tipo de Usuario</td>
                    <td></td>
                    
                </tr>";
         
         while($fila = mysql_fetch_array($mostrar)){
              echo "<tr><td>". $fila['nombre']. "</td><td>".$fila['apellido']."</td><td>".$fila['fechaNacimiento']."</td><td>".
                    $fila['email']."</td><td>".$fila['direccion']."</td><td>".$fila['telefono']."</td><td>".$fila['tipoUsuario']
                    ."</td><td><a href='EliminarUs.php?usuarioID=".$fila['usuarioID']."&nombre=".$fila['nombre']."&apellido=".$fila['apellido']."&fechaNacimiento=".$fila['fechaNacimiento'].""
                      . "&email=".$fila['email']."&direccion=".$fila['direccion']."&telefono=".$fila['telefono']."&tipoUsuario=".$fila['tipoUsuario']."'>Eliminar</a></td></tr>";
        
            
         }
         
         
         
         echo "</table>";
         
         echo "<br>";
echo "<br>";
echo "<center><form action='MostrarTodo.php' > <input type='submit' value='Menu Principal'></form></center>";
        




?>

