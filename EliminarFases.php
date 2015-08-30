<?php
$conexion = mysql_connect("localhost","rodriguez","rodriguez");

mysql_select_db("ejercicio",$conexion);

$mos = mysql_query( "SELECT * FROM fases");

echo " <center> <h1> FASES </h1> </center>"; 
            
         echo "  <table border=1px width=70%>
                <tr> 
                    
                    <td> Nombre</td>
                    <td> Codigo</td>
                    <td></td>
                    
                    
                </tr>";
         
         while($fila = mysql_fetch_array($mos)){
              echo "<tr><td>". $fila['nombre']. "</td><td>".$fila['codigo']."</td><td><a href='EliminarFa.php?nombre=".$fila['nombre']."&codigo=".$fila['codigo']."'>Eliminar</a></td></tr>";
        
            
         }
         
         echo "</table>";
         
          echo "<br>";
echo "<br>";
echo "<center><form action='MostrarTodo.php' > <input type='submit' value='Menu Principal'></form></center>";
?>
