<?php
include("logica/clase_pedido.php");
//llama todas las hojas de la pagina web
class pedido1
{
  function ppal_pedi()
  {
    /*invocar reporte curso*/
    $reporte = new PEDIDO(null,null,null,null,null,null,null,null);

    /*llamar funcion*/
    $combo1 = $reporte->reporte_combo_emp();
    $combo = $reporte->reporte_combo_pro();
    $res = $reporte->mostrar_pedi();
    /*donde mostrar la respuesta*/
    /*echo"hola";*/
    include("vista/pedidos/frm_pedido.php");
  } //fin funcion principal  

  function reg_pedi()
  {
    /*recibir parametros pasar a variables*/
    $cod = $_POST['tx_cod'];
    $date = $_POST['date'];
    $nom = $_POST['nom'];
    $des = $_POST['des'];
    $num = $_POST['num'];
    $precio = $_POST['pre'];
    $com_pro = $_POST['com_pro'];
    $com_emp = $_POST['com_emp'];
    /*ENVIAR DATOS para ser ingresado*/
    $insertar = new PEDIDO($nom, $des, $num,$com_pro, $com_emp,$cod, $date,  $precio);
    $res_inser = $insertar->insert_ped();
    /*validar respuesta  */
    if ($res_inser == 1) {
      $reporte = new PEDIDO(null,null,null,null,null,null,null,null);
      /*llamar funcion*/
      $combo1 = $reporte->reporte_combo_emp();
      $combo = $reporte->reporte_combo_pro();
      $res = $reporte->mostrar_pedi();
      include("vista/pedidos/frm_pedido.php");
    } //fin if 
    else {
      echo "error al insertar los datos";
    }
  } //fin funcion papeleria

  function ver_pedi()
  {
    if (isset($_GET['cod_act'])) {
      /*pasar informacion de caja de texto a variable*/
      $act = $_GET['cod_act'];
      /*instanciar clase log_curso */
      $reporte = new PEDIDO(null,null,null,null,null,null,null,null);
      /*llamar el metodo especifico */
      $combo1 = $reporte->reporte_combo_emp();
      $combo = $reporte->reporte_combo_pro();
      $res = $reporte->reporte_codigo($act);
      /*mostrar en el formulario especifico al proceso que se este realizando modificar*/
      include("vista/pedidos/frm_pedido_act.php");
    } //fin modificar


  }

  function actualizar_pedi()
  {
    /*recibir lo parametros del formulario */
    $cod = $_POST['tx_cod'];
    $date = $_POST['date'];
    $nom = $_POST['nom'];
    $des = $_POST['des'];
    $num = $_POST['num'];
    $precio = $_POST['pre'];
    $com_pro = $_POST['com_pro'];
    $com_emp = $_POST['com_emp'];


    /*enviar datos para ser procesados */
    $actualizar = new PEDIDO($nom, $des, $num,$com_pro, $com_emp,$cod, $date,  $precio);
    $res_modi = $actualizar->modificar_ped();

    /*validar respuesta */
    if ($res_modi == 1) {
      $reporte = new PEDIDO(null,null,null,null,null,null,null,null);
      /*llamar funcion*/
      $combo1 = $reporte->reporte_combo_emp();
      $combo = $reporte->reporte_combo_pro();
      $res = $reporte->mostrar_pedi();
      /*donde mostrar la respuesta*/
      /*echo"hola";*/
      include("vista/pedidos/frm_pedido.php");
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
      $reporte = new PEDIDO(null, null, null, null, null,$eli, null, null);
      /*llamar el metodo especifico */
      $res_eli = $reporte->eliminar_emp();
      /*validar respuesta */
      if ($res_eli == 1) {
        $reporte = new PEDIDO(null,null,null,null,null,null,null,null);
        /*llamar funcion*/
        $combo1 = $reporte->reporte_combo_emp();
        $combo = $reporte->reporte_combo_pro();
        $res = $reporte->mostrar_pedi();
        /*donde mostrar la respuesta*/
        /*echo"hola";*/
        include("vista/pedidos/frm_pedido.php");
      } else {
        echo "ojo error al eliminar datos los datos";
      } //fin ELIMINARr
    }
  } //fin clase home 
}
