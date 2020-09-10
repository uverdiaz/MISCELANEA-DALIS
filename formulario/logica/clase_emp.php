<?php
    include("../BASE_D/conexion_bd.php");

  /*crear la clase curso*/ 
  class EMPLEADO
  {
      /*atributos*/
      private $id;
      private $nom;
      private $ape;
      private $edad;
      private $salario;
      private $user;
      private $pass;
      function __construct($pcod,$nom,$ape,$edad,$salario,$user,$pass)
      {
        $this->id=$pcod;
        $this->nom=$nom;
        $this->ape=$ape;
        $this->edad=$edad;
        $this->salario=$salario;
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


     public function setNom($nom)
     {
         $this->nom=$nom;
     }//fin setnom_pro

     public function getNom()
     {
         return $this->nom;
     }//fin getnom_pro

     public function setApe($ape)
     {
         $this->ape=$ape;
     }//fin setnum_pro

     public function getApe()
     {
         return $this->ape;
     }//fin getnum_pro


     public function setEdad($edad)
     {
         $this->edad=$edad;
     }//fin setpre_uni

     public function getEdad()
     {
         return $this->edad;
     }//fin getpre_uni

     public function setSalario($salario)
     {
         $this->salario=$salario;
     }//fin setfkcod_ped

     public function getSalario()
     {
         return $this->salario;
     }//fin getfkcod_ped

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



  }//FIN CLASE CLASE_inventario

  class mostrar_emp
  {
      private $mostrar;//hacer recorridos
      public function __construct()
      {
          $this->mostrar=array();
      }
      /* */
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


      
  }//fin clase inventario

?>