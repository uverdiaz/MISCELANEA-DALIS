<?php
    include("../BASE_D/conexion_bd.php");

  /*crear la clase curso*/ 
  class INVENTARIO
  {
      /*atributos*/
      private $pkcod_pro;
      private $nom_pro;
      private $num_pro;
      private $pre_uni;
      private $fkcod_ped;
      function __construct($pcod,$nom,$num,$pre,$fcod)
      {
        $this->pkcod_pro=$pcod;
        $this->nom_pro=$nom;
        $this->num_pro=$num;
        $this->pre_uni=$pre;
        $this->fkcod_ped=$fcod;
          
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

     public function setNum_pro($cod)
     {
         $this->num_pro=$cod;
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

     public function setFkcod_ped($fcod)
     {
         $this->fkcod_ped=$fcod;
     }//fin setfkcod_ped

     public function getFkcod_ped()
     {
         return $this->fkcod_ped;
     }//fin getfkcod_ped






     /*METODOS*/
     public function insert_inv()
     {
         /*crear la conexion e instanciar */
         $llamar= new conexion();
            $llamar1= $llamar->con();

         /*generar la consulta */
         $consulta="insert into INVENTARIO(PKCOD_PRO,NOM_PROD,NUM_PRO,PRE_UNI,FKCOD_PED) values($this->pkcod_pro,'$this->nom_pro','$this->num_pro',$this->pre_uni,$this->fkcod_ped);";

         /*procesar consulta */
         $res=mysqli_query($llamar1,$consulta);

         return $res;


     }

  }//FIN CLASE CLASE_CURSO

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
          $consulta="select * from INVENTARIO";
          /*procesar consulta */
          $res=mysqli_query($llamar1,$consulta);

          /*retornar una respuesta */
          return mysqli_fetch_all($res,MYSQLI_ASSOC);
      }//fin reporte_gral

  }//fin clase curso

?>  