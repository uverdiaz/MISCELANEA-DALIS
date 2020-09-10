<?php
   /*LLAMAR LOGICA*/
   include ("../logica/clase_pedido.php"); 
  /* validar evento boton*/
  if(isset($_POST['sub_ped'])) 
      {
          /*invocar reporte curso*/
          $reporte= new mostrar_ped();

          /*llamar funcion*/
          $combo1=$reporte->reporte_combo_emp();
          $combo=$reporte->reporte_combo_pro();
          $res=$reporte->mostrar_pedi(); 
          /*donde mostrar la respuesta*/
          /*echo"hola";*/
          include("../VISTA/PEDIDOS/frm_pedido.php");

        
          
      }//fin boton sub_cur


 if(isset($_POST['sub_registrar'])) 
      {
          /*recibir parametros pasar a variables*/
          $cod=$_POST['tx_cod'];    
          $date=$_POST['date'];
          $nom=$_POST['nom'];
          $des=$_POST['des'];
          $num=$_POST['num'];
          $precio=$_POST['pre'];
          $com_pro=$_POST['com_pro'];
          $com_emp=$_POST['com_emp'];
          /*ENVIAR DATOS para ser ingresado*/
          $insertar= new PEDIDO($cod,$date,$nom,$des,$num,$precio,$com_pro,$com_emp);
          $res_inser=$insertar->insert_ped();
          /*validar respuesta  */
          if($res_inser==1)
          {
            $reporte= new mostrar_ped();
            /*llamar funcion*/
            $combo1=$reporte->reporte_combo_emp();
            $combo=$reporte->reporte_combo_pro();
            $res=$reporte->mostrar_pedi();
            include("../VISTA/PEDIDOS/frm_pedido.php"); 


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
     $reporte= new mostrar_ped();
     /*llamar el metodo especifico */
     $combo1=$reporte->reporte_combo_emp();
     $combo=$reporte->reporte_combo_pro();
     $res=$reporte->reporte_codigo($act);
     /*mostrar en el formulario especifico al proceso que se este realizando modificar*/
     include("../VISTA/PEDIDOS/frm_pedido_act.php");


 }//fin modificar

 /*validar pulsacion subactualizar */
 if(isset($_POST['sub_actualizar']))
 {
     /*recibir lo parametros del formulario */
     $cod=$_POST['tx_cod'];    
     $date=$_POST['date'];
     $nom=$_POST['nom'];
     $des=$_POST['des'];
     $num=$_POST['num'];
     $precio=$_POST['pre'];
     $com_pro=$_POST['com_pro'];
     $com_emp=$_POST['com_emp'];


     /*enviar datos para ser procesados */
     $actualizar= new PEDIDO($cod,$date,$nom,$des,$num,$precio,$com_pro,$com_emp);
     $res_modi=$actualizar->modificar_ped();

     /*validar respuesta */
     if($res_modi==1)
     {
        $reporte= new mostrar_ped();
        /*llamar funcion*/
        $combo1=$reporte->reporte_combo_emp();
        $combo=$reporte->reporte_combo_pro();
        $res=$reporte->mostrar_pedi(); 
        /*donde mostrar la respuesta*/
        /*echo"hola";*/
        include("../VISTA/PEDIDOS/frm_pedido.php");

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
     $reporte= new PEDIDO($eli,null,null,null,null,null,null,null);
     /*llamar el metodo especifico */
     $res_eli=$reporte->eliminar_emp();
     /*validar respuesta */
     if($res_eli==1)
     {
        $reporte= new mostrar_ped();
        /*llamar funcion*/
        $combo1=$reporte->reporte_combo_emp();
        $combo=$reporte->reporte_combo_pro();
        $res=$reporte->mostrar_pedi(); 
        /*donde mostrar la respuesta*/
        /*echo"hola";*/
        include("../VISTA/PEDIDOS/frm_pedido.php");

     }


     else
     {
         echo "ojo error al eliminar datos los datos";


     }
     /*mostrar en el formulario especifico al proceso que se este realizando modificar*/
     


 }//fin ELIMINAR





?>