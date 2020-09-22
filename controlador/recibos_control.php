<?php
include("logica/clase_recibos.php");
//llama todas las hojas de la pagina web
class recibos1
{
  function ppal_rec()
  {
    /*invocar reporte curso*/
    $reporte = new RECIBOS(null,null,null,null,null,null,null);
    //   /*llamar funcion*/
    $combo1 = $reporte->reporte_combo_mes();
    $combo = $reporte->reporte_combo_emp();
    $res = $reporte->mostrar_reci();
    /*donde mostrar la respuesta*/
    //   /*echo"hola";*/
    include("vista/recibos/frm_recibos.php");
  } //fin funcion principal  

  function reg_rec()
  {
    /*recibir parametros pasar a variables*/
    $cod = $_POST['tx_cod'];
    $mes = $_POST['com_mes'];
    $luz = $_POST['luz'];
    $agua = $_POST['agua'];
    $fecha_i = $_POST['fecha_i'];
    $fecha_f = $_POST['fecha_f'];
    $iden = $_POST['com_emp'];

    /*ENVIAR DATOS para ser ingresado*/
    $insertar = new RECIBOS($cod, $mes, $luz, $agua, $fecha_i, $fecha_f, $iden);
    $res_inser = $insertar->insert_re();
    /*validar respuesta  */
    if ($res_inser == 1) {
      $reporte = new RECIBOS(null,null,null,null,null,null,null);
      /*llamar funcion*/
      $combo1 = $reporte->reporte_combo_mes();
      $combo = $reporte->reporte_combo_emp();
      $res = $reporte->mostrar_reci();
      include("vista/recibos/frm_recibos.php");
    } //fin if 
    else {
      echo "error al insertar los datos";
    }
  } //fin funcion papeleria

  function ver_rec()
  {
    if (isset($_GET['cod_act'])) {
      /*pasar informacion de caja de texto a variable*/
      $act = $_GET['cod_act'];
      /*instanciar clase log_curso */
      $reporte = new RECIBOS(null,null,null,null,null,null,null);
      $combo1 = $reporte->reporte_combo_mes();
      $combo = $reporte->reporte_combo_emp();
      /*llamar el metodo especifico */
      $res = $reporte->reporte_codigo($act);
      /*mostrar en el formulario especifico al proceso que se este realizando modificar*/
      include("vista/recibos/frm_recibos_act.php");
    } //fin modificar


  }

  function actualizar_rec()
  {
    /*recibir lo parametros del formulario */
    $cod = $_POST['tx_cod'];
    $mes = $_POST['com_mes'];
    $luz = $_POST['luz'];
    $agua = $_POST['agua'];
    $fecha_i = $_POST['fecha_i'];
    $fecha_f = $_POST['fecha_f'];
    $iden = $_POST['com_emp'];


    /*enviar datos para ser procesados */
    $actualizar = new RECIBOS($cod, $mes, $luz, $agua, $fecha_i, $fecha_f, $iden);
    $res_modi = $actualizar->modificar_re();

    /*validar respuesta */
    if ($res_modi == 1) {
      $reporte = new RECIBOS(null,null,null,null,null,null,null);
      /*llamar funcion*/
      $combo1 = $reporte->reporte_combo_mes();
      $combo = $reporte->reporte_combo_emp();
      $res = $reporte->mostrar_reci();
      /*donde mostrar la respuesta*/
      /*echo"hola";*/
      include("vista/recibos/frm_recibos.php");
    } else {
      echo "ojo error al modificar los datos";
    }
  }

  function eliminar()
  {
    if (isset($_GET['cod_eli'])) {
      /*pasar informacion de caja de texto a variable*/
      $eli = $_GET['cod_eli'];
      /*instanciar clase log_curso */
      $reporte = new RECIBOS($eli, null, null, null, null, null, null);
      /*llamar el metodo especifico */
      $res_eli = $reporte->eliminar_re();
      /*validar respuesta */
      if ($res_eli == 1) {
        $reporte = new RECIBOS(null,null,null,null,null,null,null);
        /*llamar funcion*/
        $res = $reporte->mostrar_reci();
        $combo1 = $reporte->reporte_combo_mes();
        $combo = $reporte->reporte_combo_emp();
        /*donde mostrar la respuesta*/
        /*echo"hola";*/
        include("vista/recibos/frm_recibos.php");
      } else {
        echo "ojo error al eliminar datos los datos";
      }
      /*mostrar en el formulario especifico al proceso que se este realizando modificar*/
    } //fin ELIMINAR
  }
}//fin clase home 
