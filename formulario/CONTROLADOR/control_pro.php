<?php
   /*LLAMAR LOGICA*/
   include ("../logica/clase_prov.php"); 
  /* validar evento boton*/
  if(isset($_POST['sub_pro'])) 
      {
          /*invocar reporte curso*/
          $reporte= new mostrar_pro();

          /*llamar funcion*/
          $res=$reporte->mostrar_pedi(); 
          /*donde mostrar la respuesta*/
          /*echo"hola";*/
          include("../VISTA/PROVEDOR/frm_pro.php");

        
          
      }//fin boton sub_cur


 if(isset($_POST['sub_registrar'])) 
      {
          /*recibir parametros pasar a variables*/
             
          $nom=$_POST['nom'];
         
          /*ENVIAR DATOS para ser ingresado*/
          $insertar= new PROVEDOR(NULL,$nom);
          $res_inser=$insertar->insert_pro();
          /*validar respuesta  */
          if($res_inser==1)
          {
            $reporte= new mostrar_pro();
            /*llamar funcion*/
           
            $res=$reporte->mostrar_pedi();
            include("../VISTA/PROVEDOR/frm_pro.php"); 


          }//fin if 
          else
          {
              echo"error al insertar los datos";
          }
        
          
      }//fin boton registrar


      /** metodo para paso de informacion opcion modificar*/
 
 if(isset($_GET['cod_act']))
 {
     /*pasar informacion de caja de texto a variable*/
     $act=$_GET['cod_act'];
     /*instanciar clase log_curso */
     $reporte= new mostrar_pro();
     /*llamar el metodo especifico */
   
     $res=$reporte->reporte_codigo($act);
     /*mostrar en el formulario especifico al proceso que se este realizando modificar*/
     include("../VISTA/PROVEDOR/frm_pro_act.php");


 }//fin modificar

 /*validar pulsacion subactualizar */
 if(isset($_POST['sub_actualizar']))
 {
     /*recibir lo parametros del formulario */
     $cod=$_POST['tx_cod'];    
     $nom=$_POST['nom'];
     


     /*enviar datos para ser procesados */
     $actualizar= new PROVEDOR($cod,$nom);
     $res_modi=$actualizar->modificar_pro();

     /*validar respuesta */
     if($res_modi==1)
     {
        $reporte= new mostrar_pro();
        /*llamar funcion*/
       
        $res=$reporte->mostrar_pedi(); 
        /*donde mostrar la respuesta*/
        /*echo"hola";*/
        include("../VISTA/PROVEDOR/frm_pro.php");

     }


     else
     {
         echo "ojo error al modificar los datos";


     }

 }//fin validacion sub_actualizar

 if(isset($_GET['cod_eli']))
 {
     /*pasar informacion de caja de texto a variable*/
     $eli=$_GET['cod_eli'];
     /*instanciar clase log_curso */
     $reporte= new PROVEDOR($eli,null);
     /*llamar el metodo especifico */
     $res_eli=$reporte->eliminar_pro();
     /*validar respuesta */
     if($res_eli==1)
     {
        $reporte= new mostrar_pro();
        /*llamar funcion*/
        
        $res=$reporte->mostrar_pedi(); 
        /*donde mostrar la respuesta*/
        /*echo"hola";*/
        include("../VISTA/PROVEDOR/frm_pro.php");

     }


     else
     {
         echo "ojo error al eliminar datos los datos";


     }
     /*mostrar en el formulario especifico al proceso que se este realizando modificar*/
     


 }//fin ELIMINAR





?>