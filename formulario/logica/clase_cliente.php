<?php
    include("../BASE_D/conexion_bd.php");

  /*crear la clase curso*/ 
  class CLIENTE
  {
      /*atributos*/
      private $iden_cli;
      private $nom_cli;
      private $mes;
      private $fecha_i;
      private $fecha_f;
      private $cod_pro;
      private $emp;
      
      function __construct($iden,$nom,$mes,$fecha_i,$fecha_f,$cod,$emp)
      {
        $this->iden_cli=$iden;
        $this->nom_cli=$nom;
        $this->mes=$mes;
        $this->fecha_i=$fecha_i;
        $this->fecha_f=$fecha_f;
        $this->cod_pro=$cod;
        $this->emp=$emp;  
      }
     /* METODOS DE ESCRITURA Y LECTURA*/
     public function setIden_cli($iden)
     {
         $this->iden_cli=$iden;
     }//fin setIden_cli

     public function getIden_cli()
     {
         return $this->iden_cli;
     }//fin getIden_cli


     public function setNom_cli($nom)
     {
         $this->nom_cli=$nom;
     }//fin setNom_cli

     public function getNom_cli()
     {
         return $this->nom_cli;
     }//fin getNom_cli


     public function setMes($mes)
     {
         $this->mes=$mes;
     }//fin setIden_cli

     public function getMes()
     {
         return $this->mes;
     }//fin getIden_cli


     public function setFecha_i($fecha_i)
     {
         $this->fecha_i=$fecha_i;
     }//fin setIden_cli

     public function getFecha_i()
     {
         return $this->fecha_i;
     }//fin getIden_cli


     public function setFecha_f($fecha_f)
     {
         $this->fecha_f=$fecha_f;
     }//fin setIden_cli

     public function getFecha_f()
     {
         return $this->fecha_f;
     }//fin getIden_cli



     public function setCod_pro($cod)
     {
         $this->cod_pro=$cod;
     }//fin setCod_pro

     public function getCod_pro()
     {
         return $this->cod_pro;
     }//fin getCod_pro



     public function setEmp($emp)
     {
         $this->emp=$emp;
     }//fin setIden_cli

     public function getEmp()
     {
         return $this->emp;
     }//fin getIden_cli

     
     /*METODOS*/
     public function insert_cli()
     {
         /*crear la conexion e instanciar */
         $llamar= new conexion();
            $llamar1= $llamar->con();

         /*generar la consulta */
         $consulta="insert into CLIENTE1(PKIDEN_CLI,NOM_CLI,mes,FECHA_I,FECHA_FI,FKCOD_PROD,empleado) values('$this->iden_cli','$this->nom_cli','$this->mes','$this->fecha_i','$this->fecha_f','$this->cod_pro','$this->emp');";
         

         /*procesar consulta */
         $res=mysqli_query($llamar1,$consulta);

         return $res;


     }//FIN INSERTAR 

     /*metodo modificar */
     public function modificar_cli()
     {
          /*crear la conexion e instanciar */
          $llamar= new conexion();
          $llamar1= $llamar->con();

       /*generar la consulta */
       $consulta="update CLIENTE1 set PKIDEN_CLI='$this->iden_cli',NOM_CLI='$this->nom_cli',mes='$this->mes',FECHA_I='$this->fecha_i',FECHA_FI='$this->fecha_f',FKCOD_PROD='$this->cod_pro',empleado='$this->emp' where CLIENTE1.PKIDEN_CLI='$this->iden_cli';";
        
       /*procesar consulta */
       $res=mysqli_query($llamar1,$consulta);

       return $res;



     }//fin modificar

     /*metodo eliminar */
     public function eliminar_cli()
     {
          /*crear la conexion e instanciar */
          $llamar= new conexion();
          $llamar1= $llamar->con();

       /*generar la consulta */
       $consulta="delete from CLIENTE1 where PKIDEN_CLI='$this->iden_cli';";

       /*procesar consulta */
       $res=mysqli_query($llamar1,$consulta);

       return $res;



     }//fin ELIMINAR


  }//FIN CLASE CLASE_CURSO

  class mostrar_cli
  {
      private $mostrar;//hacer recorridos
      public function __construct()
      {
          $this->mostrar=array();
      }
      
       public function mostrar_clien()
       {
           /*crear la conexion*/
             /*instanciar la clase conexion*/
             $llamar= new conexion();
             $llamar1= $llamar->con();

        
           /*generar la consulta */
           $consulta="select cur.PKIDEN_CLI, cur.NOM_CLI, sed.mes,cur.FECHA_I,cur.FECHA_FI,cur.FKCOD_PROD,em.NOM_EMP from CLIENTE1 as cur, meses as sed, EMPLEADOS as em where cur.mes = sed.PKCOD_MES AND cur.empleado = em.PKIDEN_EMP ORDER BY cur.PKIDEN_CLI";
           /*procesar consulta */
           $res=mysqli_query($llamar1,$consulta);

           /*retornar una respuesta */
           return mysqli_fetch_all($res,MYSQLI_ASSOC);
       }//fin reporte_gral
       /*funcion consulta multi tablas */

    //   public function mostrar_clien1()
    //   {
    //       /*crear la conexion*/
    //         /*instanciar la clase conexion*/
    //         $llamar= new conexion();
    //         $llamar1= $llamar->con();

        
    //       /*generar la consulta */
    //       $consulta="select CLI.PKIDEN_CLI, CLI.NOM_CLI, INV.NOM_PROD \n". "FROM CLIENTE AS CLI, INVENTARIO AS INV\n". "\n" . "        WHERE CLI.FKCOD_PROD = INV.PKCOD_PRO";
    //       /*procesar consulta */
    //       $res=mysqli_query($llamar1,$consulta);

    //       /*retornar una respuesta */
    //       return mysqli_fetch_all($res,MYSQLI_ASSOC);
    //   }//fin reporte_gral

    /*METODO CONSULTA PARA MODIFICAR */

    public function reporte_codigo($act1)
    {
        /*crear la conexion*/
          /*instanciar la clase conexion*/
          $llamar= new conexion();
          $llamar1= $llamar->con();
          /*generar la consulta */
          $consulta="select * from CLIENTE1 where PKIDEN_CLI='$act1'";
          /*procesar consulta */
          $res=mysqli_query($llamar1,$consulta);
        /*respuesta */
        return mysqli_fetch_row($res);
        

    }//fin metodo reporte_codigo


    /*metodo para el combo sede */
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






  }//fin clase curso

?>  