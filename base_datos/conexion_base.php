<?php
  
  class conexion
  {
      public static function con()
      {
          try
          {
              $conexion=mysqli_connect("192.168.64.3","root","","proyecto_bases_de_datos");//servidor,usuario,clave,nom_bd
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
      echo"si hay conexion a la bd acudientes1";
  }
  else
  {
      echo"no se pudo conectar";
  }
  */
?>