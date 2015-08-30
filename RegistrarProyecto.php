<?php
 echo " <center> <h1> REGISTRAR NUEVO PROYECTO</h1> </center>"; 
            
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
            
            
             
              echo "  <tr>
                                             
                   <form action='InsertarProyecto.php' method='POST'>
                                        
                                        <td> <input type='text' name='titulo'></td>
                                        <td> <input type='text' name='descripcion'></td>
                                        <td> <input type='text' name='objetivo'></td>
                                        <td> <input type='date' name='fecha'></td>
                                         <td> <input type='text' name='duracion'></td>
                                         <td> <a href='Jefes.php'>ASIGNAR JEFE</a></td>
                                        <td> <input type='submit' ></td> 
                             
                </tr></form>";
              
              
              
               
               
               
            
            echo "</table>";
            
       
            
            echo "<br>";
echo "<br>";
echo "<center><form action='MostrarTodo.php' > <input type='submit' value='Menu Principal'></form></center>";


?>

