<?php
include("logica/clase_prov.php");
//llama todas las hojas de la pagina web
class proveedor1
{
  function ppal_ped()
  {
    /*invocar reporte curso*/
    $reporte = new PROVEDOR(null,null);

    /*llamar funcion*/
    $res = $reporte->mostrar_pedi();
    /*donde mostrar la respuesta*/
    /*echo"hola";*/
    include("vista/provedor/frm_pro.php");
  } //fin funcion principal  

  function reg_ped()
  {
    /*recibir parametros pasar a variables*/

    $nom = $_POST['nom'];

    /*ENVIAR DATOS para ser ingresado*/
    $insertar = new PROVEDOR(NULL, $nom);
    $res_inser = $insertar->insert_pro();
    /*validar respuesta  */
    if ($res_inser == 1) {
      $reporte = new PROVEDOR(null,null);
      /*llamar funcion*/

      $res = $reporte->mostrar_pedi();
      include("vista/provedor/frm_pro.php");
    } //fin if 
    else {
      echo "error al insertar los datos";
    }
  } //fin funcion papeleria

  function ver_ped()
  {
    if (isset($_GET['cod_act'])) {
      /*pasar informacion de caja de texto a variable*/
      $act = $_GET['cod_act'];
      /*instanciar clase log_curso */
      $reporte = new PROVEDOR(null,null);
      /*llamar el metodo especifico */

      $res = $reporte->reporte_codigo($act);
      /*mostrar en el formulario especifico al proceso que se este realizando modificar*/
      include("vista/provedor/frm_pro_act.php");
    } //fin modificar

  }

  function actualizar_ped()
  {
    /*recibir lo parametros del formulario */
    $cod = $_POST['tx_cod'];
    $nom = $_POST['nom'];



    /*enviar datos para ser procesados */
    $actualizar = new PROVEDOR($cod, $nom);
    $res_modi = $actualizar->modificar_pro();

    /*validar respuesta */
    if ($res_modi == 1) {
      $reporte = new PROVEDOR(null,null);
      /*llamar funcion*/

      $res = $reporte->mostrar_pedi();
      /*donde mostrar la respuesta*/
      /*echo"hola";*/
      include("vista/provedor/frm_pro.php");
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
      $reporte = new PROVEDOR($eli, null);
      /*llamar el metodo especifico */
      $res_eli = $reporte->eliminar_pro();
      /*validar respuesta */
      if ($res_eli == 1) {
        $reporte = new PROVEDOR(null,null);
        /*llamar funcion*/

        $res = $reporte->mostrar_pedi();
        /*donde mostrar la respuesta*/
        /*echo"hola";*/
        include("vista/provedor/frm_pro.php");
      } else {
        echo "ojo error al eliminar datos los datos";
      }
      /*mostrar en el formulario especifico al proceso que se este realizando modificar*/
    } //fin ELIMINAR
  }
}//fin clase home 
