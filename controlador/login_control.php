<?php

  //llama todas las hojas de la pagina web
  class login
  {
    function login1()
    {
        //llama al archivo de inicio de la pagina 
        include("vista/paginas/login.php");
    }//fin funcion principal  

    function login2()
    {
      require 'base_datos/conexion.php';
      session_start();

        $usuario=$_POST['username'];
        $clave=$_POST['pass'];

        $q= "select count(*) as contar from EMPLEADOS where usuario='$usuario' and clave='$clave'";
        $consulta= mysqli_query($conexion,$q);
        $array = mysqli_fetch_array($consulta);
        if($array['contar']>0){
          $_SESSION["username"] = $usuario;
          include("vista/paginas/entrada.php");
        }
        else
        {
          include("vista/paginas/acu_pedido.php");
        }
        //llama al archivo de inicio de la pagina 
    }//fin funcion papeleria

    function inter()
    {
      
      include("vista/paginas/entrada.php");
      
    }//fin funcion principal 
    
    function login3()
    {
      session_start();

      session_destroy();
      
      include("vista/paginas/acu_pedido.php");
      exit();
    }//fin funcion principal 
   

  }//fin clase home 
  



?>