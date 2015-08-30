<?php
session_start();
        
        
        $usuario= $_POST['usuario'];
        $contrasena = $_POST['contrasena'];
        
         $con = mysql_connect("localhost","rodriguez","rodriguez");

         
         mysql_select_db('ejercicio', $con);
         
         
         $n = "SELECT * FROM usuarios";
         
         $resultado = mysql_query($n);
         
         while($fila = mysql_fetch_array($resultado)){
             
             $usuariobasedatos= $fila['usuario'];
            $contrasenabasedatos = $fila['contrasena'];
            
            if($usuario == $usuariobasedatos && $contrasena == $contrasenabasedatos){
                
                $_SESSION['usuario']= $usuario;
                $_SESSION['contrasena']= $contrasena;
                
                echo "<html> 
            
                <head>
                <meta http-equiv='REFRESH' content='0;url=MostrarTodo.php'> </head>
        </html>";
                
                
            }else{
                
            }
         }


?>

