<?php
   /*LLAMAR LOGICA*/
   include ("clase_cliente.php"); 
  /* validar evento boton*/
  if(isset($_POST['sub_cli'])) 
      {
          /*invocar reporte curso*/
          $reporte= new mostrar_cli();

          $combo1=$reporte->reporte_combo_mes();

          $combo=$reporte->reporte_combo_emp();

          
          /*llamar funcion*/
          $res=$reporte->mostrar_clien(); 
          /*donde mostrar la respuesta*/
          /*echo"hola";*/
          include("frm_cliente.php");

        
          
      }//fin boton sub_cur


 if(isset($_POST['sub_registrar'])) 
      {
          /*recibir parametros pasar a variables*/
          
          $nom_cli=$_POST['tx_nom'];
          $mes=$_POST['com_mes'];
          $fecha_i=$_POST['FECHA_I'];
          $fecha_f=$_POST['FECHA_FI'];  
          $cod_pro=$_POST['num_ped'];
          $empleado=$_POST['com_emp'];
          /*ENVIAR DATOS para ser ingresado*/
          $insertar= new CLIENTE(NULL,$nom_cli,$mes,$fecha_i,$fecha_f,$cod_pro,$empleado);
          $res_inser=$insertar->insert_cli();
          /*validar respuesta  */
          if($res_inser==1)
          {

            $reporte= new mostrar_cli();
            $combo1=$reporte->reporte_combo_mes();

            $combo=$reporte->reporte_combo_emp();
            /*llamar funcion*/
            $res=$reporte->mostrar_c();
            include("frm_cliente.php"); 


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
     $reporte= new mostrar_cli();

     $combo1=$reporte->reporte_combo_mes();

     $combo=$reporte->reporte_combo_emp();
     /*llamar el metodo especifico */
     $res=$reporte->reporte_codigo($act);
     /*mostrar en el formulario especifico al proceso que se este realizando modificar*/
     include("frm_actualizar_cli.php");


 }//fin modificar

 /*validar pulsacion subactualizar */
 if(isset($_POST['sub_actualizar']))
 {
     /*recibir lo parametros del formulario */
     $iden_cli=$_POST['tx_iden'];
     $nom_cli=$_POST['tx_nom'];
     $mes=$_POST['com_mes'];
     $fecha_i=$_POST['FECHA_I'];
     $fecha_f=$_POST['FECHA_FI'];
       
     $cod_pro=$_POST['num_ped'];

     $empleado=$_POST['com_emp'];


     /*enviar datos para ser procesados */
     $actualizar= new CLIENTE($iden_cli,$nom_cli,$mes,$fecha_i,$fecha_f,$cod_pro,$empleado);
     $res_modi=$actualizar->modificar_cli();

     /*validar respuesta */
     if($res_modi==1)
     {
        $reporte= new mostrar_cli();
        /*llamar funcion*/
        $combo1=$reporte->reporte_combo_mes();

        $combo=$reporte->reporte_combo_emp();
        
        $res=$reporte->mostrar_c(); 
        /*donde mostrar la respuesta*/
        /*echo"hola";*/
        include("frm_cliente.php");

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
     $reporte= new CLIENTE($eli,null,null,null,null,null,null);
     /*llamar el metodo especifico */
     $res_eli=$reporte->eliminar_cli();
     /*validar respuesta */
     if($res_eli==1)
     {
        $reporte= new mostrar_cli();

        $combo1=$reporte->reporte_combo_mes();

        $combo=$reporte->reporte_combo_emp();
        /*llamar funcion*/
        $res=$reporte->mostrar_clien(); 
        /*donde mostrar la respuesta*/
        /*echo"hola";*/
        include("frm_cliente.php");

     }


     else
     {
         echo "ojo error al eliminar datos los datos";


     }
     /*mostrar en el formulario especifico al proceso que se este realizando modificar*/
     


 }//fin ELIMINAR





?>