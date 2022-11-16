<?php

// Enlazamos las dependencias necesarias conexion a la base de datos
//y las consultas que realizará el insertar en la tabla
require_once('../model/conexion.php');


// capturamos en variables los valores enviados por el name a traves del metodo POST
// del formulario de registro

$nombre =$_POST['nombre'];
$cedula =$_POST['cedula'];
$salario =$_POST['salario'];
$diurnas =$_POST['diurnas'];
$nocturnas =$_POST['nocturnas'];
$festdiurna =$_POST['festdiurna'];
$festnocturna =$_POST['festnocturna'];

//validamos que los campos esten completos


    if(strlen($nombre)>0 && !is_numeric($cedula)>0 && !is_numeric($salario) && !is_numeric($diurnas)>0 && !is_numeric($nocturnas) && !is_numeric($festdiurna)>0 && !is_numeric($festnocturna)>0){
        //if (strlen($identificacion)>0 && strlen($tipoDoc)>0 && strlen($nombres)>0 && strlen($apellidos)>0 && strlen($telefono)>0 && strlen($fechaNacimiento)>0 && strlen($correo)>0 && strlen($clave)>0 && strlen($confirmarClave)>0 && strlen($rol)>0 && strlen($estado)>0) {
        //confirmamos que las claves concuerden
    
        
        1.0000000000
        }else {
            echo '<script>alert("Las claves ingresadas no concuerdan")</script>';
            echo "<script>location.href='../index.php'</script>";
        }
    
    else{
        echo '<script>alert("Por favor, complete los campos correctamente para registrar")</script>';
        echo "<script>location.href='../index.php'</script>";
    }
    

    

    



?>