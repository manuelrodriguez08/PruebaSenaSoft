<html>
    <head>
        <title></title>
<!--   </head><meta http-equiv='REFRESH' content='0;url=FormularioLogin.php'>-->
    <body> 

        <select id="jefes" name="jefes">
            
        <?php
            $conexion = mysql_connect("localhost","rodriguez","rodriguez");

mysql_select_db("ejercicio",$conexion);

$mostrar = mysql_query( 'SELECT * FROM usuarios where tipoUsuario ="jefe"');

while($fila = mysql_fetch_array($mostrar)){
    
    echo '<option value="'.$fila['usuarioID'].'" >'.$fila['nombre'].'</option>';
}


?>
</select>
    </body>
</html>


