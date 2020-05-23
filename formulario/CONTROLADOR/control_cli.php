<?php
   /*LLAMAR LOGICA*/
   include ("../logica/clase_cliente.php"); 
  /* validar evento boton*/
  if(isset($_POST['sub_cli'])) 
      {
          /*invocar reporte curso*/
          $reporte= new mostrar_cli();
          /*llamar funcion*/
          $res=$reporte->mostrar_clien(); 
          /*donde mostrar la respuesta*/
          /*echo"hola";*/
          include("../VISTA/CLIENTE/frm_cliente.php");

        
          
      }//fin boton sub_cur


 if(isset($_POST['sub_registrar'])) 
      {
          /*recibir parametros pasar a variables*/
          $iden_cli=$_POST['tx_iden'];
          $nom_cli=$_POST['tx_nom'];
          $cod_pro=$_POST['num_ped'];
          /*ENVIAR DATOS para ser ingresado*/
          $insertar= new CLIENTE($iden_cli,$nom_cli,$cod_pro);
          $res_inser=$insertar->insert_cli();
          /*validar respuesta  */
          if($res_inser==1)
          {
            $reporte= new mostrar_cli();
            /*llamar funcion*/
            $res=$reporte->mostrar_clien();
            include("../VISTA/CLIENTE/frm_cliente.php"); 


          }//fin if 
          else
          {
              echo"error al insertar los datos";
          }
        
          
      }//fin boton registrar
?>