<?php


echo " <center> <h1> REGISTRAR NUEVA TAREA</h1> </center>"; 
            
         echo "  <table border=1px width=70%>
                <tr> 
                     <td> Nombre</td>
                    <td> Codigo</td>
                    <td> Descripcion </td>
                    
                    <td></td>
                </tr>";
            
            
             
              echo "  <tr>
                                             
                   <form action='InsertarTarea.php' method='POST'>
                                        
                                        <td> <input type='text' name='nombre'></td>
                                        <td> <input type='text' name='codigo'></td>
                                        <td> <input type='text' name='descripcion'></td>
                                        
                                         <td> <input type='submit' ></td> 
                             
                </tr></form>";
            
            echo "</table>";
            echo "<br>";
echo "<center><form action='MostrarTodo.php' > <input type='submit' value='Menu Principal'></form></center>";
?>
