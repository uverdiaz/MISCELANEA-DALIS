<?php
    include("../BASE_D/conexion_bd.php");

  /*crear la clase curso*/ 
  class CLIENTE
  {
      /*atributos*/
      private $iden_cli;
      private $nom_cli;
      private $cod_pro;
      function __construct($iden,$nom,$cod)
      {
        $this->iden_cli=$iden;
        $this->nom_cli=$nom;
        $this->cod_pro=$cod;
          
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



     public function setCod_pro($cod)
     {
         $this->cod_pro=$cod;
     }//fin setCod_pro

     public function getCod_pro()
     {
         return $this->cod_pro;
     }//fin getCod_pro


     /*METODOS*/
     public function insert_cli()
     {
         /*crear la conexion e instanciar */
         $llamar= new conexion();
            $llamar1= $llamar->con();

         /*generar la consulta */
         $consulta="insert into CLIENTE(PKIDEN_CLI,NOM_CLI,FKCOD_PROD) values($this->iden_cli,'$this->nom_cli','$this->cod_pro');";

         /*procesar consulta */
         $res=mysqli_query($llamar1,$consulta);

         return $res;


     }

  }//FIN CLASE CLASE_CURSO

  class mostrar_cli
  {
      private $mostrar;//hacer recorridos
      public function __construct()
      {
          $this->mostrar=array();
      }
      /* */
      public function mostrar_clien()
      {
          /*crear la conexion*/
            /*instanciar la clase conexion*/
            $llamar= new conexion();
            $llamar1= $llamar->con();

        
          /*generar la consulta */
          $consulta="select * from CLIENTE";
          /*procesar consulta */
          $res=mysqli_query($llamar1,$consulta);

          /*retornar una respuesta */
          return mysqli_fetch_all($res,MYSQLI_ASSOC);
      }//fin reporte_gral

  }//fin clase curso

?>  