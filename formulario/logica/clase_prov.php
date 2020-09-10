<?php
    include("../BASE_D/conexion_bd.php");

  /*crear la clase curso*/ 
  class PROVEDOR
  {
      /*atributos*/
      private $cod;
      private $nom;
     
      function __construct($cod,$nom)
      {
        $this->cod=$cod;
        $this->nom=$nom;
       
          
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


     public function setNom($nom)
     {
         $this->nom=$nom;
     }//fin setnom_pro

     public function getNom()
     {
         return $this->nom;
     }//fin getnom_pro


     

     /*METODOS*/
     public function insert_pro()
     {
         /*crear la conexion e instanciar */
         $llamar= new conexion();
            $llamar1= $llamar->con();

         /*generar la consulta */
         $consulta="insert into provedor(provedor) values('$this->nom');";
         
         var_dump($consulta);
        /*procesar consulta */
         $res=mysqli_query($llamar1,$consulta);

         return $res;
         

     }

     /*metodo modificar */
     public function modificar_pro()
     {
          /*crear la conexion e instanciar */
          $llamar= new conexion();
          $llamar1= $llamar->con();

       /*generar la consulta */
       $consulta="update provedor set provedor='$this->nom' where cod_pro ='$this->cod';";

       /*procesar consulta */
       $res=mysqli_query($llamar1,$consulta);

       return $res;     

     }//fin modificar



     /*metodo eliminar */
     public function eliminar_pro()
     {
          /*crear la conexion e instanciar */
          $llamar= new conexion();
          $llamar1= $llamar->con();

       /*generar la consulta */
       $consulta="delete from provedor where cod_pro='$this->cod';";

       /*procesar consulta */
       $res=mysqli_query($llamar1,$consulta);

       return $res;



     }//fin ELIMINAR



  }//FIN CLASE CLASE_inventario

  class mostrar_pro
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
          $consulta="select * from provedor";
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
          $consulta="select * from provedor where cod_pro='$act1'";
          /*procesar consulta */
          $res=mysqli_query($llamar1,$consulta);
        /*respuesta */
        return mysqli_fetch_row($res);
        

    }//fin metodo reporte_codigo

      
  }//fin clase inventario

?>