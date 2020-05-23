<?php
   /*validar botones*/
   
    if(isset($_POST['sub_cli'])) 
      {
          /*echo"verificacion curso";*/
         
         include("../CONTROLADOR/control_cli.php");
      } 

      if(isset($_POST['sub_emp'])) 
      {
          /*echo"verificacion curso";*/
         
         include("../CONTROLADOR/control_inv.php");
      } 
      
     

    

?>