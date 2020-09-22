<?php
include("logica/clase_cliente.php");
//llama todas las hojas de la pagina web
class cliente2
{
  function ppal_cliente()
  {
    $reporte = new CLIENTE(null,null,null,null,null,null,null,null,null,null);

    $combo1 = $reporte->reporte_combo_mes();

    $combo = $reporte->reporte_combo_emp();


    /*llamar funcion*/
    $res = $reporte->mostrar_clien();
    //llamar formulario cursos
    include("vista/cliente/frm_cliente.php");
  } //fin funcion principal  

  

  function ver_cli()
  {
    if (isset($_GET['cod_act'])) {
      /*pasar informacion de caja de texto a variable*/
      $act = $_GET['cod_act'];
      /*instanciar clase log_curso */
      $reporte = new CLIENTE(null,null,null,null,null,null,null,null,null,null);

      $combo1 = $reporte->reporte_combo_mes();

      $combo = $reporte->reporte_combo_emp();
      /*llamar el metodo especifico */
      $res = $reporte->reporte_codigo($act);
      /*mostrar en el formulario especifico al proceso que se este realizando modificar*/
      include("vista/cliente/frm_actualizar_cli.php");
    } //fin modificar


  }

  function actualizar_cli()
  {
    /*recibir lo parametros del formulario */
    $iden_cli = $_POST['tx_iden'];
    $nom_cli = $_POST['tx_nom'];
    $mes = $_POST['com_mes'];
    $fecha_i = $_POST['FECHA_I'];
    $fecha_f = $_POST['FECHA_FI'];

    $cod_pro = $_POST['num_ped'];

    $empleado = $_POST['com_emp'];


    /*enviar datos para ser procesados */
    $actualizar = new CLIENTE($nom_cli,null,null,null,$iden_cli, $mes, $fecha_i, $fecha_f, $cod_pro, $empleado);
    $res_modi = $actualizar->modificar_cli();

    /*validar respuesta */
    if ($res_modi == 1) {
      $reporte = new CLIENTE(null,null,null,null,null,null,null,null,null,null);
      /*llamar funcion*/
      $combo1 = $reporte->reporte_combo_mes();

      $combo = $reporte->reporte_combo_emp();

      $res = $reporte->mostrar_clien();
      /*donde mostrar la respuesta*/
      /*echo"hola";*/
      include("vista/cliente/frm_cliente.php");
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
      $reporte = new CLIENTE(null,null,null,null,$eli, null, null, null, null, null, null);
      /*llamar el metodo especifico */
      $res_eli = $reporte->eliminar_cli();
      /*validar respuesta */
      if ($res_eli == 1) {
        $reporte = new CLIENTE(null,null,null,null,null,null,null,null,null,null);

        $combo1 = $reporte->reporte_combo_mes();

        $combo = $reporte->reporte_combo_emp();
        /*llamar funcion*/
        $res = $reporte->mostrar_clien();
        /*donde mostrar la respuesta*/
        /*echo"hola";*/
        include("vista/cliente/frm_cliente.php");
      } else {
        echo "ojo error al eliminar datos los datos";
      }
      /*mostrar en el formulario especifico al proceso que se este realizando modificar*/
    } //fin ELIMINARr
  }
}//fin clase home 
