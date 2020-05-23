<?php
  $config = require("../../compartido/config.php");
  class conexion
  {
      public static function con()
      {
          try
          {
              $conexion=mysqli_connect($config->db_server,$config->bd_user,$config->db_password,$config->db_name);//servidor,usuario,clave,nom_bd
              return $conexion;
          }//fin try
          catch(Exception $e)
          {
              echo"erro al conectar la base de datos" .$e; 

          }//
      }//fin funcion con
  }//fin clase conexion
  
  /*prueba conexion a bd */
  /*$prueba= new conexion();
  if ($prueba->con()) 
  {
      echo"si hay conexion a la bd dalis 111";
  }
  else
  {
      echo"no se pudo conectar";
  }*/
  
?>