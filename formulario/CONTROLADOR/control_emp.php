<?php
   /*LLAMAR LOGICA*/
   include ("../logica/clase_emp.php"); 
  /* validar evento boton*/
  if(isset($_POST['sub_emp'])) 
      { 
          /*invocar reporte curso*/
         $reporte= new mostrar_emp();
        //   /*llamar funcion*/
         $res=$reporte->mostrar_empe(); 
          /*donde mostrar la respuesta*/
          /*echo"hola";*/
          include("../VISTA/empleado/frm_empleado.php");

        
          
      }//fin boton sub_cur


 if(isset($_POST['sub_registrar'])) 
      {
          /*recibir parametros pasar a variables*/
          $id=$_POST['tx_cod'];
          $nom=$_POST['nom'];
          $ape=$_POST['ape'];
          $edad=$_POST['adad'];
          $salario=$_POST['sal'];
          /*ENVIAR DATOS para ser ingresado*/
          $insertar= new EMPLEADO($id,$nom,$ape,$edad,$salario,null,null);
          $res_inser=$insertar-> insert_emp();
          /*validar respuesta  */
          if($res_inser==1)
          {
            $reporte= new mostrar_emp();
            /*llamar funcion*/
            $res=$reporte->mostrar_empe();
            include("../VISTA/empleado/frm_empleado.php"); 


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
     $reporte= new mostrar_emp();
     /*llamar el metodo especifico */
     $res=$reporte->reporte_codigo($act);
     /*mostrar en el formulario especifico al proceso que se este realizando modificar*/
     include("../VISTA/empleado/frm_empleado_act.php");


 }//fin modificar



 /*validar pulsacion subactualizar */
 if(isset($_POST['sub_actualizar']))
 {
     /*recibir lo parametros del formulario */
     $id=$_POST['tx_cod'];
     $nom=$_POST['nom'];
     $ape=$_POST['ape'];
     $edad=$_POST['adad'];
     $salario=$_POST['sal'];


     /*enviar datos para ser procesados */
     $actualizar= new EMPLEADO($id,$nom,$ape,$edad,$salario,null,null);
     $res_modi=$actualizar->modificar_emp();

     /*validar respuesta */
     if($res_modi==1)
     {
        $reporte= new mostrar_emp();
        /*llamar funcion*/
        $res=$reporte->mostrar_empe(); 
        /*donde mostrar la respuesta*/
        /*echo"hola";*/
        include("../VISTA/empleado/frm_empleado.php");

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
     $reporte= new EMPLEADO($eli,null,null,null,null,null,null);
     /*llamar el metodo especifico */
     $res=$reporte->eliminar_emp();
     /*validar respuesta */
     if($res==1)
     {
        $reporte= new mostrar_emp();
        /*llamar funcion*/
        $res=$reporte->mostrar_empe(); 
        /*donde mostrar la respuesta*/
        /*echo"hola";*/
        include("../VISTA/empleado/frm_empleado.php");
     }

     else
     {
         echo "ojo error al eliminar datos los datos";


     }
     /*mostrar en el formulario especifico al proceso que se este realizando modificar*/
     


 }//fin ELIMINAR
?>