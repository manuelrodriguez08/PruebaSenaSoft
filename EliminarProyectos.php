<?php

$conexion = mysql_connect("localhost","rodriguez","rodriguez");

mysql_select_db("ejercicio",$conexion);


$mostrar = mysql_query( "SELECT * FROM proyectos");

echo " <center> <h1> PROYECTOS </h1> </center>"; 
            
         echo "  <table border=1px width=70%>
                <tr> 
                    
                   <td> Titulo</td>
                    <td> Descripcion</td>
                    <td> Objetivo</td>
                    <td> Fecha Inicio</td>
                    <td> Duracion</td>
                    <td> Jefe De proyecto</td>
                    <td></td>
                    
                </tr>";
         
         while($fila = mysql_fetch_array($mostrar)){
              echo "<tr><td>". $fila['titulo']. "</td><td>".$fila['descripcion']."</td><td>".$fila['objetivo']."</td><td>".
                    $fila['fechainicio']."</td><td>".$fila['duracion']."</td><td>".$fila['jefeProyecto']
                    ."</td><td><a href='EliminarPro.php?titulo=".$fila['titulo']."&descripcion=".$fila['descripcion']."&objetivo=".$fila['objetivo'].""
                      . "&fechainicio=".$fila['fechainicio']."&duracion=".$fila['duracion']."&jefeproyecto=".$fila['jefeProyecto']."'>Eliminar</a></td></tr>";
        
            
         }
         
         
         
         echo "</table>";
         
         echo "<br>";
echo "<br>";
echo "<center><form action='MostrarTodo.php' > <input type='submit' value='Menu Principal'></form></center>";

?>

