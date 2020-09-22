<?php
include("logica/clase_emp.php");
//llama todas las hojas de la pagina web
class empleado1
{
  function ppal_empleado()
  {
    /*invocar reporte curso*/
    $reporte = new EMPLEADO(null,null,null,null,null,null,null);
    //   /*llamar funcion*/
    $res = $reporte->mostrar_empe();
    /*donde mostrar la respuesta*/
    /*echo"hola";*/
    include("vista/empleado/frm_empleado.php");
  } //fin funcion principal  

  function reg_emp()
  {
    /*recibir parametros pasar a variables*/
    $id = $_POST['tx_cod'];
    $nom = $_POST['nom'];
    $ape = $_POST['ape'];
    $edad = $_POST['adad'];
    $salario = $_POST['sal'];
    /*ENVIAR DATOS para ser ingresado*/
    $insertar = new EMPLEADO($nom, $ape, $edad, $salario,$id,null,null);
    $res_inser = $insertar->insert_emp();
    /*validar respuesta  */
    if ($res_inser == 1) {
      $reporte = new EMPLEADO(null,null,null,null,null,null,null);
      /*llamar funcion*/
      $res = $reporte->mostrar_empe();
      include("vista/empleado/frm_empleado.php");
    } //fin if 
    else {
      echo "error al insertar los datos";
    }
  } //fin funcion papeleria

  function ver_emp()
  {

    if (isset($_GET['cod_act'])) {
      /*pasar informacion de caja de texto a variable*/
      $act = $_GET['cod_act'];
      /*instanciar clase log_curso */
      $reporte = new EMPLEADO(null,null,null,null,null,null,null);
      /*llamar el metodo especifico */
      $res = $reporte->reporte_codigo($act);
      /*mostrar en el formulario especifico al proceso que se este realizando modificar*/
      include("vista/empleado/frm_empleado_act.php");
    } //fin modificar


  }

  function actualizar_emp()
  {
    /*recibir lo parametros del formulario */
    $id = $_POST['tx_cod'];
    $nom = $_POST['nom'];
    $ape = $_POST['ape'];
    $edad = $_POST['adad'];
    $salario = $_POST['sal'];


    /*enviar datos para ser procesados */
    $actualizar = new EMPLEADO($nom, $ape, $edad, $salario,$id,null,null);
    $res_modi = $actualizar->modificar_emp();

    /*validar respuesta */
    if ($res_modi == 1) {
      $reporte = new EMPLEADO(null,null,null,null,null,null,null);
      /*llamar funcion*/
      $res = $reporte->mostrar_empe();
      /*donde mostrar la respuesta*/
      /*echo"hola";*/
      include("vista/empleado/frm_empleado.php");
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
      $reporte = new EMPLEADO(null,null,null,null,$eli,null,null);
      /*llamar el metodo especifico */
      $res = $reporte->eliminar_emp();
      /*validar respuesta */
      if ($res == 1) {
        $reporte = new EMPLEADO(null,null,null,null,null,null,null);
        /*llamar funcion*/
        $res = $reporte->mostrar_empe();
        /*donde mostrar la respuesta*/
        /*echo"hola";*/
        include("vista/empleado/frm_empleado.php");
      } else {
        echo "ojo error al eliminar datos los datos";
      }
      /*mostrar en el formulario especifico al proceso que se este realizando modificar*/
    }
  } //fin clase home 
}
