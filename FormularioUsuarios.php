<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
       echo "     <center> <h1> USUARIOS</h1> </center> ";
            
            echo "<table border=1px width=100%>
                <tr> 
                    <td> Nombre</td>
                    <td> Apellido</td>
                    <td> Fecha Nacimiento</td>
                    <td> Email</td>
                    <td> Direccion</td>
                    <td> Telefono</td>
                    <td> Tipo de Usuario</td>
                    <td> </td>
                </tr>";
               echo "
                   <tr> 
                <form action='InsertarUsuario.php' method='POST'>                 

                    <td> <input type='text' name='nombre'></td>
                   <td> <input type='text' name='apellido'></td>
                    <td> <input type='text' name='fechan'></td>
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
                    <td> <input type='submit' name='enviar'></td>
                </form>
                </tr>";
                
            
            
            
            
            echo "</table>";
        
        
        
        
        ?>
        
        
    </body>
    
</html>
