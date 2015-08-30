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
                                             
                   <form action='Principal.php' method='POST'>
                                        <td> <input type='text' name='usuario'></td>
                                        <td> <input type='password' name='contrasena '></td>
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
                                             <td> <input type='submit' ></td> 
                             
                </tr></form>";
            
            echo "</table>";
            
            
            //IMPORTANTE OTRA TABLA REGISTRAR PROYECTOS
            
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
                                             
                   <form action='Principal.php' method='POST'>
                                        
                                        <td> <input type='text' name='titulo'></td>
                                        <td> <input type='text' name='descripcion'></td>
                                        <td> <input type='text' name='objetivo'></td>
                                        <td> <input type='text' name='fecha'></td>
                                         <td> <input type='text' name='duracion'></td>
                                         <td> <input type='text' name='jefe'></td>
                                        <td> <input type='submit' ></td> 
                             
                </tr></form>";
            
            echo "</table>";
            
            //IMPORTANTE TABLA FASES
            
            echo " <center> <h1> REGISTRAR NUEVO FASE</h1> </center>"; 
            
         echo "  <table border=1px width=70%>
                <tr> 
                     <td> Nombre</td>
                    <td> Codigo</td>
                    
                    <td></td>
                </tr>";
            
            
             
              echo "  <tr>
                                             
                   <form action='InsertarFase.php' method='POST'>
                                        
                                        <td> <input type='text' name='nombre'></td>
                                        <td> <input type='text' name='codigo'></td>
                                        
                                         <td> <input type='submit' ></td> 
                             
                </tr></form>";
            
            echo "</table>";
        ?>
    </body>
</html>
