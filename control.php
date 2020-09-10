<?php
if(isset($_POST['sub_in'])) 
{
    /*echo"verificacion curso";*/
   
   include("login.php");
} 
if(isset($_POST['sub_cli'])) 
      {
          /*echo"verificacion curso";*/
         
         include("control_cli.php");
      } 

?>