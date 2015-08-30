<?php
 echo " <center> <h1> REGISTRAR NUEVO USUARIO</h1> </center>"; 
            
         echo "  <table border=1px width=70%>
                <tr> 
                    <td> Usuario</td>
                    <td> Contrasena</td>
                    <td> Nombre</td>
                    <td> Apellido</td>
                    <td> Fecha Nacimiento</td>
                    <td> Email</td>
                    <td> Direccion</td>
                    <td> Telefono</td>
                    <td> Tipo de Usuario</td>
                    <td> </td>
                </tr>";
            
            
             
              echo "  <tr>
                                             
                   <form action='InsertarUsuario.php' method='POST'>
                                        <td> <input type='text' name='usuario'></td>
                                        <td> <input type='password' name='contra'></td>
                                        <td> <input type='text' name='nombre'></td>
                                        <td> <input type='text' name='apellido'></td>
                                        <td> <input type='date' name='fechan'></td>
                                        <td> <input type='text' name='email'></td>
                                         <td> <input type='text' name='direccion'></td>
                                         <td> <input type='text' name='telefono'></td>
                                         <td> <select  name='tipo'> 
                                                                        <option value='jefe' >Jefe</option>
                                                                <option value='analista' >Analista</option>
                                                                                <option value='desarrollador' >Desarrolador</option>
                                                                         <option value='tester' >Tester</option>
                                                         </select>
                                             </td>
                                             <td> <input type='submit' value='Registrar' ></td> 
                             
                </tr></form>";
              
            
            echo "</table>";
            
            echo "<br>";
echo "<br>";
echo "<center><form action='MostrarTodo.php' > <input type='submit' value='Menu Principal'></form></center>";
?>

