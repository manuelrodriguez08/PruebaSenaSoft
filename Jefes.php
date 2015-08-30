<?php
$conexion = mysql_connect("localhost","rodriguez","rodriguez");
mysql_select_db("ejercicio",$conexion);




$mos = mysql_query( "SELECT * FROM usuarios WHERE tipoUsuario='jefe'");

echo " <center> <h1> JEFES </h1> </center>"; 
            
         echo " <center> <table border=1px width=30%>
                <tr> 
                    
                    <td> Nombre</td>
                    <td> </td>
                   
                    
                    
                </tr>
         </center>";
         
         while($fila = mysql_fetch_array($mos)){
              echo "<tr><td>". $fila['nombre']."</td><td><a href='MostrarTodo.php?nombre=".$fila['nombre']."'>Seleccionar</a></td>";
        
            
         }

?>

