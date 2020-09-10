<?php
    include("../BASE_D/conexion_bd.php");

  /*crear la clase curso*/ 
  class INVENTARIO
  {
      /*atributos*/
      private $pkcod_pro;
      private $nom_pro;
      private $des;
      private $num_pro;
      private $pre_uni;
      private $pre_sal;
      private $pro;
      private $emp;

      function __construct($pcod,$nom,$des,$num,$pre,$pre_sal,$pro,$emp)
      {
        $this->pkcod_pro=$pcod;
        $this->nom_pro=$nom;
        $this->des=$des;
        $this->num_pro=$num;
        $this->pre_uni=$pre;
        $this->pre_sal=$pre_sal;
        $this->pro=$pro;
        $this->emp=$emp;
          
      }
     /* METODOS DE ESCRITURA Y LECTURA*/
     public function setPkcod_pro($pcod)
     {
         $this->pkcod_pro=$pcod;
     }//fin setPkcod_pro

     public function getPkcod_pro()
     {
         return $this->pkcod_pro;
     }//fin getPkcod_pro


     public function setNom_pro($nom)
     {
         $this->nom_pro=$nom;
     }//fin setnom_pro

     public function getNom_pro()
     {
         return $this->nom_pro;
     }//fin getnom_pro

     public function setDes($des)
     {
         $this->des=$des;
     }//fin setPkcod_pro

     public function getDes()
     {
         return $this->des;
     }//fin getPkcod_pro

     public function setNum_pro($num)
     {
         $this->num_pro=$num;
     }//fin setnum_pro

     public function getNum_pro()
     {
         return $this->num_pro;
     }//fin getnum_pro


     public function setPre_uni($pre)
     {
         $this->pre_uni=$pre;
     }//fin setpre_uni

     public function getPre_uni()
     {
         return $this->pre_uni;
     }//fin getpre_uni

     public function setPre_sal($pre_sal)
     {
         $this->pre_sal=$pre_sal;
     }//fin setpre_uni

     public function getPre_sal()
     {
         return $this->pre_sal;
     }//fin getpre_uni


     public function setPro($pro)
     {
         $this->pro=$pro;
     }//fin setPkcod_pro

     public function getPro()
     {
         return $this->pro;
     }//fin getPkcod_pro

     public function setEmp($emp)
     {
         $this->emp=$emp;
     }//fin setfkcod_ped

     public function getEmp()
     {
         return $this->emp;
     }//fin getfkcod_ped

     /*METODOS*/
     public function insert_inv()
     {
         /*crear la conexion e instanciar */
         $llamar= new conexion();
            $llamar1= $llamar->con();

         /*generar la consulta */
         $consulta="insert into INVENTARIO(PKCOD_PRO,NOM_PROD,descripcion,NUM_PRO,PRE_EN,PRE_SAL,provedor,empleado) values('$this->pkcod_pro','$this->nom_pro','$this->des','$this->num_pro','$this->pre_uni','$this->pre_sal','$this->pro','$this->emp');";

         /*procesar consulta */
         $res=mysqli_query($llamar1,$consulta);

         return $res;
         

     }

     /*metodo modificar */
     public function modificar_inv()
     {
          /*crear la conexion e instanciar */
          $llamar= new conexion();
          $llamar1= $llamar->con();

       /*generar la consulta */
       $consulta="update INVENTARIO set PKCOD_PRO='$this->pkcod_pro',NOM_PROD='$this->nom_pro',descripcion='$this->des',NUM_PRO='$this->num_pro',PRE_EN='$this->pre_uni',PRE_SAL='$this->pre_sal',provedor='$this->pro',empleado='$this->emp' where INVENTARIO.PKCOD_PRO='$this->pkcod_pro';";
       var_dump($consulta);

       /*procesar consulta */
       $res=mysqli_query($llamar1,$consulta);

       return $res;     

     }//fin modificar



     /*metodo eliminar */
     public function eliminar_inv()
     {
          /*crear la conexion e instanciar */
          $llamar= new conexion();
          $llamar1= $llamar->con();

       /*generar la consulta */
       $consulta="delete from INVENTARIO where PKCOD_PRO='$this->pkcod_pro';";

       /*procesar consulta */
       $res=mysqli_query($llamar1,$consulta);

       return $res;



     }//fin ELIMINAR



  }//FIN CLASE CLASE_inventario

  class mostrar_inv
  {
      private $mostrar;//hacer recorridos
      public function __construct()
      {
          $this->mostrar=array();
      }
      /* */
    public function mostrar_inven()
      {
          /*crear la conexion*/
            /*instanciar la clase conexion*/
            $llamar= new conexion();
            $llamar1= $llamar->con();

        
          /*generar la consulta */
          $consulta="select cur.PKCOD_PRO, cur.NOM_PROD, cur.descripcion,cur.NUM_PRO,cur.PRE_EN,cur.PRE_SAL,sed.provedor,empe.NOM_EMP from INVENTARIO as cur, provedor as sed, EMPLEADOS as empe where cur.provedor = sed.cod_pro AND cur.empleado = empe.PKIDEN_EMP ORDER BY cur.PKCOD_PRO";
          /*procesar consulta */
          $res=mysqli_query($llamar1,$consulta);

          /*retornar una respuesta */
          return mysqli_fetch_all($res,MYSQLI_ASSOC);
      }//fin reporte_gral

    //   public function mostrar_inven()
    //   {
    //       /*crear la conexion*/
    //         /*instanciar la clase conexion*/
    //         $llamar= new conexion();
    //         $llamar1= $llamar->con();

        
    //       /*generar la consulta */
    //       $consulta="select INV.PKCOD_PRO, INV.NOM_PROD, INV.NUM_PRO, INV.PRE_UNI, PED.NUM_PRO\n" . "     FROM INVENTARIO AS INV, PEDIDOS AS PED \n". "      WHERE INV.FKCOD_PED = PED.PKCOD_PED";
    //       /*procesar consulta */
    //       $res=mysqli_query($llamar1,$consulta);

    //       /*retornar una respuesta */
    //       return mysqli_fetch_all($res,MYSQLI_ASSOC);
    //   }//fin reporte_gral

    public function reporte_codigo($act1)
    {
        /*crear la conexion*/
          /*instanciar la clase conexion*/
          $llamar= new conexion();
          $llamar1= $llamar->con();
          /*generar la consulta */
          $consulta="select * from INVENTARIO where PKCOD_PRO='$act1'";
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



    public function reporte_combo_pro()
    {
         /*crear la conexion*/
          /*instanciar la clase conexion*/
          $llamar= new conexion();
          $llamar1= $llamar->con();
          /*generar la consulta */
          $consulta="select * from provedor";
          /*retornar consulta */

          return $combo_pro=mysqli_query($llamar1,$consulta);
        

    }//fin metodo reporte_combo_sede


      
  }//fin clase inventario

?>  