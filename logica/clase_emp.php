<?php
    include("base_datos/conexion_base.php");
    include("logica/clase_persona.php");
  /*crear la clase curso*/ 
  class EMPLEADO extends PERSONA
  {
      /*atributos*/
      private $id;
      private $user;
      private $pass;
      function __construct($nom,$ape,$edad,$salario,$pcod,$user,$pass)
      {
        parent::__construct($nom,$ape,$edad,$salario);

        $this->id=$pcod;
        $this->user=$user;
        $this->pass=$pass;
          
      }
     /* METODOS DE ESCRITURA Y LECTURA*/
     public function setID($pcod)
     {
         $this->id=$pcod;
     }//fin setPkcod_pro

     public function getID()
     {
         return $this->id;
     }//fin getPkcod_pro
     public function setUser($user)
     {
         $this->user=$user;
     }//fin setfkcod_ped

     public function getUser()
     {
         return $this->user;
     }//fin getfkcod_ped

     public function setPass($pass)
     {
         $this->pass=$pass;
     }//fin setfkcod_ped

     public function getPass()
     {
         return $this->pass;
     }//fin getfkcod_ped








     /*METODOS*/
     public function insert_emp()
     {
         /*crear la conexion e instanciar */
         $llamar= new conexion();
            $llamar1= $llamar->con();

         /*generar la consulta */
         $consulta="insert into EMPLEADOS(PKIDEN_EMP,NOM_EMP,APE_EMP,EDAD,SALARIO) values($this->id,'$this->nom','$this->ape',$this->edad,$this->salario);";

         /*procesar consulta */
         $res=mysqli_query($llamar1,$consulta);

         return $res;
         

     }

     /*metodo modificar */
     public function modificar_emp()
     {
          /*crear la conexion e instanciar */
          $llamar= new conexion();
          $llamar1= $llamar->con();

       /*generar la consulta */
       $consulta="update EMPLEADOS set PKIDEN_EMP='$this->id',NOM_EMP='$this->nom',APE_EMP='$this->ape',EDAD='$this->edad',SALARIO='$this->salario' where EMPLEADOS.PKIDEN_EMP='$this->id';";

       /*procesar consulta */
       $res=mysqli_query($llamar1,$consulta);

       return $res;     

     }//fin modificar



     /*metodo eliminar */
     public function eliminar_emp()
     {
          /*crear la conexion e instanciar */
          $llamar= new conexion();
          $llamar1= $llamar->con();

       /*generar la consulta */
       $consulta="delete from EMPLEADOS where PKIDEN_EMP='$this->id';";

       /*procesar consulta */
       $res=mysqli_query($llamar1,$consulta);

       return $res;



     }//fin ELIMINAR


     public function mostrar_empe()
      {
          /*crear la conexion*/
            /*instanciar la clase conexion*/
            $llamar= new conexion();
            $llamar1= $llamar->con();

        
          /*generar la consulta */
          $consulta="select * from EMPLEADOS";
          /*procesar consulta */
          $res=mysqli_query($llamar1,$consulta);

          /*retornar una respuesta */
          return mysqli_fetch_all($res,MYSQLI_ASSOC);
      }//fin reporte_gral


    public function reporte_codigo($act1)
    {
        /*crear la conexion*/
          /*instanciar la clase conexion*/
          $llamar= new conexion();
          $llamar1= $llamar->con();
          /*generar la consulta */
          $consulta="select * from EMPLEADOS where PKIDEN_EMP='$act1'";
          /*procesar consulta */
          $res=mysqli_query($llamar1,$consulta);
        /*respuesta */
        return mysqli_fetch_row($res);
        

    }//fin metodo reporte_codigo

  }//FIN CLASE CLASE_inventario

  