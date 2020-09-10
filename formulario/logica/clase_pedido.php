<?php
    include("../BASE_D/conexion_bd.php");

  /*crear la clase curso*/ 
  class PEDIDO
  {
      /*atributos*/
      private $cod;
      private $fecha;
      private $nom;
      private $des;
      private $num;
      private $precio;
      private $pro;
      private $emp;
      function __construct($cod,$fecha,$nom,$des,$num,$precio,$pro,$emp)
      {
        $this->cod=$cod;
        $this->fecha=$fecha;
        $this->nom=$nom;
        $this->des=$des;
        $this->num=$num;
        $this->precio=$precio;
        $this->pro=$pro;
        $this->emp=$emp;
          
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

     public function setFe($fecha)
     {
         $this->fecha=$fecha;
     }//fin setPkcod_pro

     public function getFe()
     {
         return $this->fecha;
     }//fin getPkcod_pro


     public function setNom($nom)
     {
         $this->nom=$nom;
     }//fin setnom_pro

     public function getNom()
     {
         return $this->nom;
     }//fin getnom_pro


     public function setDes($des)
     {
         $this->des=$des;
     }//fin setPkcod_pro

     public function getDes()
     {
         return $this->des;
     }//fin getPkcod_pro

     public function setNum($num)
     {
         $this->num=$num;
     }//fin setnum_pro

     public function getNum()
     {
         return $this->num;
     }//fin getnum_pro


     public function setPre($precio)
     {
         $this->precio=$precio;
     }//fin setpre_uni

     public function getPre()
     {
         return $this->precio;
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
     public function insert_ped()
     {
         /*crear la conexion e instanciar */
         $llamar= new conexion();
            $llamar1= $llamar->con();

         /*generar la consulta */
         $consulta="insert into PEDIDOS(PKCOD_PED,fecha_co,NOM_PRO,descripcion,NUM_PRO,PRECIO,provedor,FKINDEN_EMP) values($this->cod,'$this->fecha','$this->nom','$this->des','$this->num','$this->precio','$this->pro','$this->emp');";
         
         var_dump($consulta);
        /*procesar consulta */
         $res=mysqli_query($llamar1,$consulta);

         return $res;
         

     }

     /*metodo modificar */
     public function modificar_ped()
     {
          /*crear la conexion e instanciar */
          $llamar= new conexion();
          $llamar1= $llamar->con();

       /*generar la consulta */
       $consulta="update PEDIDOS set PKCOD_PED='$this->cod',fecha_co='$this->fecha',NOM_PRO='$this->nom',descripcion='$this->des',NUM_PRO='$this->num',PRECIO='$this->precio',provedor='$this->pro',FKINDEN_EMP='$this->emp' where PEDIDOS.PKCOD_PED='$this->cod';";

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
       $consulta="delete from PEDIDOS where PKCOD_PED='$this->cod';";

       /*procesar consulta */
       $res=mysqli_query($llamar1,$consulta);

       return $res;



     }//fin ELIMINAR



  }//FIN CLASE CLASE_inventario

  class mostrar_ped
  {
      private $mostrar;//hacer recorridos
      public function __construct()
      {
          $this->mostrar=array();
      }
      /* */
    public function mostrar_pedi()
      {
          /*crear la conexion*/
            /*instanciar la clase conexion*/
            $llamar= new conexion();
            $llamar1= $llamar->con();

        
          /*generar la consulta */
          $consulta="select cur.PKCOD_PED, cur.fecha_co, cur.NOM_PRO,cur.descripcion,cur.NUM_PRO,cur.PRECIO,sed.provedor,empe.NOM_EMP from PEDIDOS as cur, provedor as sed, EMPLEADOS as empe where cur.provedor = sed.cod_pro AND cur.FKINDEN_EMP = empe.PKIDEN_EMP ORDER BY cur.PKCOD_PED";
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
          $consulta="select * from PEDIDOS where PKCOD_PED='$act1'";
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