<?php
include("logica/clase_inven.php");
//llama todas las hojas de la pagina web
class inventario1
{
  function ppal_inven()
  {
    /*invocar reporte curso*/
    $reporte = new INVENTARIO(null,null,null,null,null,null,null,null);
    /*llamar funcion*/
    $combo1 = $reporte->reporte_combo_emp();
    $combo = $reporte->reporte_combo_pro();
    $res = $reporte->mostrar_inven();
    /*donde mostrar la respuesta*/
    /*echo"hola";*/
    include("vista/inventario/frm_inventario.php");
  } //fin funcion principal  

  function reg_inv()
  {
    /*recibir parametros pasar a variables*/
    $pkcod_pro = $_POST['tx_cod'];
    $nom_pro = $_POST['tx_nom'];
    $des = $_POST['des'];
    $num_pro = $_POST['num_pro'];
    $pre_uni = $_POST['precio_e'];
    $pre_s = $_POST['precio_s'];
    $com_pro = $_POST['com_pro'];
    $com_emp = $_POST['com_emp'];

    /*ENVIAR DATOS para ser ingresado*/
    $insertar = new INVENTARIO($nom_pro, $des, $num_pro,$com_pro, $com_emp,$pkcod_pro,  $pre_uni, $pre_s, );
    $res_inser = $insertar->insert_inv();
  
    /*validar respuesta  */
    if ($res_inser == 1) {
      $reporte = new INVENTARIO(null,null,null,null,null,null,null,null);
      /*llamar funcion*/
      $combo1 = $reporte->reporte_combo_emp();
      $combo = $reporte->reporte_combo_pro();
      $res = $reporte->mostrar_inven();
      include("vista/inventario/frm_inventario.php");
    } //fin if 
    else {
      echo "error al insertar los datos";
    }
  } //fin funcion papeleria

  function ver_inv()
  {
    if (isset($_GET['cod_act'])) {
      /*pasar informacion de caja de texto a variable*/
      $act = $_GET['cod_act'];
      /*instanciar clase log_curso */

      $reporte = new INVENTARIO(null,null,null,null,null,null,null,null);
      /*llamar el metodo especifico */
      $combo1 = $reporte->reporte_combo_emp();
      $combo = $reporte->reporte_combo_pro();
      $res = $reporte->reporte_codigo($act);
      /*mostrar en el formulario especifico al proceso que se este realizando modificar*/
      include("vista/inventario/frm_actualizar_inv.php");
    } //fin modificar



  }

  function actualizar_inv()
  {
    /*recibir lo parametros del formulario */
    $pkcod_pro = $_POST['tx_cod'];
    $nom_pro = $_POST['tx_nom'];
    $des = $_POST['des'];
    $num_pro = $_POST['num_pro'];
    $pre_uni = $_POST['precio_e'];
    $pre_s = $_POST['precio_s'];
    $com_pro = $_POST['com_pro'];
    $com_emp = $_POST['com_emp'];


    /*enviar datos para ser procesados */
    $actualizar = new INVENTARIO($nom_pro, $des, $num_pro,$com_pro, $com_emp,$pkcod_pro,  $pre_uni, $pre_s );
    $res_modi = $actualizar->modificar_inv();

    /*validar respuesta */
    if ($res_modi == 1) {
      $reporte = new INVENTARIO(null,null,null,null,null,null,null,null);
      /*llamar funcion*/
      $combo1 = $reporte->reporte_combo_emp();
      $combo = $reporte->reporte_combo_pro();
      $res = $reporte->mostrar_inven();
      /*donde mostrar la respuesta*/
      /*echo"hola";*/
      include("vista/inventario/frm_inventario.php");
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
      $reporte = new INVENTARIO(null, null, null, null, null,$eli,null,null);
      /*llamar el metodo especifico */
      $res_eli = $reporte->eliminar_inv();
      /*validar respuesta */
      if ($res_eli == 1) {
        $reporte = new INVENTARIO(null,null,null,null,null,null,null,null);
        /*llamar funcion*/
        $combo1 = $reporte->reporte_combo_emp();
        $combo = $reporte->reporte_combo_pro();
        $res = $reporte->mostrar_inven();
        /*donde mostrar la respuesta*/
        /*echo"hola";*/
        include("vista/inventario/frm_inventario.php");
      } else {
        echo "ojo error al eliminar datos los datos";
      }
      /*mostrar en el formulario especifico al proceso que se este realizando modificar*/
    } //fin ELIMINAR
  }
}//fin clase home 
