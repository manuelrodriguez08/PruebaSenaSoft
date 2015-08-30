<?php

session_start();
session_destroy();
session_abort();


$_SESSION['usuario']="";
$_SESSION['contrasena']="";


echo "<html> 
            
                <head>
                <meta http-equiv='REFRESH' content='0;url=index.php'> </head>
        </html>";
?>

