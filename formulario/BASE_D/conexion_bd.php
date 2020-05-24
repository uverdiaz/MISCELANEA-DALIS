<?php
  $CONFIG = require("../../compartido/config.php");
  class conexion
  {
      public static function con()
      {
          
          try
          {
              global $CONFIG;
              $conexion=mysqli_connect($CONFIG->db_server,$CONFIG->bd_user,$CONFIG->db_password,$CONFIG->db_name);//servidor,usuario,clave,nom_bd
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