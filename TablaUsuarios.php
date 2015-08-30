<?php

$conexion = mysql_connect("localhost","rodriguez","rodriguez");


mysql_select_db('ejercicio',$conexion);

$tabla = "CREATE TABLE usuarios
        (
        usuarioID int NOT NULL AUTO_INCREMENT,
        PRIMARY KEY(usuarioID),
        usuario varchar(20),
        contrasena varchar(20),
        nombre varchar(20),
        apellido varchar(20),
        fechaNacimiento varchar(20),
        email varchar(50),
        direccion varchar(50),
        telefono Int,
        tipoUsuario varchar(20)
        
        )";
        
if(mysql_query($tabla)){
    
    echo "se Creo correctamente";
}else{
    echo "no se creo debido a: " .mysql_error();
}
$tabla = "CREATE TABLE proyectos
        (
        proyectoID int NOT NULL AUTO_INCREMENT,
        PRIMARY KEY(proyectoID),
        titulo varchar(100),
        descripcion varchar(100),
        objetivo varchar(100),
        fechaInicio varchar(50),
        telefono Int,
        jefeProyecto varchar(100)
        
        )";
        
if(mysql_query($tabla)){
    
    echo "se Creo correctamente";
}else{
    echo "no se creo debido a: " .mysql_error();
}   

$tabla = "CREATE TABLE fases
        (
        faseID int NOT NULL AUTO_INCREMENT,
        PRIMARY KEY(faseID),
        nombre varchar(100),
        codigo varchar(100)
        
        )";
        
if(mysql_query($tabla)){
    
    echo "se Creo correctamente";
}else{
    echo "no se creo debido a: " .mysql_error();
}


$tabla = "CREATE TABLE tareas
        (
        tareaID int NOT NULL AUTO_INCREMENT,
        PRIMARY KEY(tareaID),
        nombre varchar(100),
        codigo varchar(100),
        descripcion varchar(200)
        
        )";
        
if(mysql_query($tabla)){
    
    echo "se Creo correctamente";
}else{
    echo "no se creo debido a: " .mysql_error();
}
?>

