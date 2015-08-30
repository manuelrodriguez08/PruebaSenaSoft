<html>
    <head>
        <title></title>
<!--        <link rel="stylesheet" href="Diseño.css" type="text/css">-->
    </head>
    <body>

        <a href="CerrarSesion.php" > Cerrar Sesion</a>


<?php

session_start();
$conexion = mysql_connect("localhost","rodriguez","rodriguez");
 $x = $_SESSION['usuario'];
 $y = $_SESSION['contrasena'];

mysql_select_db("ejercicio",$conexion);
 $mostrar = mysql_query( 'SELECT * FROM proyectos 

inner join usuarios
on proyectos.jefeProyecto = usuarios.usuarioID

where usuario ="'.$x.'" and contrasena="'.$y.'";');
 
 
 
        echo "  <h1> JEFE</h1>"; 
         echo " <center> <h1> PROYECTOS</h1> </center>"; 
            
         echo "  <table border=1px width=70%>
                <tr> 
                    
                    <td> Titulo</td>
                    <td> Descripcion</td>
                    <td> Objetivo</td>
                    <td> Fecha Inicio</td>
                    <td> Duracion</td>
                    <td> Jefe De proyecto</td>
                    
                    
                </tr>";
         
         while($fila = mysql_fetch_array($mostrar)){
             
              echo "<tr><td>". $fila['titulo']. "</td><td>".$fila['descripcion']."</td><td>". $fila['objetivo']."</td><td>".
                    $fila['fechaInicio']."</td><td>".$fila['duracion']."</td><td>".$fila['nombre'];
        
            
         }
         
         
         echo "</table>";

         
         $mos = mysql_query( "SELECT * FROM fases");

echo " <center> <h1> FASES EN EL PROYECTO </h1> </center>"; 
            
         echo "  <table border=1px width=70%>
                <tr> 
                    
                    <td> Nombre</td>
                    <td> Codigo</td>
                    
                    
                </tr>";
         
         while($fila = mysql_fetch_array($mos)){
              echo "<tr><td>". $fila['nombre']. "</td><td>".$fila['codigo'];
        
            
         }
         echo "</table>";
?>

</body>
</html>