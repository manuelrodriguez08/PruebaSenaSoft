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
             <a href='CerrarSesion.php?usuario=""&contrasena=""' > Cerrar Sesion</a>
        <?php
        $conexion = mysql_connect("localhost","rodriguez","rodriguez");

mysql_select_db("ejercicio",$conexion);

$mostrar = mysql_query( "SELECT * FROM proyectos");
          
         echo " <h1> PROCESOS GENERALES </h1> ";
         
         echo " <h2> Bienvenido Estos Son Los Principales Datos de la Empresa  </h2> ";
       
         echo " <center> <h1> PROYECTOS</h1> </center>"; 
            
         echo "  <table border=1px width=70%>
                <tr> 
                    
                    <td> Titulo</td>
                    <td> Descripcion</td>
                    <td> Objetivo</td>
                    <td> Fecha Inicio</td>
                    <td> Duracion</td>
                    <td> ID Del Jefe De proyecto</td>
                    
                    
                </tr>";
         
         while($fila = mysql_fetch_array($mostrar)){
              echo "<tr><td>". $fila['titulo']. "</td><td>".$fila['descripcion']."</td><td>". $fila['objetivo']."</td><td>".
                    $fila['fechaInicio']."</td><td>".$fila['duracion']."</td><td>".$fila['jefeProyecto'];
        
            
         }
         echo "</table>";
         
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
                    
                </tr>";
         
         while($fila = mysql_fetch_array($mostrar)){
              echo "<tr><td>". $fila['nombre']. "</td><td>".$fila['apellido']."</td><td>". $fila['fechaNacimiento']."</td><td>".
                    $fila['email']."</td><td>".$fila['direccion']."</td><td>".$fila['telefono']."</td><td>".$fila['tipoUsuario']."</td>";
        
            
         }
         echo "</table>";
         
         $mos = mysql_query( "SELECT * FROM usuarios WHERE tipoUsuario='jefe'");

echo " <center> <h1> JEFES </h1> </center>"; 
            
         echo " <center> <table border=1px width=30%>
                <tr> 
                    <td> ID Jefe</td>
                    <td> Nombre</td>
                    <td> Apellido </td>
                   
                    
                    
                </tr>
         </center>";
         
         while($fila = mysql_fetch_array($mos)){
              echo "<tr><td>".$fila['usuarioID']."</td><td>".$fila['nombre']."</td><td>".$fila['apellido']."</td></tr>";
        
            
         }
        ?>
    </body>
</html>
