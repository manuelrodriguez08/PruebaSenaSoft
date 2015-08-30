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
            $tipo = $fila['tipoUsuario'];
            
            if($usuario == $usuariobasedatos && $contrasena == $contrasenabasedatos && $tipo  == 'ADMINISTRADOR'){
                
                $_SESSION['usuario']= $usuario;
                $_SESSION['contrasena']= $contrasena;
                
                echo "<html> 
            
                <head>
                <meta http-equiv='REFRESH' content='0;url=MostrarTodo.php'> </head>
        </html>";
            }
                
                if($usuario == $usuariobasedatos && $contrasena == $contrasenabasedatos && $tipo  == 'jefe'){
                
                $_SESSION['usuario']= $usuario;
                $_SESSION['contrasena']= $contrasena;
                
                echo "<html> 
            
                <head>
                <meta http-equiv='REFRESH' content='0;url=Iniciojefe.php'> </head>
        </html>";
                
                
            }
            if($usuario == $usuariobasedatos && $contrasena == $contrasenabasedatos && $tipo  == 'analista'){
                
                $_SESSION['usuario']= $usuario;
                $_SESSION['contrasena']= $contrasena;
                
                echo "<html> 
            
                <head>
                <meta http-equiv='REFRESH' content='0;url=Principal.php'> </head>
        </html>";
                
                
            }
            
            if($usuario == $usuariobasedatos && $contrasena == $contrasenabasedatos && $tipo  == 'desarrolador'){
                
                $_SESSION['usuario']= $usuario;
                $_SESSION['contrasena']= $contrasena;
                
                echo "<html> 
            
                <head>
                <meta http-equiv='REFRESH' content='0;url=Principal.php'> </head>
        </html>";
                
                
            }
            
            if($usuario == $usuariobasedatos && $contrasena == $contrasenabasedatos && $tipo  == 'tester'){
                
                $_SESSION['usuario']= $usuario;
                $_SESSION['contrasena']= $contrasena;
                
                echo "<html> 
            
                <head>
                <meta http-equiv='REFRESH' content='0;url=Principal.php'> </head>
        </html>";
                
                
            }
            else{
                echo "No pude entrar";
                
            }
         }


?>

