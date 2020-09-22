<?php

  //llama todas las hojas de la pagina web
  class home
  {
    function principal()
    {
        //llama al archivo de inicio de la pagina 
        include("vista/paginas/acu_index.php");
    }//fin funcion principal  

    function papeleria()
    {
        //llama al archivo de inicio de la pagina 
        include("vista/paginas/acu_papeleria.php");
    }//fin funcion papeleria

    function contacto()
    {
        //llama al archivo de inicio de la pagina 
        include("vista/paginas/acu_contacto.php");
    }//fin funcion contacto

    function pedido()
    {
        //llama al archivo de inicio de la pagina 
        include("vista/paginas/acu_pedido.php");
    }//fin funcion menu



  }//fin clase home 
  



?>