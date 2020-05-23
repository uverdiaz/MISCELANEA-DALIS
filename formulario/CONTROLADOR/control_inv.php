<?php
   /*LLAMAR LOGICA*/
   include ("../logica/clase_inven.php"); 
  /* validar evento boton*/
  if(isset($_POST['sub_emp'])) 
      {
          /*invocar reporte curso*/
          $reporte= new mostrar_inv();
          /*llamar funcion*/
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
            $num_pro=$_POST['num_pro'];
            $pre_uni=$_POST['precio'];
            $fkcod_ped=$_POST['ped'];
          /*ENVIAR DATOS para ser ingresado*/
          $insertar= new INVENTARIO($pkcod_pro,$nom_pro,$num_pro,$pre_uni,$fkcod_ped);
          $res_inser=$insertar->insert_inv();
          /*validar respuesta  */
          if($res_inser==1)
          {
            $reporte= new mostrar_inv();
            /*llamar funcion*/
            $res=$reporte->mostrar_inven();
            include("../VISTA/EMPLEADO/frm_inventario.php"); 


          }//fin if 
          else
          {
              echo"error al insertar los datos";
          }
        
          
      }//fin boton registrar
?>