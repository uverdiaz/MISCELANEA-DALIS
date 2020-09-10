<?php
require 'conexion.php';

session_start();

$usuario=$_POST['username'];
$clave=$_POST['pass'];

$q= "select count(*) as contar from EMPLEADOS where usuario='$usuario' and clave='$clave'";
$consulta= mysqli_query($conexion,$q);
$array = mysqli_fetch_array($consulta);

if($array['contar']>0){
    $_SESSION["username"] = $usuario;
    header("location: ../entrada.php");
}
else
{
    header("location: ../pedido.php");
}


?>