<html>
    <head>
        <title></title>
    </head>
    <body>
        <a href='CerrarSesion.php?usuario=""&contrasena=""' > Cerrar Sesion</a>
    </body>
</html>


<?php

$conexion = mysql_connect("localhost","rodriguez","rodriguez");

mysql_select_db("ejercicio",$conexion);


$mostrar = mysql_query( "SELECT * FROM usuarios");
echo " <h1> ADMINISTRADOR</h1> ";


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
         echo "<br>";
         echo "
         <form action='RegistroUsuarios.php'>

            <center><input type='submit' value='Registrar Usuario'></center>
            </form>
          
            ";
          echo "
         <form action='EliminarUsuarios.php'>

            <center><input type='submit' value='Eliminar Usuarios'></center>
            </form>
            ";
         
         //------IMPORTANTE VOY A MOSTRAR OTRA TABLA 
         
         $mostrar = mysql_query( "SELECT * FROM proyectos");
       
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
         echo "<br>";
         echo "
         <form action='RegistrarProyecto.php'>

            <center><input type='submit' value='Registrar Proyecto'></center>
            </form>
            ";
          echo "
         <form action='EliminarProyectos.php'>

            <center><input type='submit' value='Eliminar Proyecto'></center>
            </form>
            ";
          
          //IMPORTANTE TABLA FASES
          
          $mos = mysql_query( "SELECT * FROM fases");

echo " <center> <h1> FASES </h1> </center>"; 
            
         echo "  <table border=1px width=70%>
                <tr> 
                    
                    <td> Nombre</td>
                    <td> Codigo</td>
                    
                    
                </tr>";
         
         while($fila = mysql_fetch_array($mos)){
              echo "<tr><td>". $fila['nombre']. "</td><td>".$fila['codigo'];
        
            
         }
         echo "</table>";
         echo "<br>";
         echo "
         <form action='RegistrarFases.php'>

            <center><input type='submit' value='Registrar Fase'></center>
            </form>
          
            ";
          echo "
         <form action='EliminarFases.php'>

            <center><input type='submit' value='Eliminar Fase'></center>
            </form>
            ";
          
          
          //IMPORTANTE TABLA 
          
           $mos = mysql_query( "SELECT * FROM tareas");

echo " <center> <h1> TAREAS </h1> </center>"; 
            
         echo "  <table border=1px width=70%>
                <tr> 
                    
                    <td> Nombre</td>
                    <td> Codigo</td>
                    <td> Descripcion </td>
                    
                    
                </tr>";
         
         while($fila = mysql_fetch_array($mos)){
              echo "<tr><td>". $fila['nombre']. "</td><td>".$fila['codigo']. "</td><td>".$fila['descripcion'];
        
            
         }
         echo "</table>";
         echo "<br>";
         echo "
         <form action='RegistrarTareas.php'>

            <center><input type='submit' value='Registrar Tarea'></center>
            </form>
          
            ";
          echo "
         <form action='EliminarTareas.php'>

            <center><input type='submit' value='Eliminar Tarea'></center>
            </form>
            ";
        
          
?>
