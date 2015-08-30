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
        $conexion = mysql_connect("localhost","rodriguez","rodriguez");
            
        mysql_query("CREATE DATABASE ejercicio",$conexion);
        
        
         
        ?>
    </body>
</html>
