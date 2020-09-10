<?php
   /*validar botones*/
   
    

      if(isset($_POST['sub_inv'])) 
      {
          /*echo"verificacion curso";*/
         
         include("../CONTROLADOR/control_inv.php");
      } 

      if(isset($_POST['sub_emp'])) 
      {
          /*echo"verificacion curso";*/
         
         include("../CONTROLADOR/control_emp.php");
      } 

      if(isset($_POST['sub_ped'])) 
      {
          /*echo"verificacion curso";*/
         
         include("../CONTROLADOR/control_ped.php");
      } 

      if(isset($_POST['sub_rec'])) 
      {
          /*echo"verificacion curso";*/
         
         include("../CONTROLADOR/control_re.php");
      } 

      if(isset($_POST['sub_cli'])) 
      {
          /*echo"verificacion curso";*/
         
         include("../CONTROLADOR/control_cli.php");
      }
      
      if(isset($_POST['sub_pro'])) 
      {
          /*echo"verificacion curso";*/
         
         include("../CONTROLADOR/control_pro.php");
      } 


     


       

     
      
     

    

?>