<?php
    include("../BASE_D/conexion_bd.php");

  /*crear la clase curso*/ 
  class RECIBOS
  {
      /*atributos*/
      private $cod;
      private $mes;
      private $luz;
      private $agua;
      private $fecha_i;
      private $fecha_f;
      private $iden;

      
      function __construct($cod,$mes,$luz,$agua,$fecha_i,$fecha_f,$iden)
      {
        $this->cod=$cod;
        $this->mes=$mes;
        $this->luz=$luz;
        $this->agua=$agua;
        $this->fecha_i=$fecha_i;
        $this->fecha_f=$fecha_f;
        $this->iden=$iden;
        
          
      }
     /* METODOS DE ESCRITURA Y LECTURA*/
     public function setCod($cod)
     {
         $this->cod=$cod;
     }//fin setPkcod_pro

     public function getCod()
     {
         return $this->cod;
     }//fin getPkcod_pro

     public function setMes($mes)
     {
         $this->mes=$mes;
     }//fin setIden_cli

     public function getMes()
     {
         return $this->mes;
     }//fin getIden_cli



     public function setLuz($luz)
     {
         $this->luz=$luz;
     }//fin setnom_pro

     public function getLuz()
     {
         return $this->luz;
     }//fin getnom_pro

     public function setAgua($agua)
     {
         $this->agua=$agua;
     }//fin setnum_pro

     public function getAgua()
     {
         return $this->agua;
     }//fin getnum_pro


     public function setFecha_i($fecha_i)
     {
         $this->fecha_i=$fecha_i;
     }//fin setnum_pro

     public function getFecha_i()
     {
         return $this->fecha_i;
     }//fin getnum_pro


     public function setFecha_f($fecha_f)
     {
         $this->fecha_f=$fecha_f;
     }//fin setnum_pro

     public function getFecha_f()
     {
         return $this->fecha_f;
     }//fin getnum_pro


     public function setIde($iden)
     {
         $this->iden=$iden;
     }//fin setpre_uni

     public function getIde()
     {
         return $this->iden;
     }//fin getpre_uni




     /*METODOS*/
     public function insert_re()
     {
         /*crear la conexion e instanciar */
         $llamar= new conexion();
            $llamar1= $llamar->con();

         /*generar la consulta */
         $consulta="insert into RECIBOS(PKCOD_RE,mes,LUZ,AGUA,fecha_co,fecha_fi,FKIDEN_EMP) values('$this->cod','$this->mes','$this->luz','$this->agua','$this->fecha_i','$this->fecha_f','$this->iden');";

       
        /*procesar consulta */
         $res=mysqli_query($llamar1,$consulta);

         return $res;
         

     }

     /*metodo modificar */
     public function modificar_re()
     {
          /*crear la conexion e instanciar */
          $llamar= new conexion();
          $llamar1= $llamar->con();

       /*generar la consulta */
       $consulta="update RECIBOS set PKCOD_RE='$this->cod',mes='$this->mes',LUZ='$this->luz',AGUA='$this->agua',fecha_co='$this->fecha_i',fecha_fi='$this->fecha_f',FKIDEN_EMP='$this->iden' where RECIBOS.PKCOD_RE='$this->cod';";

       /*procesar consulta */
       $res=mysqli_query($llamar1,$consulta);

       return $res;     

     }//fin modificar



     /*metodo eliminar */
     public function eliminar_re()
     {
          /*crear la conexion e instanciar */
          $llamar= new conexion();
          $llamar1= $llamar->con();

       /*generar la consulta */
       $consulta="delete from RECIBOS where PKCOD_RE='$this->cod';";

       /*procesar consulta */
       $res=mysqli_query($llamar1,$consulta);

       return $res;



     }//fin ELIMINAR



  }//FIN CLASE CLASE_inventario

  class mostrar_re
  {
      private $mostrar;//hacer recorridos
      public function __construct()
      {
          $this->mostrar=array();
      }
      /* */
    public function mostrar_reci()
      {
          /*crear la conexion*/
            /*instanciar la clase conexion*/
            $llamar= new conexion();
            $llamar1= $llamar->con();

        
          /*generar la consulta */
          $consulta="select cur.PKCOD_RE,sed.mes,cur.LUZ,cur.AGUA,cur.fecha_co,cur.fecha_fi,em.NOM_EMP from RECIBOS as cur, meses as sed, EMPLEADOS as em where cur.mes = sed.PKCOD_MES AND cur.FKIDEN_EMP = em.PKIDEN_EMP ORDER BY cur.PKCOD_RE";
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
          $consulta="select * from RECIBOS where PKCOD_RE='$act1'";
          /*procesar consulta */
          $res=mysqli_query($llamar1,$consulta);
        /*respuesta */
        return mysqli_fetch_row($res);
        

    }//fin metodo reporte_codigo

    public function reporte_combo_emp()
    {
         /*crear la conexion*/
          /*instanciar la clase conexion*/
          $llamar= new conexion();
          $llamar1= $llamar->con();
          /*generar la consulta */
          $consulta="select * from EMPLEADOS";
          /*retornar consulta */

          return $combo_emp=mysqli_query($llamar1,$consulta);
        

    }//fin metodo reporte_combo_sede


     /*metodo para el combo sede */
     public function reporte_combo_mes()
     {
          /*crear la conexion*/
           /*instanciar la clase conexion*/
           $llamar= new conexion();
           $llamar1= $llamar->con();
           /*generar la consulta */
           $consulta="select * from meses";
           /*retornar consulta */
 
           return $combo_mes=mysqli_query($llamar1,$consulta);
         
 
     }//fin metodo reporte_combo_sede


      
  }//fin clase inventario

?>