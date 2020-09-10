<?php
   /*LLAMAR LOGICA*/
   include ("../logica/clase_inven.php"); 
  /* validar evento boton*/
  if(isset($_POST['sub_inv'])) 
      {
          /*invocar reporte curso*/
          $reporte= new mostrar_inv();
          /*llamar funcion*/
          $combo1=$reporte->reporte_combo_emp();
          $combo=$reporte->reporte_combo_pro();
          $res=$reporte->mostrar_inven(); 
          /*donde mostrar la respuesta*/
          /*echo"hola";*/
          include("../VISTA/EMPLEADO/frm_inventario.php");

        
          
      }//fin boton sub_cur


 if(isset($_POST['sub_registrar'])) 
      {
          /*recibir parametros pasar a variables*/
            $pkcod_pro=$_POST['tx_cod'];
            $nom_pro=$_POST['tx_nom'];
            $des=$_POST['des'];
            $num_pro=$_POST['num_pro'];
            $pre_uni=$_POST['precio_e'];
            $pre_s=$_POST['precio_s'];
            $com_pro=$_POST['com_pro'];
            $com_emp=$_POST['com_emp'];
            
          /*ENVIAR DATOS para ser ingresado*/
          $insertar= new INVENTARIO($pkcod_pro,$nom_pro,$des,$num_pro,$pre_uni,$pre_s,$com_pro,$com_emp);
          $res_inser=$insertar->insert_inv();
          /*validar respuesta  */
          if($res_inser==1)
          {
            $reporte= new mostrar_inv();
            /*llamar funcion*/
            $combo1=$reporte->reporte_combo_emp();
          $combo=$reporte->reporte_combo_pro();
            $res=$reporte->mostrar_inven();
            include("../VISTA/EMPLEADO/frm_inventario.php"); 


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
     
     $reporte= new mostrar_inv();
     /*llamar el metodo especifico */
     $combo1=$reporte->reporte_combo_emp();
          $combo=$reporte->reporte_combo_pro();
     $res=$reporte->reporte_codigo($act);
     /*mostrar en el formulario especifico al proceso que se este realizando modificar*/
     include("../VISTA/EMPLEADO/frm_actualizar_inv.php");


 }//fin modificar



 /*validar pulsacion subactualizar */
 if(isset($_POST['sub_actualizar']))
 {
     /*recibir lo parametros del formulario */
     $pkcod_pro=$_POST['tx_cod'];
     $nom_pro=$_POST['tx_nom'];
     $des=$_POST['des'];
     $num_pro=$_POST['num_pro'];
     $pre_uni=$_POST['precio_e'];
     $pre_s=$_POST['precio_s'];
     $com_pro=$_POST['com_pro'];
     $com_emp=$_POST['com_emp'];


     /*enviar datos para ser procesados */
     $actualizar= new INVENTARIO($pkcod_pro,$nom_pro,$des,$num_pro,$pre_uni,$pre_s,$com_pro,$com_emp);
     $res_modi=$actualizar->modificar_inv();

     /*validar respuesta */
     if($res_modi==1)
     {
        $reporte= new mostrar_inv();
        /*llamar funcion*/
        $combo1=$reporte->reporte_combo_emp();
          $combo=$reporte->reporte_combo_pro();
        $res=$reporte->mostrar_inven(); 
        /*donde mostrar la respuesta*/
        /*echo"hola";*/
        include("../VISTA/EMPLEADO/frm_inventario.php");

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
     $reporte= new INVENTARIO($eli,null,null,null,null,null,null,null);
     /*llamar el metodo especifico */
     $res_eli=$reporte->eliminar_inv();
     /*validar respuesta */
     if($res_eli==1)
     {
        $reporte= new mostrar_inv();
        /*llamar funcion*/
        $combo1=$reporte->reporte_combo_emp();
          $combo=$reporte->reporte_combo_pro();
        $res=$reporte->mostrar_inven(); 
        /*donde mostrar la respuesta*/
        /*echo"hola";*/
        include("../VISTA/EMPLEADO/frm_inventario.php");

     }


     else
     {
         echo "ojo error al eliminar datos los datos";


     }
     /*mostrar en el formulario especifico al proceso que se este realizando modificar*/

 }//fin ELIMINAR
?>